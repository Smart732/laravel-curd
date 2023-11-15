<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function show()
    {
        // return "<h1>test controller</h1>";
        $user = DB::table('products')->get();
        return view('all', ["user" => $user]);
    }
    public function insert(Request $REQUEST)
    {
        // dd($REQUEST->all());
        $REQUEST->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        $user = DB::table('products')->where('name', $REQUEST->name)->first();

        //return $user->email;
        if ($user) {
            # code...
            dd("alraedy");
        } else {
            $product = new product();
            $product->name = $REQUEST->name;
            $product->description = $REQUEST->description;
            $product->token = $REQUEST->_token;
            $product->save();
        }
        return back();
    }
    public function findone(string $id)
    {
        // dd($id);
        // return "<h1>test controller</h1>";
        $user = DB::table('products')->where('token', $id)->first();

        return view('edit', ["user" => $user]);
    }
    public function update(Request $REQUEST)
    {
        // dd($REQUEST->all());
        $REQUEST->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string'
        ]);
        $affected = DB::table('products')
            ->where('token', $REQUEST->token)
            ->update([
                'name' => $REQUEST->name,
                'description' => $REQUEST->description
            ]);
        $user = DB::table('products')->get();
        return view('all', ["user" => $user]);
    }
    public function add()
    {
        // return "<h1>test controller</h1>";
        return view('inser');
    }

    public function delete(string $id)
    {
        $find = Db::table('products')->where('token', $id);
        if ($find) {
            $find->delete();
            return redirect('/show');
        } else {
            echo 'no record match';
        }
    }
}
