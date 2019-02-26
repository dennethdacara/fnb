<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductCategory, App\Models\Product;

class WebsiteController extends Controller
{
    public function home() 
    {
        $product_categories = ProductCategory::where('group_id', 0)
            ->where('id', '!=', 5)
            ->orderBy('sort_order', 'ASC')->get();
        $product_categories1 = ProductCategory::where('group_id', 0)
            ->where('id', '!=', 5)
            ->orderBy('sort_order', 'ASC')->get();

        return view ('v1/website/views/system/home', compact('product_categories', 'product_categories1'));
    }

    public function about()
    {
        return view ('v1/website/views/system/about');
    }

    public function productCategories()
    {
        $product_categories = ProductCategory::where('group_id', 0)->get();
        $productSubCategories = ProductCategory::where('group_id', '!=', 0)->get();
        return view ('v1/website/views/system/product_categories', compact('product_categories', 'productSubCategories'));
    }

    public function subCategories($slug)
    {
        $product_categories = ProductCategory::where('group_id', 0)->get();
        $product_category = ProductCategory::where('slug', $slug)->first();
        $productSubCategories = ProductCategory::where('group_id', $product_category->id)->get();
        $products = Product::all();

        //book covers w/o sub-category. 
        $products1 = Product::where('category_id', $product_category->id)->get();
        return view ('v1/website/views/system/sub_categories', compact('product_categories', 'product_category', 'productSubCategories', 'products', 'products1'));
    }

    public function products($category, $sub_category)
    {
        $product_category = ProductCategory::where('slug', $category)->first();
        $sub_category = ProductCategory::where('slug', $sub_category)->first();
        $product_categories = ProductCategory::where('group_id', 0)->get();
        $productSubCategories = ProductCategory::where('group_id', $product_category->id)->get();
        $products = Product::all();

        return view ('v1/website/views/system/products', 
            compact('product_category', 'sub_category', 'product_categories', 'productSubCategories', 'products'));
    }

    public function product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product_categories = ProductCategory::where('group_id', 0)->get();
        $related_products = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->get();
        return view ('v1/website/views/system/product', compact('product', 'product_categories', 'related_products'));
    }

    public function search(Request $request)
    {
        $search_text = $request->search_text;
        $products = Product::where('title', 'LIKE', "%$search_text%")->get();
        $productSubCategoryIds = Product::where('title', 'LIKE', "%" . $search_text . "%")->pluck('category_id');
        $productSubCategories = ProductCategory::whereIn('id', $productSubCategoryIds)->get();
        $product_categories = ProductCategory::where('group_id', 0)->get();

        return view ('v1/website/views/system/search_results', 
            compact('search_text', 'products', 'productSubCategories', 'product_categories'));
    }
    
    public function lms()
    {
        return view ('v1/website/views/system/lms');
    }

    public function contact()
    {
        return view ('v1/website/views/system/contact');
    }
}
