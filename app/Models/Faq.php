<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends BaseModel
{
    use  SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question', 'answer', 'status'];
}
