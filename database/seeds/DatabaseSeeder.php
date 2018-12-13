<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\forum\User::class, 50)->create();
        factory(\forum\User::class)->create(
            ['name' => 'pablo', 'email' => 'admin@admin.com', 'password' => bcrypt('123456')]
        );
        factory(\forum\Forum::class, 20)->create();
        factory(\forum\Post::class, 50)->create();
        factory(\forum\Reply::class, 100)->create();
    }
}
