<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transformer;
class TransformersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * @var Transformer
     */
    private $transformer;

    /**
     * @param Transformer $transformer
     */
    function __construct(Transformer $transformer)
    {
        $this->transformer = $transformer;
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function landing()
//    {
//        return view('pages.landing');
//    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function help()
    {
        return view('help');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    public function details()
    {
        $transformers = $this->transformer->get();

        return view ('transformers.details', compact('transformers'));
    }

//        public function condition($id)
//    {
//        $latest_record = TransformerRecord::where('transformer_id', $id)->latest()->first();
//
//        $status = [];
//
//        if($latest_record->temperature > 80 || $latest_record->voltage > 420 || $latest_record->current > 20 || $latest_record->oil < 20)
//        {
//            $status['general'] = 0;
//        }
//        else
//        {
//            $status['general'] = 1;
//        }
//
//        if($latest_record->voltage > 420)
//        {
//            $status['voltage'] = 'Not ok';
//        }
//        else
//        {
//            $status['voltage'] = 'ok';
//        }
//
//        if($latest_record->current > 20)
//        {
//            $status['current'] = 'Not ok';
//        }
//        else
//        {
//            $status['current'] = 'ok';
//        }
//
//        if($latest_record->temperature > 80)
//        {
//            $status['temperature'] = 'Not ok';
//        }
//        else
//        {
//            $status['temperature'] = 'ok';
//        }
//
//        if($latest_record->oil < 20)
//        {
//            $status['oil'] = 'Not ok';
//        }
//        else
//        {
//            $status['oil'] = 'ok';
//        }
//
//
//        return view('transformers.create', ['record'=>$latest_record, 'status'=>$status]);
//    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add(){

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $transformers = $this->transformer->whereSlug($slug)->first();

        return view ('transformers.show', compact('transformers'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $transformers = $this->transformer->whereSlug($slug)->first();

        is_null($transformers) ? $transformers  = Transformer::create(['slug'=>$slug]) : '';

        return view ('transformers.edit', compact('transformers'));

    }

    public function addnew(Request $request)
    {
        $slug = $request->input('slug');

        return redirect()->to('/details/'.$slug.'/edit');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($slug, Request $request){
        $transformer = $this->transformer->whereSlug($slug)->first();

        $transformer->fill($request->input())->save();

        return redirect ('details');
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

    public function delete($slug)
    {
        $transformer = $this->transformer->whereSlug($slug)->first();

        $transformer->delete();

        return redirect()->to('/details');
    }
}
