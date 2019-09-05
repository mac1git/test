<?php
// database/factories/ArticleFactory.php
 
use Faker\Generator as Faker;
use Carbon\Carbon;
 
$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'body' => $faker->paragraph(),
        'published_at' => Carbon::today(),
        // 追加
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
    ];
});