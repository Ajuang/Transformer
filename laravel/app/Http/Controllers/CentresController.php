<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Centre;

class CentresController extends Controller
{

    private $centre;

    /**
     * @param centre $centre
     */
    function __construct(Centre $centre)
    {
        $this->centre = $centre;
        $this->middleware('auth');
    }

    public function addnew(Request $request)
    {
        $centre = $request->input('centre');

        return redirect()->to('/centres/'.$centre.'/edit');
    }

    public function centres()
    {
        $centres = $this->centre->get();

        return view ('centres.centre', compact('centres'));
    }
    public function show($centre)
    {
        $centres = $this->centre->whereCentre($centre)->first();

        return view ('centres.show', compact('centres'));
    }

    public function edit($centre)
    {
        $centres = $this->centre->whereCentre($centre)->first();

        is_null($centres) ? $centres  = centre::create(['centre'=>$centre]) : '';

        return view ('centres.edit', compact('centres'));

    }

    public function update($centre, Request $request){
        $centre = $this->centre->whereCentre($centre)->first();

        $centre->fill($request->input())->save();

        return redirect ('centres');
    }


    public function delete($centre)
    {
        $centre = $this->centre->whereCentre($centre)->first();

        $centre->delete();

        return redirect()->to('/centres');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

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
}
