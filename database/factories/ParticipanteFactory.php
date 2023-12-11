<?php

namespace Database\Factories;

use App\Models\Participante;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ParticipanteFactory extends Factory
{
    protected $model = Participante::class;

    public function definition()
    {
        return [
            'cedula' => $this->faker->unique()->numberBetween(1000000, 9999999),
            'nombre' => $this->faker->firstName,
            'p_apellido' => $this->faker->lastName,
            's_apellido' => $this->faker->lastName,
            'f_nacimiento' => $this->faker->date(),
            'agencia' => $this->faker->company,
            'ciudad' => $this->faker->city,
            'genero' => $this->faker->randomElement(['masculino', 'femenino', 'otro']),
            'departamento' => $this->faker->state,
            'telefono' => $this->faker->phoneNumber,
            'sumatoria' => $this->faker->numberBetween(0, 100),
        ];
    }
}