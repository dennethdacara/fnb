<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductViewAllTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $product = \App\Models\Product::create([
            'category_id' => 1,
            'title' => 'test',
            'image' => null,
            'description' => 'test desc',
            'author' => 'test author',
            'price' => 100,
            'slug' => 'test-product',
            'is_published' => true,
            'sort_order' => 1
        ]);

        $resp = $this->get('product/'.$product->slug);
        $resp->assertStatus(200);
        $resp->assertSee($product->title);
        $resp->assertSee($product->description);

        $this->assertTrue(true);
    }
}
