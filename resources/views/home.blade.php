@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1><b>My Profile</b></h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1><b>Name :</b>{{ Auth::user()->name }}</h1>
                    <h1><b>email :</b>{{ Auth::user()->email }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
