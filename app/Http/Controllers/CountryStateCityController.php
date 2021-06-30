<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\{Category,Subcategories};
 
class CountryStateCityController extends Controller
{
 
    public function categories()
    {
        $data['categories'] = Category::get(["title","id"]);
        return view('categories_subcategories',$data);
    }
	
	
    public function subcategories(Request $request)
    {
        $data['subcategories'] = Subcategories::where("cat_id",$request->cat_id)
                    ->get(["title","id"]);
        return response()->json($data);
    }
	
	
}