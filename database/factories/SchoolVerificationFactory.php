<?php

namespace Database\Factories;

use App\Models\Accreditation;
use App\Models\School;
use App\Models\SchoolVerification;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolVerificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SchoolVerification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'school_id' => School::factory(),
            'sender_name' => $this->faker->name(),
            'school_name' => $this->faker->name(),
            'position' => $this->faker->jobTitle,
            'school_accreditation' => Accreditation::factory(),
            'school_address' => $this->faker->address,
            'school_phone' => $this->faker->phoneNumber,
            'operational_hour' => [],
            'school_logo' => null,
            'school_photo' => [],
            'school_description' => $this->faker->paragraph,
            'costs' => [],
            'school_website' => $this->faker->domainName,
            'socials' => [],
            'majors' => 'Sitem Informasi',
            'registration_time' => [],
            'test_results' => $this->faker->word
        ];
    }
}
