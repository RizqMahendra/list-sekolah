<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolVerificationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_verification_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained('school');
            $table->string('sender_name');
            $table->string('school_name');
            $table->string('position');
            $table->foreignId('school_accreditation')->constrained('accreditation');
            $table->text('school_address')->nullable();
            $table->string('school_phone')->nullable();
            $table->json('operational_hour')->nullable();
            $table->string('school_logo')->nullable();
            $table->json('school_photo')->nullable();
            $table->text('school_description')->nullable();
            $table->json('costs')->nullable();
            $table->string('school_website')->nullable();
            $table->json('socials')->nullable();
            $table->string('majors')->nullable();
            $table->json('registration_time')->nullable();
            $table->string('test_results')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_verification_requests');
    }
}
