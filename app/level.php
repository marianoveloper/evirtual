<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\level
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\level newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\level query()
 * @mixin \Eloquent
 */
class level extends Model
{
    public function courses () {
    	return $this->hasMany(Course::class);
    }
}
