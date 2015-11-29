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


    <h2>Edit Control Centre Details</h2>

    {!!Form::model($centres, ['route' => ['centres' ,$centres ->centre], 'method' =>'PATCH'])!!}

    <div class="form-group">

        {!!Form::text('centre',null,['class' => 'form-control', 'placeholder'=>'Control Centre'])!!}

    </div>

    <div class="form-group">

        {!!Form::text('city_location',null,['class' => 'form-control', 'placeholder'=>'City Location'])!!}

    </div>


    <div class="form-group">

        {!!Form::text('centre',null,['class' => 'form-control'])!!}

    </div>

    <h3>Control Centre Location</h3>


    <div class="form-group">

        {!!Form::text('lng',null,['class' => 'form-control', 'id'=>'lng', 'placeholder'=>'Longitude'])!!}

    </div>

    <div class="form-group">

        {!!Form::text('lat',null,['class' => 'form-control', 'id'=>'lat', 'placeholder'=>'Latitude'])!!}
    </div>

    <div class="form-group">
        <label for="">Map</label>
        <input type="text" id="searchmap">
        <div id="map-canvas"></div>
    </div>




    <div class="form-group">

        {!!Form::submit('Update Control Centre',['class' => 'btn btn-primary'])!!}

    </div>
    {!!Form::close()!!}


    <script>
        var myCenter=new google.maps.LatLng({{ $centres->lat }}, {{ $centres->lng }});

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);

            var marker=new google.maps.Marker({
                position:myCenter,
                draggable: true
            });

            marker.setMap(map);

            google.maps.event.addListener(marker, 'position_changed', function(){
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lat').val(lat);
                $('#lng').val(lng);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

@stop
