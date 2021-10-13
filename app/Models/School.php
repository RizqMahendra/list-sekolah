<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'school';
    public $primaryKey = 'id';
    protected $fillable = ['accreditation_id', 'category_school_id', 'school_status_id', 'province_id', 'description', 'school_logo', 'school_photo', 'address', 'website', 'phone', 'socials', 'name','majors'];

    public function accreditation() {
        return $this->belongsTo(Accreditation::class, 'accreditation_id');
    }

    public function category_school(){
        return $this->belongsTo(CategorySchool::class, 'category_school_id');
    }

    public function school_status() {
        return $this->belongsTo(Status::class, 'school_status_id');
    }

    public function province() {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function setOperationalHourAttribute($value)
    {

        $hours = collect($value)->flatten()->toArray();

        if (empty(array_filter($hours, function ($hour) { return $hour !== null; }))) {
            $this->attributes['operational_hour'] = null;
        } else {
            $this->attributes['operational_hour'] = json_encode($value);
        }

    }


    public function setCostsAttribute($value)
    {

        if (empty(array_filter($value, function ($cost) { return $cost !== null; }))) {
            $this->attributes['costs'] = null;
        } else {
            $this->attributes['costs'] = json_encode($value);
        }

    }

    public function setSocialsAttribute($value)
    {

        if (empty(array_filter(array_values($value), function ($social) { return $social !== null; }))) {
            $this->attributes['socials'] = null;
        } else {
            $this->attributes['socials'] = json_encode($value);
        }

    }

    public function setSchoolPhotoAttribute($value)
    {

        if (empty(array_filter($value, function ($photo) { return $photo !== null; }))) {
            $this->attributes['school_photo'] = null;
        } else {
            $this->attributes['school_photo'] = json_encode($value);
        }

    }

    public function setRegistrationTimeAttribute($value)
    {

        if (empty(array_filter($value, function ($registration_time) { return $registration_time !== null; }))) {
            $this->attributes['registration_time'] = null;
        } else {
            $this->attributes['registration_time'] = json_encode($value);
        }

    }

    public function getOperationalHourAttribute($value)
    {

        $decodedHours = json_decode($value);

        $hours = collect($decodedHours)->flatten()->toArray();

        $filteredHour = array_filter($hours, function ($h) { return $h !== null; });

        return count($filteredHour) < 1 ? '<h4 class="label-info">Data Belum Tersedia.</h4>' : $decodedHours;

    }

    public function getCostsAttribute($value)
    {
        return json_decode($value);
    }

    public function getSocialsAttribute($value)
    {
        return json_decode($value);
    }

    public function getSchoolPhotoAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getRegistrationTimeAttribute($value)
    {
        return json_decode($value, true);
    }

}
