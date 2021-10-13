<?php

namespace Database\Factories;

use App\Models\CategorySchool;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorySchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategorySchool::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category' => 'Universitas'
        ];
    }
}
