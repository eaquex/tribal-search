<?php

namespace App\Services\apis;

use Illuminate\Support\Facades\Http;
use App\Services\ETL;

class Crcind extends SearchAPI
{
	const ENDPOINT = "http://www.crcind.com/csp/samples/SOAP.Demo.cls?soap_method=QueryByName&name=";
	const SOURCE_NAME = "crcind";

	private $data;

	public function extract($keywords)
	{
		$response = Http::get(self::ENDPOINT . urlencode($keywords));

		/*
		 * La siguiente es una adaptación simple para leer la respuesta de la api SOAP en sustitución a la clase SoapClient
		 * y no requiera usar extensiones de un servidor en producción que no esta disponible con artisan.
		 */

		if ($response->ok())
		{
			$xml = new \DOMDocument();
			$xml->loadXML($response->body());
			
			$data = array();
			$results = $xml->getElementsByTagName("QueryByName");

			$count = 0;
			$row = array();			

			foreach($results as $result)
			{				
			    foreach($result->childNodes as $node)
			    {
					if ($node instanceof \DOMElement)
					{
				    	if ($count < 4)
				    	{
				    		$row[$node->tagName] = $node->textContent;
				    		$count++;
				    	}
				    	else
				    	{
							$count = 0;
				    		array_push($data, $row);
				    		$row = array();
				    		array_push($row, $node->textContent);
				    	}						
					}
			    }
			}

			$this->transform($data);
		}
	}

	public function transform($dataset)
	{
		$data = array();

		foreach ($dataset as $row)
		{
			$data[] = [ "name" => $row["Name"], "collection" => null, "type" => "person", "source" => self::SOURCE_NAME, "created_at" => date('Y-m-d H:i:s')];
		}

		$this->load($data);
	}
}
