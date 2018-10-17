<?php

namespace App\Http\Controllers;
use App\Contact;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Psy\debug;
use DB;
use Image;
use Storage;
use Purifier;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id')->get();
        return view('admin.pages.contacts.contacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.contacts.addcontact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $contact = $request->all();
        $data = $request->validate([
            'phoneno' => 'required',
            'emailaddress' => 'required',
            'location' => 'required',
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

        
        $contact = new Contact;
        $contact->phoneno = $request->input('phoneno');
        $contact->emailaddress = $request->input('emailaddress');
        $contact->location = $request->input('location');
        $contact->save();
        

	
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
        $contact = Contact::find($id);
        return view('admin.pages.contacts.edit', ['contact' => $contact]);
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
        
        $contact = $request->all();
        $data = $request->validate([
            'phoneno' => 'required',
            'emailaddress' => 'required',
            'location' => 'required'           
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

        
        $contact = Contact::find($id);
        $contact->phoneno = $request->input('phoneno');
        $contact->emailaddress = $request->input('emailaddress');
        $contact->location = $request->input('location');
        $contact->save();
        


	
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
        $contact = Contact::find($id);
	    $contact->delete($id);

	    return redirect()->back()->with('success','Deleted successfuly');
    }
}
