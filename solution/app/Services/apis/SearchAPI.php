<?php

namespace App\Services\Apis;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Services\ETL;
use App\Models\Search;

abstract class SearchAPI implements ETL
{
	const ENDPOINT = "";
	const SOURCE_NAME = "";

	abstract function extract($keyword);
	abstract function transform($dataset);

	public function load($data)
	{
		Search::insertOrIgnore($data);
	}

	public function __construct($keywords)
	{
		$this->extract($keywords);		
	}
}
