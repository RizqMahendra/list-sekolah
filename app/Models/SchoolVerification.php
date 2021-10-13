<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class SchoolVerification extends Model
{
    use HasFactory;

    protected $table = 'school_verification_requests';

    protected $guarded = [];

    public function accreditation() {
        return $this->belongsTo(Accreditation::class, 'accreditation_id');
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
        return json_decode($value);
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


    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function updateDataSchool(School $school)
    {
        Log::info("Data school updated by : $this->sender_name | $this->position");

        // school slug using string from school_name so carefull with this line
        // if ($this->school_name) {
        //     $school->name = $this->school_name;
        // }

        if ($this->school_name){
            $school->name = $this->school_name;
        }

        if ($this->school_accreditation){
            $school->accreditation_id = $this->school_accreditation;
        }

        if ($this->school_description) {
            $school->description = $this->school_description;
        }

        if ($this->school_logo) {
            $school->school_logo = $this->school_logo;
        }

        if ($this->school_address) {
            $school->address = $this->school_address;
        }

        if ($this->school_phone) {
            $school->phone = $this->school_phone;
        }

        if ($this->socials) {
            $school->socials = $this->socials;
        }

        if ($this->school_photo) {
            $school->school_photo = $this->school_photo;
        }

        if ($this->registration_time){
            $school->registration_time = $this->registration_time;
        }

        $school->save();
    }
}
