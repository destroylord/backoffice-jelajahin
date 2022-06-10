<?php

namespace Database\Factories;

use App\Models\Host;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Host>
 */
class HostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Host::class;

    public function definition()
    {
        return [
            'uuid_host' => $this->faker->uuid,
            'full_name' => $this->faker->name(),
            'headline'  => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->text($maxNbChars = 200) ,
            'image'     => null,
            'email'     => $this->faker->email(),
            'password'  => Hash::make('passwo'),
            'phone'     => $this->faker->phoneNumber,
            'Address'   => 'Bondowoso',
            'province_id'  => 6,
            'city_id'   => 1,
            'verified_date' => null,
            'status'    => rand(0,1)
        ];
    }
}
