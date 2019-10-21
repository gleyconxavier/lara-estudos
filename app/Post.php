<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Model class allready have a ton of functionalities
class Post extends Model
{
    // Only to know I can change that here
    // Table Name
    protected $table = 'posts';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
