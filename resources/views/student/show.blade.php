@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    {{ $student->name }}
                    <a href="/students/create" class="btn btn-primary btn-sm float-md-right">Back</a>
                </div>
                <div class="card-body">
                    <h3>Student Details</h3>

                    <address>
                         Address: {{ $student->address }} <br>
                         Mobile: {{ $student->Mobile }} <br>
                         DOB: {{ $student->dob }} <br>
                         Faculty: {{ $student->faculty_id }} <br>
                 </address>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
