<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model1 extends Model
{
    use HasFactory;
    public $table="table1";
    public $timestamps=false;
}
