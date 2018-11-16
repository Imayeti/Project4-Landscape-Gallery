<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exhibit_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("new_exhibit");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      $exhibit = new \App\landscape;
      $exhibit->exhibit_name = $request->exhibit_name;
      $exhibit->year = $request->exhibit_year;
      $exhibit->artist = $request->exhibit_artist;
      $exhibit->url = $request->exhibit_url;
      $exhibit->description = $request->exhibit_description;
      $exhibit->save();

      return redirect('/');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

      $exhibit = \App\landscape::find($id);

      return view('edit_exhibit', compact('exhibit'));

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

      $exhibit = \App\landscape::find($id);
      $exhibit->exhibit_name = $request->exhibit_name;
      $exhibit->year = $request->exhibit_year;
      $exhibit->artist = $request->exhibit_artist;
      $exhibit->url = $request->exhibit_url;
      $exhibit->description = $request->exhibit_description;
      $exhibit->save();

      session()->flash('status', 'Exhibit Updated!');
      return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exhibit = \App\landscape::find($id);
        $exhibit->delete();
        session()->flash('status', 'Exhibit Deleted!');
        return redirect('/');

    }
}
