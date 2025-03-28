<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Teacher
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teacher query()
 * @mixin \Eloquent
 */
class Teacher extends Model
{
    protected $fillable = ['user_id'];

	public function courses () {
		return $this->hasMany(Course::class);
	}

	public function user () {
		return $this->belongsTo(User::class);
	}
}
