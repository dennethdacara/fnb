<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::where('group_id', 0)->get();
        return view('v1/backend/views/system/categories/index', compact('categories'));
    }

    public function create()
    {
        $count = ProductCategory::where('group_id', 0)->count() + 1;
        return view('v1/backend/views/system/categories/create', compact('count'));
    }

    public function store(Request $request)
    {
        $this->validateInput($request, null);
        $request->has('slug') ? $slug = $request->slug : $slug = str_slug($request->name);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move('img/uploads', $image_new_name);
            $final_image = $image_new_name;
        } else {
            $final_image = null;
        }

        ProductCategory::create([
            'group_id' => 0,
            'name' => $request->name,
            'image' => $final_image,
            'slug' => $slug,
            'is_published' => 1,
            'sort_order' => $request->sort_order
        ]);

        return back()->with('message', 'Category Added Successfully!');
    }

    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('v1/backend/views/system/categories/edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validateInput($request, $id);
        $category = ProductCategory::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->sort_order = $request->sort_order;

        if ($request->hasFile('image')){
            if (!$category->image == NULL){
                unlink(public_path('img\uploads\\'.$category->image));
            }
            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move('img/uploads', $image_new_name);
            $final_image = $image_new_name;
        } else {
            $final_image = $category->image;
        }

        $category->image = $final_image;
        $category->save();
        return back()->with('message', 'Category Updated Successfully!');
    }

    public function destroy($id)
    {
        $category = ProductCategory::find($id)->delete();
        if (!$category->image == NULL){
            unlink(public_path('img\uploads\\'.$category->image));
        }
        return back()->with('message', 'Category Deleted Successfully!');
    }

    private function validateInput($request, $id)
    {
        $this->validate($request, ['name' => 'required|unique:product_categories,name,'.$id]);
    }
}
