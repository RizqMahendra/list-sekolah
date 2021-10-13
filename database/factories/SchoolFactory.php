<?php

namespace Database\Factories;

use App\Models\Accreditation;
use App\Models\CategorySchool;
use App\Models\Province;
use App\Models\School;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = School::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'accreditation_id' => Accreditation::factory(),
            'category_school_id' => CategorySchool::factory(),
            'school_status_id' => Status::factory(),
            'province_id' => Province::factory(),
            'operational_hour' => [],
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'school_logo' => $this->faker->imageUrl(),
            'school_photo' => json_encode([]),
            'address' => $this->faker->address,
            'majors' => $this->faker->name(),
            'website' => $this->faker->domainName,
            'phone' => $this->faker->phoneNumber,
            'socials'=>json_encode([]),
            'longtitude' => $this->faker->name(),
            'lattitude' => $this->faker->name(),
            'costs' => [],
            'registration_time'=> [],
        ];
    }
}
