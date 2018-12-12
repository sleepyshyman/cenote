<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '分享',
            'description' => '分享创造，分享发现',
        ]);
        DB::table('categories')->insert([
                'name'  => '教程',
                'description' => '开发技巧、推荐扩展包等',
            ]);
        DB::table('categories')->insert([
                'name' => '问答',
                'description' => '请保持友善，互帮互助',
            ]);
        DB::table('categories')->insert(
            [
                'name' => '公告',
                'description' => '站点公告',
            ]);
    }
}
