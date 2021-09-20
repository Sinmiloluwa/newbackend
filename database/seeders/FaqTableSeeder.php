<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('faq')->insert([
           [
            'id' => 1,
            'question' => 'What is pennee all about',
            'answer' => 'A platform to grow your business'
           ],

           [
            'id' => 2,
            'question' => 'How long does it take',
            'answer' => 'About 365 days'
           ],

           [
            'id' => 3,
            'question' => 'How much profit do i make',
            'answer' => 'Make use of the calculator'
           ],
          
        ]);
    }
}
