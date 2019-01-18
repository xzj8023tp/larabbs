<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //插入数据
        $categories = [
            [
                'name'        => '分享',
                'description' => '分享创造，分享发现，才是提现自己的奉献精神的方法',
            ],
            [
                'name'        => '教程',
                'description' => '入门，提升，修炼，大牛-开发技巧、推荐扩展包等',
            ],
            [
                'name'        => '问答',
                'description' => '互帮互助，共同进步',
            ],
            [
                'name'        => '公告',
                'description' => '站点公告，让你了解最新的动态',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //truncate()方法为清空categories表里所有的数据
        DB::table('categories')->truncate();
    }
}
