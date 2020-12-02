<?php

namespace App\Services\Apis;

use Illuminate\Support\Facades\Http;
use App\Services\ETL;

class ITunes extends SearchAPI
{
	const ENDPOINT = "https://itunes.apple.com/search?term=";
	const SOURCE_NAME = "itunes";

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

		foreach ($dataset["results"] as $row)
		{	
			// Distinct types
			$name = null;
			$collection = null;
			$type = isset($row["kind"]) ? $row["kind"] : $row["wrapperType"];

			switch ($type)
			{
				case 'song':
				case 'music-video':
					$collection = isset($row["collectionName"]) ? $row["collectionName"] : null;
					$name = $row["trackName"];
					break;
				case 'feature-movie':
					$collection = null;
					$name = $row["trackName"];
					$type = 'movie';
					break;				
			}

			if (is_null($name) == false)
			{								
				$data[] = [ "name" => $name, "collection" => $collection, "type" => $type, "source" => self::SOURCE_NAME, "created_at" => date('Y-m-d H:i:s')];		
			}		
		}

		$this->load($data);
	}
}
