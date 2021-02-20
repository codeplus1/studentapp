@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card shadow">
               <div class="card-header"> <strong>Update Faculty</strong></div>
               <div class="card-body">
                  <form action="/faculties/{{ $faculty->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Faculty Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ $faculty->name }}">
                    </div>
                    <div class="form-group">
                        <label for="seats">Total Seats</label>
                        <input id="seats" class="form-control" type="text" name="seats" value="{{ $faculty->seats }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                  </form>
               </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card shadow">
                <div class="card-shadow"><strong>Faculty List</strong></div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <th>#</th>
                            <th>Faculty</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($faculties as $faculty)
                        <tr>
                            <td>{{ $faculty->id }}</td>
                            <td>{{ $faculty->name }}</td>
                            <td>

                                <div class="row">
                                    <div class="col-md-2">
                                        <a href="/faculties/{{ $faculty->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                    <div class="col">
                                        <form action="/faculties/{{ $faculty->id }}" method="post">
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
                    {{ $faculties->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
