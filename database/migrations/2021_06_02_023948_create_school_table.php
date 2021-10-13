<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accreditation_id');
            $table->unsignedBigInteger('category_school_id');
            $table->unsignedBigInteger('school_status_id');
            $table->unsignedBigInteger('province_id');
            $table->string('name', 191);
            $table->text('description');
            $table->text('school_logo');
            $table->json('school_photo')->nullable;
            $table->string('address', 191);
            $table->string('website')->unique()->nullable();
            $table->string('phone', 20)->unique();
            $table->json('socials')->nullable();
            $table->timestamps();
            $table->foreign('accreditation_id')->references('id')->on('accreditation')->onDelete('cascade');
            $table->foreign('category_school_id')->references('id')->on('category_school')->onDelete('cascade');
            $table->foreign('school_status_id')->references('id')->on('school_status')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('province');
            $table->string('majors')->nullable();
            $table->json('operational_hour')->nullable();
            $table->float('lattitude', 10,6)->nullable();
            $table->float('longtitude', 10,6)->nullable();
            $table->string('costs')->nullable();
            $table->json('registration_time')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school');
    }
}
