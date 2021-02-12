@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Add Faculty
                    </div>
                    <div class="card-body">
                        <form action="/faculties" method="post">
                            <div class="form-group">
                                <label for="name">Faculty Name</label>
                                @csrf
                                <input id="name" class="form-control" type="text" name="name" >
                            </div>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Faculty List
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm table-striped">
                            <tr>
                                <th>#</th>
                                <th>Faculty</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($faculties as $faculty)
                                <tr>
                                    <td>{{ $faculty->id }}</td>
                                    <td>{{ $faculty->name }}</td>
                                    <td><a href="/faculties/{{ $faculty->id }}/edit" class="btn btn-primary btn-sm">Edit</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection