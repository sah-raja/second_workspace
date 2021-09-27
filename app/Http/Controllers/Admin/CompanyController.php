<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\company_name;
use App\Models\city;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $city = city::all();

        return view('admin.company.companyDetails',[
            'city' => $city
        ]);
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
            //dd(request('city'));
          $request->validate([
            'company_name' =>'required',
            'contact_details' =>'required',
            'logo'=> 'mimes:jpg,png,jpeg|max:5048'
            
        ]);

        if(isset($request->logo)) {
            $newImagename = time() . '-' . $request->company_name . '.' . $request->logo->extension();
            $request -> logo->move(public_path('images'),$newImagename);
        }
        else {
            $newImagename = null;
        }
        $company_name = company_name::create([
            'name'=>$request -> input('company_name'),
            'contact_details'=>$request -> input('contact_details'),
            'logo'=> $newImagename ,
            'fk_city'=> $request -> input('city'),
            'location'=> $request -> input('location'),
        ]);

        //dd($request -> input());
        return redirect()->route('company.view');
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
    // public function company_edit($id)
    // {    
        
    //     // $city_selected = \DB::table('company_names')
    //     // ->join('cities','company_names.fk_city','=','cities.id')
    //     // ->where('company_names.id', $id)->first('cities.id');

    //     // dd(\DB::table('company_names')->where('company_names.id', $id));
    //     $city = city::all();

    //     $company =company_name::find($id);
    //     return view('admin.company.companyEdit',[
    //         'city' =>$city,
    //         'city_selected'=>$city_selected,
    //     ]) ->with('company' ,$company);
    // }
    
    //By Raja_Babu's debugging
    public function company_edit($id) {
        $company = company_name::find($id);
        $city = city::all();
        $city_selected = null;
        foreach($city as $record) {
            if($record->id == $company->fk_city) {
                $city_selected = $record;
            }
        }
        //echo $city_selected->name;
        return view('admin.company.companyEdit', [
            'company' => $company,
            'city' => $city,
            'city_selected' => $city_selected
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function company_details_update(Request $request, $id)
    // {   //$newImagename = time() . '-' . $request->company_name . '.' . $request->logo->extension();
    // //     $request -> logo->move(public_path('images'),$newImagename);
    // //     // dd(newImagename);
    //     if(isset($request->logo)) {
    //         $newImagename = time() . '-' . $request->company_name . '.' . $request->logo->extension();
    //         $request -> logo->move(public_path('images'),$newImagename);
    //     }
    //     else {
    //         $newImagename = null;
    //     }
    //     $company_old = company_name::where('id',$id)->first('logo');
    //     $path=public_path('images') . "\\" .$company_old->logo;
    //     if (file_exists($path)) {
    //     @unlink($path);

    //     $company = company_name::where('id',$id)
    //     ->update( [
    //         'name'=>$request -> input('company_name'),
    //         'contact_details'=> $request -> input('contact_details'),
    //         'logo'=>$newImagename
    //     ]);  
    // }

    //     return redirect()->route('company.view');
       
    // }

    //debugging by Raja Babu
    public function company_details_update($id) {
        $company = company_name::find($id);

        request()->validate([
            'company_name' =>'required',
            'contact_details' =>'required',
            'logo'=> 'mimes:jpg,png,jpeg|max:5048'
            
        ]);

        $newImagename = null;
        if(request('logo') != null) {
            $newImagename = time() . '-' . request('company_name'). '.' . request('logo')->extension();
            request('logo')->move(public_path('images'),$newImagename);
        }

        $company->name = request('company_name');
        $company->fk_city = request('city');
        $company->location = request('location');
        $company->contact_details = request('contact_details');
        $company->logo = $newImagename;
        
        $company->save();

        return redirect()->route('company.view');
    }

    public function company_view(){

        $company = company_name::all(); 
       
        return view('admin.company.companyView',[
           'company' => $company]);
       
   }

   public function company_delete($id){
        
    $company= company_name::find($id);
    $path=public_path('images') . "\\" .$company->logo;
    if (file_exists($path)) {
        @unlink($path);
    }

    $company ->delete();
    return redirect()->route('company.view');
  }
}
