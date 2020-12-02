<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Services\Apis\ITunes;
use App\Services\Apis\TVMaze;
use App\Services\Apis\Crcind;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/search', function (Request $request) {
	try
	{
		// Parameters
		$keywords 	= $request->input("keywords");
		$type 		= $request->input("type");
		$source 	= $request->input("source");

		// Keywords required
		if (empty($keywords))
		{
			return response()->json(["message" => "Missing keywords"], 400);
		}

		if (strlen($type) > 0 && !in_array($type, ['movie', 'music-video', 'song', 'person']))
		{
			return response()->json(["message" => "Invalid type (Accept only: movie, music-video, song, person)"], 400);
		}

		if (strlen($source) > 0 && !in_array($source, ['itunes', 'tvmaze', 'crcind']))
		{
			return response()->json(["message" => "Invalid source (Accept only: itunes, tvmaze, crcind)"], 400);
		}

		// Api updates
    	$api1 = new ITunes($keywords);
    	$api2 = new TVMaze($keywords);
    	$api3 = new Crcind($keywords);

    	// Query
    	$query = DB::table('search')->select('collection','name','type','source')->where('name', 'like', '%' . $keywords . '%')->orderBy('name', 'asc');

    	// Search by type
    	if ($type)
    		$query->where('type', $type);

    	// Search by source
    	if ($source)
    		$query->where('source', $source);

		return response()->json($query->get());
	}
	catch(\Exception $e)
	{
		return response()->json(["message" => $e->getMessage()], 400);
	}
});
