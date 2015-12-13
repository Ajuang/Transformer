@extends('master')

@section('content')
    <div class="col-md-12">
        <table class="table table-responsive table-striped">
            <thead>
                <tr><th>BIN</th><th>Time of Collection</th></tr>
            </thead>
            <tbody>
                @foreach($errors as $error)
                    <tr><td>{{ $error->transformer }}</td><td>{{ $error->created_at }}</td></tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


































@stop