@extends('templates.master')

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <i class="link-icon" data-feather="box"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Welcome to website</h5>
            <p class="card-text">Please login to use the website.</p>
            <p class="card-text">If you are not yet a member, you can register now.</p>
            <a href="/register" class="btn btn-primary">Let Go</a>
        </div>
        <div class="card-footer text-muted">
            <i class="link-icon" data-feather="box"></i>
        </div>
        </div>
@endsection
