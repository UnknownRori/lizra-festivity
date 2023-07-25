<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $body = [];

        $body[] = $this->faker->paragraph(6);
        $body[] = $this->faker->paragraph(6);
        $body[] = $this->faker->paragraph(6);
        $body[] = $this->faker->paragraph(6);

        return [
            'title' => $this->faker->text(64),
            // 'body' => collect($this->faker->paragraphs(6))->implode("<br><br>"),
            'body' => collect($body)->implode('<br><br>'),
        ];
    }
}
