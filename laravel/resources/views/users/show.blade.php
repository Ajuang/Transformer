@extends('master')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-success" style="padding: 0px">
            <div class="panel-heading">
                <a class="pull-right" href="/users/{{ $users->username}}/edit"><i class="fa fa-edit"></i></a>
                <a class="pull-right" href="/users/{{ $users->username }}/delete"><i class="fa fa-remove"></i></a>
                <h3>{{$users->user}}</h3>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-hover table-striped">
                    <thead>
                    </thead>
                    <tbody>
                    <tr><td>Username</td><td>{{$users->username}}</td></tr>
                    <tr><td>Email</td><td>{{$users->email}}</td></tr>
                    <tr><td>Designation</td><td>{{$users->designation}}</td></tr>
                    <tr><td>Control centre</td><td>{{$users->control_centre}}</td></tr>
                    </tbody>
                </table>

                <h3>User Status</h3>

                <table>
                    <thead></thead>
                    <tbody></tbody>
                </table>

            </div>
        </div>
    </div>
@stop