<?php

namespace App\Http\Controllers;
use App\Companyinfo;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use DB;
use Image;
use Storage;
use Purifier;

class CompanyinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Companyinfo::orderBy('id')->get();
        return view('admin.pages.companyinformations.informations', ['abouts' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.companyinformations.addinfo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $about = $request->all();
        $data = $request->validate([
            'companybackground' => 'required',
            'mission' => 'required',
            'vision' => 'required'
        ]);

        
        if($request->hasFile('photo')){
            
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'user_icon.png';
        }

        
        $about = new Companyinfo;
        $about->companybackground = $request->input('companybackground');
        $about->mission = $request->input('mission');
        $about->vision = $request->input('vision');
        $about->save();
        

	
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
        $about = Companyinfo::find($id);
        return view('admin.pages.companyinformations.edit', ['about' => $about]);
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
        
        $about = $request->all();
        $data = $request->validate([
            'companybackground' => 'required',
            'mission' => 'required',
            'vision' => 'required',            
        ]);

        
        if($request->hasFile('photo')){
            
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('photo')->getClientOriginalExtension();

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('photo')->storeAs('public/uploads', $fileNameToStore);
        }else{
            $fileNameToStore = 'user_icon.png';
        }

        
        $about = Companyinfo::find($id);
        $about->companybackground = $request->input('companybackground');
        $about->mission = $request->input('mission');
        $about->vision = $request->input('vision');
        $about->save();
        


	
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
        $about = Companyinfo::find($id);
	    $about->delete($id);

	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
