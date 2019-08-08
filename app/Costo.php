<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Goal
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal query()
 * @mixin \Eloquent
 */
class Costo extends Model
{
    protected $fillable = ['course_id', 'costo','description'];

    public function course () {
    	return $this->belongsTo(Course::class);
    }
}
