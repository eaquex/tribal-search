<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Search extends Model
{
	use SoftDeletes;
	protected $table = 'search';

	protected $primaryKey = null;
}
