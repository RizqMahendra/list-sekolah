<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    use HasFactory;
    protected $table = 'accreditation';
    public $primaryKey = 'id';
    protected $fillable = ['accreditation'];

    public function school(){
        return $this->hasOne(School::class, 'accreditation_id');
    }
}
