<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i=0;$i<10;$i++){
            $data[$i]['title'] = '标题-'.($i+1);
            $data[$i]['body'] = '内容-'.($i+1);
            $data[$i]['created_at'] =time();
            $data[$i]['updated_at'] =time();
        }
        DB::table('articles')->insert($data);
    }
}
