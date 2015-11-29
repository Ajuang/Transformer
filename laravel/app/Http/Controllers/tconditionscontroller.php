<?php

namespace App\Http\Controllers;

use App\Error;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Transformer;
use App\TransformerRecord;


/**
 * Class tconditionscontroller
 * @package App\Http\Controllers
 */
class tconditionscontroller extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function condition($id)
    {
        $latest_record = TransformerRecord::where('transformer_id', $id)->latest()->first();

        if(is_null($latest_record)){
            $status['general'] = 0;
            $status['voltage'] = 'No record';
            $status['current'] = 'No record';
            $status['temperature'] = 'No record';
            $status['oil'] = 'No record';
        }
        else
        {
            $status = [];

            if($latest_record->temperature > 80 || $latest_record->voltage > 420 || $latest_record->current > 20 || $latest_record->oil < 20)
            {
                $status['general'] = 0;
            }
            else
            {
                $status['general'] = 1;
            }

            if($latest_record->voltage > 420)
            {
                $status['voltage'] = 'Not ok';
            }
            else
            {
                $status['voltage'] = 'ok';
            }

            if($latest_record->current > 20)
            {
                $status['current'] = 'Not ok';
            }
            else
            {
                $status['current'] = 'ok';
            }

            if($latest_record->temperature > 80)
            {
                $status['temperature'] = 'Not ok';
            }
            else
            {
                $status['temperature'] = 'ok';
            }

            if($latest_record->oil < 20)
            {
                $status['oil'] = 'Not ok';
            }
            else
            {
                $status['oil'] = 'ok';
            }
        }

        if($status['general'] == 0)
        {
            \Mail::raw('Transformer has issues', function($message)
            {
                $message->from('us@example.com', 'Laravel');

                $message->subject('Transformer problem');

                $message->to('mwaruwac@gmail.com');
            });
            try
            {
                $error = Error::create(['Transformer'=>Transformer::find($latest_record->transformer_id)->name, 'Transformer_id'=>$latest_record->transformer_id]);
            }
            catch(\Exception $e){}

        }


        return view('transformers.create', ['record'=>$latest_record, 'status'=>$status]);
    }

    public function error()
    {
        $errors= Error::latest()->get();

        return view('faults.error', ['errors'=>$errors]);
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
//    public function show($slug)
//    {
////      $transformers = $this->transformer->whereSlug($slug)->first();
////
////      return view ('transformers.show', compact('transformers'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($slug)
//    {
//        $transformers = $this->transformer->whereSlug($slug)->first();
//
//        return view ('transformers.edit', compact('transformers'));
//
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     * @internal param int $id
     */
//    public function update($slug, Request $request){
//        $transformer = $this->transformer->whereSlug($slug)->first();
//
//        $transformer->fill($request->input())->save();
//
//        return redirect ('details');
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
