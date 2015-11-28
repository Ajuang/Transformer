@extends('master')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-success" style="padding: 0px">
            <div class="panel-heading">
                <a class="pull-right" href="/details/{{ $transformers->slug }}/edit"><i class="fa fa-edit"></i></a>
                <a class="pull-right" href="/details/{{ $transformers->slug }}/delete"><i class="fa fa-remove"></i></a>
                <h3>{{$transformers->transformer}}</h3>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-hover table-striped">
                    <thead>
                    </thead>
                    <tbody>
                        <tr><td>Model Name</td><td>{{$transformers->model_number}}</td></tr>
                        <tr><td>City Location</td><td>{{$transformers->city_location}}</td></tr>
                        <tr><td>Mounting Location</td><td>{{$transformers->mounting_location}}</td></tr>
                        <tr><td>Number of phases</td><td>{{$transformers->number_of_phases}}</td></tr>
                        <tr><td>Rated Voltage</td><td>{{$transformers->rated_voltage}}</td></tr>
                        <tr><td>Control centre</td><td>{{$transformers->control_centre}}</td></tr>
                        <tr><td>Rated Power</td><td>{{$transformers->rated_power}}</td></tr>
                        <tr><td>Type of insulation</td><td>{{$transformers->type_of_insulation}}</td></tr>
                    </tbody>
                </table>

                <h3>Transformer Status</h3>

                <div class="alert alert-success" role="alert">
                    <a href="#" class="alert-link">Status Working: Connected to power grid</a>
                </div>

                <table>
                    <thead></thead>
                    <tbody></tbody>
                </table>

            </div>
        </div>
    </div>
@stop