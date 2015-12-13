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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5O88MqnBHpORZdpaVLnyFGMgX3qAZw5Y&libraries=places" type="text/javascript"></script>

    <div class="col-md-12">
        <div class="panel panel-success" style="padding: 0px">
            <div class="panel-heading">
                <a class="pull-right" href="/centres/{{ $centres->centre }}/edit"><i class="fa fa-edit"></i></a>
                <a class="pull-right" href="/centres/{{ $centres->centre }}/delete"><i class="fa fa-trash-o fa-fw"></i></a>
                <h3>{{$centres->centre}}</h3>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-hover table-striped">
                    <thead>
                    </thead>
                    <tbody>
                    <tr><td>Control Centre</td><td>{{$centres->centre}}</td></tr>
                    <tr><td>City Location</td><td>{{$centres->city_location}}</td></tr>
                    {{--<tr><td>Mounting Location</td><td>{{$transformers->mounting_location}}</td></tr>--}}
                    {{--<tr><td>Number of phases</td><td>{{$transformers->number_of_phases}}</td></tr>--}}
                    {{--<tr><td>Rated Voltage</td><td>{{$transformers->rated_voltage}}</td></tr>--}}
                    {{--<tr><td>Control centre</td><td>{{$transformers->control_centre}}</td></tr>--}}
                    {{--<tr><td>Rated Power</td><td>{{$transformers->rated_power}}</td></tr>--}}
                    {{--<tr><td>Type of insulation</td><td>{{$transformers->type_of_insulation}}</td></tr>--}}
                    </tbody>
                </table>

                <h3>Control Centre Status</h3>

                <div class="alert alert-success" role="alert">
                    <a href="#" class="alert-link">Control Centre: Connected to power grid</a>
                </div>

                <table>
                    <thead></thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="map-canvas"></div>

    {{--<script--}}
    {{--src="http://maps.googleapis.com/maps/api/js">--}}
    {{--</script>--}}

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
                position:myCenter
            });

            marker.setMap(map);
            var infowindow = new google.maps.InfoWindow({
                content:"Hello World!"
            });

            infowindow.open(map,marker);

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