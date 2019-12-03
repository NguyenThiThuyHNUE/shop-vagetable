<?php

use Illuminate\Database\Seeder;

class FeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feedback = new \App\Product();
        $product->user_id ='11111';
        $product->content = 'Cong nghe phan mem';
        $product->save();
    }
}
