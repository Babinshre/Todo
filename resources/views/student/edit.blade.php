@extends('templates.app')
@section('content')
    
    <div class="row mt-5">
        <h1>Add student</h1>
        <div class="col-md-6">
            <form action="/students/{{ $student->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address" value="{{ $student->address }}">
                </div>
                <div class="form-group">
                    <label for="roll">Roll no:</label>
                    <input id="roll" class="form-control" type="text" name="roll" value="{{ $student->roll }}">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" class="form-control" type="text" name="city" value="{{ $student->city }}">
                </div>
                <div class="form-group">
                    <label for="faculty">Faculty</label>
                    <select id="faculty" class="form-control" name="faculty" value="{{ $student->faculty }}">
                        <option value="csit">CSIT</option>
                        <option value="bbs">BBS</option>
                        <option value="medical">MEDICAL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">D.O.B</label>
                    <input id="dob" class="form-control" type="date" name="dob" value="{{ $student->dob }}">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection