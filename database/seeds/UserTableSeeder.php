<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $json = storage_path() . "/json_data/users.json";
        $data = json_decode(file_get_contents($json, true));
        foreach ($data as $obj) {
            App\User::create([
                'id' => $obj->id,
                'role_id' => $obj->role_id,
                'name' => $obj->name,
                'email' => $obj->email,
                'username' => $obj->username,
                'password' => bcrypt('password'),
                'image' => $obj->image,
            ]);
        }
    }
}
