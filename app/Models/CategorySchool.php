<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySchool extends Model
{
    use HasFactory;
    protected $table = 'category_school';
    public $primaryKey = 'id';
    protected $fillable = ['category'];

    public function School(){
        return $this->hasOne(School::class, 'category_school_id');
    }
}
