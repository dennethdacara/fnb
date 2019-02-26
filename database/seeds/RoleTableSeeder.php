<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $json = storage_path() . "/json_data/roles.json";
        $data = json_decode(file_get_contents($json, true));
        foreach ($data as $obj) {
            App\Models\Role::create([
                'id' => $obj->id,
                'name' => $obj->name
            ]);
        }
    }
}
