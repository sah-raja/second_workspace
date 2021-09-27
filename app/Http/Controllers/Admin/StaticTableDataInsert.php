<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\city;

class StaticTableDataInsert extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.staticTableData.insertCategory');
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
        $category = category::create([
            'name'=>$request -> input('category')]);
    
        return view('admin.staticTableData.insertCategory');
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
        //
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
        //
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

    //edits by Raja Babu
    public function insert_city() {
        return view('admin.staticTableData.insert_city');
    }

    public function create_city() {
        $city = new city();
        $city->name = request('city');
        $city->save();

        return redirect('/sikaruApanel/city-add')->with('msg', 'City name added!');
    }

    public function view_city() {
        $city = city::all();

        return view('admin.staticTableData.view_city', ['city' => $city]);
    }

    public function delete_city($id) {
        $city = city::find($id);
        $city->delete();

        return redirect('/sikaruApanel/city-view')->with('msg', 'City data deleted!');
    }

    public function update_city($id) {
        $city = city::find($id);

        return view('admin.staticTableData.update_city', ['city' => $city]);
    }

    public function set_city($id) {
        $city = city::find($id);
        $city->name = request('city');
        $city->save();

        return redirect('/sikaruApanel/city-view')->with('msg', 'City data updated!');
    }
}
