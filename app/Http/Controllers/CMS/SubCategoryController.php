<?php
namespace App\Http\Controllers\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;

class SubCategoryController extends Controller
{

    public function index()
    {   
        $sub_categories = ProductCategory::join('product_categories as parent_categories', 'parent_categories.id', 'product_categories.group_id')
            ->select('parent_categories.name as parent_category', 'product_categories.*')
            ->get();

        return view('v1/backend/views/system/sub_categories/index', compact('sub_categories'));
    }

    public function create()
    {
        $categories = ProductCategory::where('group_id', 0)->get();
        return view('v1/backend/views/system/sub_categories/create', compact('categories'));
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
            'group_id' => $request->group_id,
            'name' => $request->name,
            'image' => $final_image,
            'slug' => $slug,
            'is_published' => 1,
            'sort_order' => 0
        ]);

        return back()->with('message', 'Sub-Category Added Successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $sub_category = ProductCategory::find($id);
        $categories = ProductCategory::where('group_id', 0)->get();
        return view('v1/backend/views/system/sub_categories/edit', compact('sub_category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validateInput($request, $id);

        $sub_category = ProductCategory::find($id);
        $sub_category->name = $request->name;
        $sub_category->slug = $request->slug;
        $sub_category->group_id = $request->group_id;

        if ($request->hasFile('image')){
            // if (!$sub_category->image == NULL){
            //     unlink(public_path('img\uploads\\'.$sub_category->image));
            // }

            $image = $request->image;
            $image_new_name = time(). $image->getClientOriginalName();
            $image->move('img/uploads', $image_new_name);
            $final_image = $image_new_name;
        } else {
            $final_image = $sub_category->image;
        }

        $sub_category->image = $final_image;
        $sub_category->save();

        return back()->with('message', 'Sub-Category Updated Successfully!');
    }

    public function destroy($id)
    {
        $sub_category = ProductCategory::find($id)->delete();
        return back()->with('message', 'Sub-Category Deleted Successfully!');
    }

    private function validateInput($request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'group_id' => 'required'
        ]);
    }
}
