<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
  //---------------------------------------------------------------------------
  //                                  Create
  //---------------------------------------------------------------------------
     public function postCategories(Request $request) {
       header("Access-Control-Allow-Origin: *");
       Categories::create($request->all());
       return response()->json(array('success' => true, 'Categories_created' => 1), 200);
     }
  //---------------------------------------------------------------------------
  //                                  Read
  //---------------------------------------------------------------------------
   public function getAllCategories() {
     header("Access-Control-Allow-Origin: *");
     $categories = Categories::get();
     return response()->json($categories);
   }
   public function getCategories($category_id) {
     header("Access-Control-Allow-Origin: *");
     $category = Categories::find($category_id);
     return response()->json($category);
   }
   //---------------------------------------------------------------------------
   //                                  Update
   //---------------------------------------------------------------------------
   public function putCategories(Request $request, $category_id) {
     header("Access-Control-Allow-Origin: *");
     Categories::find($category_id)->update($request->all());
     return response()->json(array('success' => true, 'Categories_created' => 1), 200);
   }
   //---------------------------------------------------------------------------
   //                                  Delete
   //---------------------------------------------------------------------------
   public function deleteCategories($category_id) {
     header("Access-Control-Allow-Origin: *");
     $category = Categories::find($category_id)->delete();
     return response()->json(array('success' => true, 'Categories_deleted' => 1), 200);
   }
}
