@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header">
                    New Student
                </div>
                <div class="card-body">
                    <form action="/students" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input id="address" class="form-control" type="text" name="address">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input id="mobile" class="form-control" type="text" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="dob">DOB</label>
                            <input id="dob" class="form-control" type="date" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="faculty_id">Select Faculty</label>
                            <select id="faculty_id" class="form-control" name="faculty_id">
                                @foreach ($faculties as $faculty)
                                <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success btn-sm float-right">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card shadow">
                <div class="card-header">
                    Student List
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-3">
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    </div>

                                    <div class="col-3">
                                        <a href="/students/{{ $student->id }}" class="btn btn-success btn-sm">Show</a>
                                    </div>
                                    <div class="col">
                                        <form action="/students/{{ $student->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
