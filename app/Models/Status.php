<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'school_status';
    public $primaryKey = 'id';
    protected $fillable = ['status'];

    public function school_name(){
        return $this->hasOne(School::class, 'school_status_id');
    }
}
