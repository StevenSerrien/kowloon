<?php

use Illuminate\Database\Seeder;

class FaqpostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50 ; $i++) {
          DB::table('faqposts')->insert([
            'question' => 'Dit is een vraag',
            'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius, augue nec molestie gravida, nulla lectus finibus leo, ac semper libero purus sit amet eros. Duis sodales vestibulum porttitor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse pharetra mi bibendum, pharetra magna nec, elementum velit. Quisque tristique lacus sed mauris finibus, et tincidunt lorem efficitur.',
          ]);
        }
    }
}
