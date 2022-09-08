@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Selamat Datang Di Website Kami') }} -->
                    <center>
                        <h3>
                       <i>Selamat Datang di Website Admin</i>
                        </h3>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
