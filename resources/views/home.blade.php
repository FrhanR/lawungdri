@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LAWUNGDRI') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/dashboard" class="btn btn-primary me-md-2" type="button">Go To Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
