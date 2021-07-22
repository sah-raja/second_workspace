<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\company_name;

class Company_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company_details');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
          $request->validate([
            'company_name' =>'required',
            'contact_details' =>'required',
            'logo'=> 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImagename = time() . '-' . $request->company_name . '.' . $request->logo->extension();
        // dd($newImagename);

       $request -> logo->move(public_path('images'),$newImagename);
    
        $company_name = company_name::create([
            'name'=>$request -> input('company_name'),
            'contact_details'=>$request -> input('contact_details'),
            'logo'=> $newImagename 
        ]); 
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
    public function company_edit($id)
    {   
        $company =company_name::find($id);
        return view('company_edit')
        ->with('company' ,$company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function company_details_update(Request $request, $id)
    {   $newImagename = time() . '-' . $request->company_name . '.' . $request->logo->extension();
        $request -> logo->move(public_path('images'),$newImagename);
        dd(newImagename);
        $company = company_name::where('id',$id)
        ->update( [
            'name'=>$request -> input('company_name'),
            'contact_details'=> $request -> input('contact_details'),
            'logo'=>$newImagename
        ]);

        return redirect('company_view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function company_view(){

        $company = company_name::all(); 
       
        return view('company_view',[
           'company' => $company]);
       
   }

   public function company_delete($id){
        
    $company= company_name::find($id);
    $company ->delete();
    return redirect('company_view');  
  }
}
