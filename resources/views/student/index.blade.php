@extends('admin.templates.app')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-bordered table-striped" id="datatable">
                    <thead>
                        <th>Sn</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Roll</th>
                        <th>Faculty</th>
                        <th>D.O.B</th>
                        <th>photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($students as $key=>$student)
                        <tr>
                            
                                <td>{{ ++$key }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->city }}</td>
                                <td>{{ $student->roll }}</td>
                                <td>{{ $student->faculty->name }}</td>
                                <td>{{ $student->dob }}</td>
                                <td><img src="{{ $student->image }}" alt="" width="64"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <a class="btn btn-primary btn-sm" href="students/{{ $student->id }}/edit">Edit</a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="students/{{ $student->id }}" class="btn btn-success btn-sm">Show</a>
                                        </div>
                                        <div class="col-md-3">
                                            <form action="students/{{ $student->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                                                <button type="submit" class="btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $students->render('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    
@endsection