<?php

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use DB;
use Image;
use Storage;
use Purifier;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();
        return view('admin.pages.products.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $product = $request->all();
        $data = $request->validate([
            'productcode' => 'required',
            'productname' => 'required',
            'productdescription' => 'required',
            'productdetails' => 'required',
            'value' => 'required|numeric',
            'serving' => 'required',
            'photo' => 'image|nullable|max:1999'
        ],[
            'productcode.required' => ' The product code field is required.',
            'productname.required' => ' The product name is required.',
            'productdescription.required' => ' The product description is required.',
            'productdetails.required' => ' The product details field is required.',
            'value.required' => ' The value field is required.',
            'serving.required' => ' The serving field is required.',

        ]);

        if($request->hasFile('photo')){
            
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'default_img.png';
        }

        
        $product = new Product;
        $product->productcode = $request->input('productcode');
        $product->productname = $request->input('productname');
        $product->productdescription = $request->input('productdescription');
        $product->productdetails = $request->input('productdetails');
        $product->value = $request->input('value');  
        $product->serving = $request->input('serving');  
        $product->photo = $fileNameToStore;
        $product->save();
        

	
        return redirect()->back()->with('success','Added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product/edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $product = $request->all();
        $data = $request->validate([
            'productcode' => 'required',
            'productname' => 'required',
            'productdescription' => 'required',
            'productdetails' => 'required',
            'value' => 'required|numeric',
            'serving' => 'required',
            'photo' => 'image|nullable|max:1999'            
        ]);

        if($request->hasFile('photo')){
            
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'default_img.png';
        }

        
        $product = Product::find($id);
        $product->productcode = $request->input('productcode');
        $product->productname = $request->input('productname');
        $product->productdescription = $request->input('productdescription');
        $product->productdetails = $request->input('productdetails');
        $product->value = $request->input('value');  
        $product->serving = $request->input('serving');  
        $product->photo = $fileNameToStore;
        $product->save();
        


	
        return redirect('/products')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
	    $product->delete($id);

	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
