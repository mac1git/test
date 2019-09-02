<?php

use Illuminate\Database\Seeder;
 
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Article;
 
class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->delete();
 
        $user = App\User::first(); // 追加
 
        factory(App\Article::class, 20)->create([ // 修正
            'user_id' => $user->id,
        ]);
    }
}