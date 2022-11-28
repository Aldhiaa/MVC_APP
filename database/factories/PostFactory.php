<?php

namespace Database\Factories;
use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
  
    
    protected $model = Post::class;
    
    public function definition()
    {   $title = $this->faker->realText(20);
        $title = $this->faker->realText(50);
        return [
            'title'         => $title,
            'body'          => $this->faker->text(100),
            'slug'          => Str::slug($title),
            'user_id'       => User::factory()->create()->id,
            'published_at'  => Carbon::now(),
        ];
     
    }
}
