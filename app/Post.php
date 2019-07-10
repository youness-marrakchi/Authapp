<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    protected $table = 'posts'; // renaming the table
    //primary key
    protected $primaryKey = 'id';
    // timestamps
    public $timestamps = true;

    // creating a relationship with User Model
    public function user() {
    	return $this->belongsTo('App\User');
    }
}
