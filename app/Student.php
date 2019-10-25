<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $fillable = [
		'id', 'name', 'subject', 'date', 'grade'
	];
   public $timestamps = false;


}
