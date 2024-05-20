<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{

	protected $fillable=[
        "id","user_id","type","title","question","answer","answerd_at","answerd_by"
    ];

	public function user()
	{
		return $this->belongsTo(User::class);
	}


}
