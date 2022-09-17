<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;
use League\CommonMark\Node\Block\Paragraph;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,4)),
            'slug' => $this->faker->slug(mt_rand(3,4)),
            'body' => '<p>' . implode('</p><p>' ,$this->faker->paragraphs(mt_rand(2,5))) . '</p>',
            'category_id' => mt_rand(1,5),
            'user_id' => mt_rand(1,8)
        ];
    }
}
