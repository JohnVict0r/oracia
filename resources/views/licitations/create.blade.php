@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Licitation</div>

                <div class="card-body">
                    <form method="post" action="/licitations/">
                        @csrf
                        @include('licitations.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
