@extends('admin.templates.app')
@section('content')
    
<div class="container">
    <div class="row mt-5">  
        <div class="col-md-6">
            <h1>Add student</h1>
            <form action="/students" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address">
                </div>
                <div class="form-group">
                    <label for="roll">Roll no:</label>
                    <input id="roll" class="form-control" type="text" name="roll">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" class="form-control" type="text" name="city">
                </div>
                <div class="form-group">
                    <label for="faculty">Faculty</label>
                    <select id="faculty" class="form-control" name="faculty">
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dob">D.O.B</label>
                    <input id="dob" class="form-control" type="date" name="dob">
                </div>
                <div class="form-group">
                    <label for="image">photo</label>
                    <input id="image" class="form-control-file" type="file" name="image" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection