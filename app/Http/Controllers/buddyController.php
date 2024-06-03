<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Buddy;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class buddyController extends Controller
{
    public function insert(Request $req){

        $req->validate([
            'username' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);
        $imgName = time() . '.' .$req->image->extension();
        $req->image->move(public_path('images'), $imgName);

        $buddy = new Buddy;
        $buddy->name = $req->username;
        $buddy->uuid = Str::uuid();
        $buddy->desc = $req->desc;
        $buddy->image = $imgName;
        $buddy->save();
        return back()->withSuccess('Value inserted !!!');
        
    }

    public function Display(){
        $buddies = Buddy::all();
        return view('users', ['keys' => $buddies]); 
    }

    public function edit(Buddy $buddy){
        return view('edit', ['product' => $buddy]); 
    }

    public function update(Request $req , Buddy $id){
        $req->validate([
            'username' => 'required',
            'desc' => 'required',
            'image' => 'required',
        ]);

        $imgName = time() . '.' .$req->image->extension();

        Storage::disk('public')->put($req->image, $imgName);

        $product = Buddy::where('id', $id)->first();
        $product->name = $req->username;
        $product->desc = $req->desc;
        $product->image = $imgName;
        $product->save();
        return back()->withSuccess('User updated !!!');
    }

    public function delete($id){
        $product = Buddy::where('id', $id)->first();
        $product->delete();
        return redirect('users')->withSuccess('User deleted');
    }

    public function Palindrome(){
        $num = 121;
        $temp = $num;
        $r = 0;

        for ($i=2; $i>=0 ; $i--) { 
            $r = $r*10 + $num%10;
            $num = $num/10;
        }

        if($temp == $r){
          echo "palindrome";
        }
        else{
            echo "Not a palindrome";
        }
    }

    public function Test(){
        $arr = Buddy::all();
        dd($arr);
        return view('welcome');
    }
}
