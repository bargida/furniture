<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        // return $products;
        return view('admin.products.index', compact('products')) ;
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.products.create', compact('categories', 'tags')) ;
    }

    public function store(Request $request){
        // return $request;
        $requestData = $request->except('tag_ids');
        $tagIds = $request->tag_ids ;

      

        if($request->hasFile('photo')){

            $file=request()->file('photo');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('files/photos', $fileName);
            $requestData['photo'] = $fileName;
        }

        $product = Product::create($requestData);
        $product->tags()->attach($tagIds);
        // $product = Product::create($requestData) ;
        return redirect()->route('admin.products.index') ;
    }

    public function show(Product $product){
 
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product){
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.products.edit', compact('product', 'categories', 'tags'));
    }

    public function update(Request $request, Product $product){

        $requestData = $request->except('tag_ids');

        if($request->hasFile('photo')){

            if (isset($product->photo) && file_exists(public_path('/files/photos/' . $product->photo))) {
                unlink(public_path('/files/photos/' . $product->photo));
            }
            $file=request()->file('photo');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('files/photos', $fileName);
            $requestData['photo'] = $fileName;
        }

        $tagIds = $request->tag_ids ;

        $product->update($requestData) ;

        $product->tags()->sync($tagIds);

        return view('admin.products.index');
    }
    
    public function destroy(Product $product){

        if (isset($product->photo) && file_exists(public_path('/files/photos/' . $product->photo))) {
            unlink(public_path('/files/photos/' . $product->photo));
        }

        $product->tags()->detach();
        $product->delete() ;

        return redirect()->route('admin.products.index') ;
        
    }

}
