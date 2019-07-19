@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $licitation->scope }}</div>

                <div class="card-body">
                    <form method="post" action="/licitations/{{ $licitation->id }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{ $licitation->id }}">
                        @include('licitations.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
