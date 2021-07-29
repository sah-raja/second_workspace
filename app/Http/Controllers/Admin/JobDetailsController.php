<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\company_name;
use App\Models\job_detail;
use App\Models\city;
use App\Models\skill;

class JobDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        $city = city::all();
        // dd($city);
        return view('admin.jobDetails.jobDetails',[
            'categories' => $categories,
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
        // dd($request->input('title'));
        $job_details = job_detail::create([
            'fk_category'=>$request -> input('category'),
            'title'=>$request -> input('title'),
            'no_of_opeanings'=> $request -> input('opeanings'),
            'position_type'=> $request -> input('position_type'),
            'education'=> $request -> input('education'),
            'experience'=> $request -> input('experience'),
            'posted_date'=> $request -> input('posted_date'),
            'deadline'=> $request -> input('apply_before'),
            'short_description'=> $request -> input('short_description'),
            'long_description'=> $request -> input('long_description'),
            'fk_city'=> $request -> input('city'),
            'location'=> $request -> input('location'),

        ]);
        //  dd($request->input('city'));
        return redirect()->route('job.view');
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
    public function job_edit($id)
    {  
        $categories = category::all();
        $city = city::all();

        $categogry_selected = \DB::table('job_details')
        ->join('categories','job_details.fk_category','=','categories.id')
        ->where('job_details.id', $id)->first('categories.id');
        // dd($categogry_selected);
        $city_selected = \DB::table('job_details')
        ->join('cities','job_details.fk_city','=','cities.id')
        ->where('job_details.id', $id)->first('cities.id');
        // dd($city_selected);
        // dd($categogry_selected);
        $job_detail =job_detail::find($id);
        //  dd($job_detail->posted_date->format('m/d/Y') ); 
        return view('admin.jobDetails.jobDetailsEdit',[
            'categories' => $categories,
            'city' =>$city,
            'city_selected'=>$city_selected,
            'categogry_selected'=>$categogry_selected

        ])->with('job_detail' ,$job_detail);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function job_details_update(Request $request, $id)
    {   
        $job_detail = job_detail::where('id',$id)
        ->update( [
            'fk_category'=>$request -> input('category'),
            'title'=>$request -> input('title'),
            'no_of_opeanings'=> $request -> input('opeanings'),
            'position_type'=> $request -> input('position_type'),
            'experience'=> $request -> input('experience'),
            'education'=> $request -> input('education'),
            'posted_date'=> $request -> input('posted_date'),
            'deadline'=> $request -> input('apply_before'),
            'fk_city'=> $request -> input('city'),
            'short_description'=> $request -> input('short_description'),
            'long_description'=> $request -> input('long_description'),
            'location'=> $request -> input('location'),
        ]);
        return redirect()->route('job.view');
        
    }

    

    public function job_view(){

        $job_details = job_detail::all(); 
       
        return view('admin.jobDetails.jobView',[
           'job_details' => $job_details]);
       
   }


    public function job_delete($id){
        
      $job_detail= job_detail::find($id);
      $job_detail ->delete();
      return redirect()->route('job.view');
    }

}

