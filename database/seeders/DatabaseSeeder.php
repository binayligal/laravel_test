<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        // $user = User::factory()->create([
        //     'name' => "John Doe"
        // ]);
        // Post::factory(5)->create([
        //     'user_id' => $user-> id
        // ]);
        Employee::factory(50)->create();
        Department::factory(10)->create();

        // // \App\Models\User::factory(10)->create();
        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => "faker",
        //     'slug' => 'my-fak2e-post',
        //     'excerpt' => 'Ex',
        //     'body' => ' Lore ipsum'

        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => "faker",
        //     'slug' => 'my-fakasde-post',
        //     'excerpt' => 'Ex',
        //     'body' => ' Lore ipsum'

        // ]);
        // // \App\Models\User::factory()->create([
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => "faker",
        //     'slug' => 'my-fake-post',
        //     'excerpt' => 'Ex',
        //     'body' => ' Lore ipsum'

        // ]);
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
