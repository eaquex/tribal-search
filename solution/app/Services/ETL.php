<?php

namespace App\Services;

interface ETL
{
	public function extract($keywords);
	public function transform($dataset);
	public function load($data);
}
