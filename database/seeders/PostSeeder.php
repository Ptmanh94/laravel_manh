<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //    DB::table('posts')->insert(
     //    	[
     //    	'slug'=>str::random(10),
     //    	'title'=>str::random(50),
     //    	'content'=>str::random(100),
     //    	'created_at'=>date('Y-m-d H:i:s'),
     //    	'updated_at'=>date('Y-m-d H:i:s'),
     //    	],
     //    	[
     //    	'slug'=>str::random(10),
     //    	'title'=>str::random(50),
     //    	'content'=>str::random(100),
     //    	'created_at'=>date('Y-m-d H:i:s'),
     //    	'updated_at'=>date('Y-m-d H:i:s'),
     //    	],
     //    	[
     //    	'slug'=>str::random(10),
     //    	'title'=>str::random(50),
     //    	'content'=>str::random(100),
     //    	'created_at'=>date('Y-m-d H:i:s'),
     //    	'updated_at'=>date('Y-m-d H:i:s'),
     //    	],
    	// );

        Post::factory(1000)->create();
    }
}
