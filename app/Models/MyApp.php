<?php

namespace App\Models;
  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyApp extends Model
{
    protected $table = 'newApp'; 

    public static function getData(){
        return self::all();
        // return self::where('sno',1)->get();
    }

    use HasFactory;
}
