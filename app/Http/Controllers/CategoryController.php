<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use DB;


class CategoryController extends Controller
{
    public function createCategory(){
    	return view('admin.category.createCategory');
    }

     public function storeCategory(Request $request){
    	//return $request->all();
  /*	$category = new Category();
    	$category->CategoryName = $request->CategoryName;
    	$category->CategoryDescription = $request->CategoryDescription;
    	$category->PublicationStatus = $request->PublicationStatus;
    	$category->save();
    	return 'Category info save successfully';*/


  	DB::table('categories')->insert([
    		'categoryName'=>$request->categoryName,
    		'categoryDescription'=>$request->categoryDescription,
    		'publicationStatus'=>$request->publicationStatus,
    		]);
    	return redirect('/category/add')->with('message','Category info save successfully');
    }

    public function manageCategory(){
        $categories= Category::all();
        return view('admin.category.manageCategory', ['categories'=>$categories]);
    }
}
