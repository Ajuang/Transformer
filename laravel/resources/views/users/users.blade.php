@extends('...master')

@section('content')

    <div class="col-md-12">
        <table class="table table-striped table-responsive table-hover">
            <thead>
            <tr>
                <th>Users name</th><th>Designation</th><th>Control Centre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{!!link_to_route('users',$user->user,[$user->username])!!}</td>
                    <td>{!! $user->designation !!}</td>
                    <td>{!! $user->control_centre !!}</td>
                </tr>
            @endforeach
            <tr>
                <td>
                    {!! Form::open(['url'=>'/users/add']) !!}
                    {!! Form::text('username',null, ['class'=>'form-control', 'placeholder'=>'Enter username for the new user']) !!}
                    {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </td>
                <td colspan="2"></td>
            </tr>
            </tbody>
        </table>
    </div>



@stop