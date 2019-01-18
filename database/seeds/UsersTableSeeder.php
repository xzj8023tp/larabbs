<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\User',1)->create([
            'password' => bcrypt('13277161350xzj'),
            'avatar'   =>'/uploads/images/avatars/201901/18/3_1547793315_LiDznI1atv.jpg',
        ]);
    }
}
