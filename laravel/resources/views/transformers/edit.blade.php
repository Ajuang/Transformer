@extends('master')

@section('content')
<style>
    #map-canvas{
        width:1400px;
        height:500px;
    }
</style>

<link rel="style" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5O88MqnBHpORZdpaVLnyFGMgX3qAZw5Y&libraries=places"
        type="text/javascript"></script>


    <h2>Edit Transformer Details</h2>

    {!!Form::model($transformers, ['route' => ['details' ,$transformers ->slug], 'method' =>'PATCH'])!!}

           <div class="form-group">

           {!!Form::text('transformer',null,['class' => 'form-control', 'placeholder'=>'transformer'])!!}

           </div>

        <div class="form-group">

            {!!Form::text('model_number',null,['class' => 'form-control', 'placeholder'=>'model_number'])!!}

        </div>

        <div class="form-group">

            {!!Form::text('city_location',null,['class' => 'form-control', 'placeholder'=>'city_location'])!!}

        </div>

        <div class="form-group">

            {!!Form::text('mounting_location',null,['class' => 'form-control', 'placeholder'=>'mounting_location'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('number_of_phases',null,['class' => 'form-control', 'placeholder'=>'number_of_phases'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('rated_voltage',null,['class' => 'form-control', 'placeholder'=>'rated_voltage'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('control_centre',null,['class' => 'form-control', 'placeholder'=>'control_centre'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('rated_power',null,['class' => 'form-control', 'placeholder'=>'rated_power'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('type_of_insulation',null,['class' => 'form-control', 'placeholder'=>'type_of_insulation'])!!}

        </div>
        <div class="form-group">

            {!!Form::text('slug',null,['class' => 'form-control'])!!}

        </div>

        <h3>Transformer Location</h3>


        <div class="form-group">

            {!!Form::text('Longitude',null,['class' => 'form-control', 'placeholder'=>'Longitude'])!!}

        </div>

        <div class="form-group">

            {!!Form::text('Latitude',null,['class' => 'form-control', 'placeholder'=>'Latitude'])!!}
        </div>

        <div class="form-group">
            <label for="">Map</label>
            <input type="text" id="searchmap">
            <div id="map-canvas"></div>
        </div>




        <div class="form-group">

            {!!Form::submit('Update Transformer',['class' => 'btn btn-primary'])!!}

        </div>
    {!!Form::close()!!}

    <script>
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            centre: {
                latitude: 27.72,
                longitude:85.36
            },
            zoom:15
        });
        var marker = new google.maps.Marker({
            position: {
                latitude: 27.72,
                longitude:85.36
            },
            map:map
        });
    </script>


@stop