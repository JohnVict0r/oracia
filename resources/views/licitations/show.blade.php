@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$licitation->scope}}</div>
                <h3>{{$licitation->licitation_id}}</h3>
                <div class="card-body">
                    {{ $licitation->description }}
                </div>
            </div>
        </div>
    </div>
@endsection