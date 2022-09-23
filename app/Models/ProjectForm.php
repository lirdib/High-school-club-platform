<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectForm extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table ='project_form';
}
