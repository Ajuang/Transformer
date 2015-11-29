@extends('master')

@section('content')

    <div class="col-md-12">
        <table class="table table-striped table-responsive table-hover">
            <thead>
            <tr>
                <th>Control Centre name</th><th>City Location</th>
            </tr>
            </thead>
            <tbody>
            @foreach($centres as $centre)
                <tr>
                    <td>{!!link_to_route('centres',$centre->centre,[$centre->centre])!!}</td>
                    <td>{!! $centre->city_location !!}</td>
                </tr>
            @endforeach
            <tr>
                <td>
                    {!! Form::open(['url'=>'/centres/add']) !!}
                    {!! Form::text('centre',null, ['class'=>'form-control', 'placeholder'=>'Enter centre name for the new control centre']) !!}
                    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </td>
                <td colspan="2"></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop