<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Experience::class;

    public function definition()
    {
        return [
            'uuid_experience'   => $this->faker->uuid,
            'name'              => $this->faker->name(),
            'description'       => $this->faker->text(),
            'category'          => Arr::random(['martabak','terbul', 'pia']),
            'address'           => Arr::random(['Bondowoso', 'Stubondo', 'Malang']),
            'price'             => Arr::random([50000, 10000, 500000]),
            'duration'          => 100,
            'province_id'       => 6,
            'city_id'           => 1,
            'rating_avg'        => Arr::random([4.5, 5, 3, 2]),
            'rating_count'      => Arr::random([10, 15, 20]),
            'latitude'          => '1.7111111223',
            'longitude'         => '2.33333333',
            'accepted'          => Arr::random([0,1,2]),
            'uuid_host'         => $this->faker->uuid()
        ];
    }
}
