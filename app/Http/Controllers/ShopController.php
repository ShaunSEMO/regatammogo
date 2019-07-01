<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{
    public function index(){
        $items = DB::table('items')->orderBy('id', 'DESC')->paginate(5);
        return view('shop.shop', compact(['items']));
    }

    public function show($id){
        $item = Item::find($id);
        return view('shop.show', compact(['item']));
    }
}
