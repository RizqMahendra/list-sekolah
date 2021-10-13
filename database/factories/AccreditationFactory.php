<?php

namespace Database\Factories;

use App\Models\Accreditation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccreditationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Accreditation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'accreditation' => 'A'
        ];
    }
}
