@extends('master')

@section('content')

    <h2>Edit User Details</h2>

    {!!Form::model($users, ['route' => ['users' ,$users ->username], 'method' =>'PATCH'])!!}

        <div class="form-group">

            {!!Form::text('user',null,['class' => 'form-control', 'placeholder'=>'user'])!!}

        </div>

        <div class="form-group">

            {!!Form::text('username',null,['class' => 'form-control', 'placeholder'=>'username'])!!}

        </div>

        <div class="form-group">

            {!!Form::text('email',null,['class' => 'form-control', 'placeholder'=>'email'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('designation',null,['class' => 'form-control', 'placeholder'=>'designation'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('control_centre',null,['class' => 'form-control', 'placeholder'=>'control_centre'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('username',null,['class' => 'form-control'])!!}

        </div>


        <div class="form-group">

            {!!Form::submit('Update User',['class' => 'btn btn-primary'])!!}

        </div>

    {!!Form::close()!!}

@stop