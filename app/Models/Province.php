<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $table = 'province';
    public $primaryKey = 'id';
    protected $fillable = ['nama'];

    public function school(){
        return $this->hasMany(School::class, 'province_id');
    }
}
