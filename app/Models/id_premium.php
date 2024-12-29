<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class id_premium extends Model
{
    protected $fillable =['plan_name', "price"];
    protected $table = "id_premium";
}
