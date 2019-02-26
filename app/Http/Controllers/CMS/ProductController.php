<?php

namespace App\Http\Controllers\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product, App\Models\ProductCategory;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::join('product_categories as pc', 'pc.id', 'products.category_id')
            ->select('products.*', 'pc.name as category')
            ->orderBy('products.created_at', 'desc')
            ->get();

        return view('v1/backend/views/system/products/index', compact('products'));
    }

    public function create()
    {
        $productSubCategories = ProductCategory::leftjoin('product_categories as pc', 'pc.id', 'product_categories.group_id')
            ->select('product_categories.*', 'pc.name as group_name')
            ->get();

        return view('v1/backend/views/system/products/create', compact('productSubCategories'));
    }

    public function store(Request $request)
    {
        $this->validateInput($request, null);

        $request->has('slug') ? $slug = $request->slug : $slug = str_slug($request->title);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move('img/uploads', $image_new_name);
            $final_image = $image_new_name;
        } else {
            $final_image = null;
        }

        Product::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $final_image,
            'description' => $request->description,
            'author' => $request->author,
            'price' => 0,
            'slug' => $slug,
            'is_published' => 1,
            'sort_order' => 0
        ]);

        return back()->with('message', 'Product Added Successfully!');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $productSubCategories = ProductCategory::leftjoin('product_categories as pc', 'pc.id', 'product_categories.group_id')
            ->select('product_categories.*', 'pc.name as group_name')
            ->get();
            
        return view('v1/backend/views/system/products/edit', compact('product', 'productSubCategories'));
    }

    public function update(Request $request, $id)
    {
        $this->validateInput($request, $id);

        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->author = $request->author;
        $product->slug = $request->slug;

        if ($request->hasFile('image')){
            if (!$product->image == NULL){
            //     //unlink(public_path($user->image));
                unlink(public_path('img\uploads\\'.$product->image));
            }
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move('img/uploads', $image_new_name);
            $final_image = $image_new_name;
        } else {
            $final_image = $product->image;
        }

        $product->image = $final_image;
        $product->save();

        return back()->with('message', 'Product Updated Successfully!');
    }

    public function destroy($id)
    {
        $product = Product::find($id)->delete();
        if (!$product->image == NULL){
            unlink(public_path('img\uploads\\'.$product->image));
        }
        return back()->with('message', 'Product Deleted Successfully!');
    }

    private function validateInput($request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required'
        ]);
    }
}
