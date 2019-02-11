<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryAndItemController extends Controller
{
    //show category

    public function showCategory()
    {
    	$categories = DB::table('categories')->get();

    	return view('welcome',['categories'=>$categories]);
    }
    public function showItem($category_id)
    {
        $categories = DB::table('categories')->get();
    	$items = DB::table('items')->where('cid',$category_id)->get();

    	return view('item.item',['items'=>$items,'categories'=>$categories]);
    }
    public static function getAllItem()
    {
        $items = DB::table('items')->get();

        return $items;
    }
}
