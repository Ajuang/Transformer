@extends('master')

@section('content')
    <div class="col-md-12">
        <h3>Transformer condition status</h3>

        @if($status['general'] == 1)
            <div class="alert alert-success">
                <p>Transformer Status Fine</p>
            </div>
        @else
            <div class="alert alert-danger">
                <p>Transformer Status Not Fine</p>
            </div>
        @endif

        <table class="table table-responsive table-striped">
            <thead>
                <tr><th>Parameter</th><th>Value</th><th>Units</th><th>Description</th></tr>
            </thead>
            <tbody>
                @if($record)
                <tr><td>Voltage</td><td>{{ $record->voltage }}</td><td>Volts</td><td>{{ $status['voltage'] }}</td></tr>
                <tr><td>Current</td><td>{{ $record->current }}</td><td>Amperes</td><td>{{ $status['current'] }}</td></tr>
                <tr><td>Oil</td><td>{{ $record->oil }}</td><td>Litres</td><td>{{ $status['oil'] }}</td></tr>
                <tr><td>Temperature</td><td>{{ $record->temperature }}</td><td>Degrees Celsius</td><td>{{ $status['temperature'] }}</td></tr>
                @else
                    <tr><td colspan="4">No record for this transformer</td></tr>
                @endif
            </tbody>
        </table>
    </div>
@stop