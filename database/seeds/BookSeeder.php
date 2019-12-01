<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->truncate();
        DB::table('book')->insert(['name' => '42','code'=>'2adf',
            'enum'=>'1']);
            factory(Book::class,20)->create();
    }
}
