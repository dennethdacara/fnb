<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_categories')->delete();
        $json = storage_path() . "/json_data/product_categories.json";
        $data = json_decode(file_get_contents($json, true));
        foreach ($data as $obj) {
            App\Models\ProductCategory::create([
                'id' => $obj->id,
                'group_id' => $obj->group_id,
                'name' => $obj->name,
                'image' => $obj->image,
                'is_published' => $obj->is_published,
                'sort_order' => $obj->sort_order,
                'slug' => str_slug($obj->name)
            ]);
        }
    }
}
