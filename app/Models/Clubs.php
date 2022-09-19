<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    use HasFactory;
    protected $table = 'klubet';
    protected $primaryKey = 'id';


    public function projects(){
        return $this -> hasMany(Projects::class);
    }
}
