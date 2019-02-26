<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductCategoryViewAllTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $productCategory = \App\Models\ProductCategory::create([
            'group_id' => 1,
            'name' => 'test',
            'image' => null,
            'slug' => 'test',
            'is_published' => true,
            'sort_order' => 1
        ]);

        $resp = $this->get('product-categories');
        $resp->assertStatus(200);
        $resp->assertSee($productCategory->name);
        $resp->assertSee($productCategory->slug);

        $this->assertTrue(true);
    }
}
