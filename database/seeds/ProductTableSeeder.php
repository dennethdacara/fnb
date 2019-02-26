<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $json = storage_path() . "/json_data/products.json";
        $data = json_decode(file_get_contents($json, true));
        foreach ($data as $obj) {
            App\Models\Product::create([
                'id' => $obj->id,
                'category_id' => $obj->category_id,
                'title' => $obj->title,
                'image' => $obj->image,
                'description' => $obj->description,
                'author' => $obj->author,
                'price' => $obj->price,
                'slug' => str_slug($obj->title),
                'is_published' => $obj->is_published,
                'sort_order' => $obj->sort_order,
            ]);
        }
    }
}
