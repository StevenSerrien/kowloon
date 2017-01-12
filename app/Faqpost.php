<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faqpost extends Model
{
    public $fillable = ['question','answer'];
}
