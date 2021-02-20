@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <a href="/faculties/create" class="btn btn-outline-primary">Create Faculty</a>
                   <a href="" class="btn btn-success">Create Student</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
