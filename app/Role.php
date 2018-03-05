<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // Link to the User model
    public function users()
	{
		return $this->belongsToMany(User::class);
	}
}
