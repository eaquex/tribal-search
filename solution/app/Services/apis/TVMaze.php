<?php

namespace App\Services\apis;

use Illuminate\Support\Facades\Http;
use App\Services\ETL;

class TVMaze extends SearchAPI
{
	const ENDPOINT = "http://api.tvmaze.com/search/shows?q=";
	const SOURCE_NAME = "tvmaze";

	private $data;

	public function extract($keywords)
	{
		$response = Http::get(self::ENDPOINT . urlencode($keywords));

		if ($response->ok())
		{
			$this->transform($response->json());
		}
	}

	public function transform($dataset)
	{
		$data = array();

		foreach ($dataset as $row)
		{
			$data[] = [ "name" => $row["show"]["name"], "collection" => null, "type" => "movie", "source" => self::SOURCE_NAME, "created_at" => date('Y-m-d H:i:s')];
		}

		$this->load($data);
	}
}
