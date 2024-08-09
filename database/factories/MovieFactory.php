<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Gender;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory

{
    protected $model = Movie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
      
        $this->faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($this->faker));

        $filePathImage = $this->faker->image(storage_path('app/public/images'), 640, 480 );
        $filePathBanner = $this->faker->image(storage_path('app/public/banners'), 640, 480);


        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'banner' => Storage::url('banners/' . basename($filePathBanner)),
            'image' => Storage::url('images/' . basename($filePathImage)),
            'video' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Movie $movie) {
            $genreIds = Gender::pluck('id')->toArray();
            $randomGenders = array_rand(array_flip($genreIds), rand(1, 10));
            $movie->genders()->sync($randomGenders);
        });
    }
}
