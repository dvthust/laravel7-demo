<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 1)->create()->each(function ($user) {

            $user->token = base64_encode($user->email);

            if($user->id == 1){
                $user->name = "Tuấn Đặng";
                $user->username = "dvt.hust";
                $user->email = "dvt.hust@gmail.com";
                $user->phone = "+84384438721";
                $user->password = "123456";
            }

            $user->save();
        });
    }
}
