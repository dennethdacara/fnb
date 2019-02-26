<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth, DB, Session, App\User;
use App\Models\Product, App\Models\ProductCategory;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirectDashboard()
    {
        $totalProducts = Product::count();
        $totalCategories = ProductCategory::where('group_id', 0)->count();
        $totalSubCategories = ProductCategory::where('group_id', '!=', 0)->count();
        $totalUsers = User::count();

        if (Auth::user()->role_id == User::IS_SUPERADMIN) {
            return view ('v1/backend/views/system/dashboard/superadmin');
        } else if (Auth::user()->role_id == User::IS_ADMIN) {
            return view ('v1/backend/views/system/dashboard/admin', 
            compact('totalProducts', 'totalCategories', 'totalSubCategories', 'totalUsers'));
        }
    }

}
