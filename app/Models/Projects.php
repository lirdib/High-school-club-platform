<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table ='projektet';
    protected $primaryKey = 'idea';
    public $timestamps = false;
    protected $guarded = [];
    public function club(){
        return $this->belongsto(Clubs::class);
    }
