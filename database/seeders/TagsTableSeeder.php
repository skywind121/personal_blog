<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TagsTableSeeder extends Seeder
{   
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        //factory(Tag::class, 5)->create();
        Tag::factory()->count(5)->create();
    }
}