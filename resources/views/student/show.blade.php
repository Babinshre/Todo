@extends('layouts.app')
<style>
    img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
@section('content')
    
    <div class="container">
        <h1>This is student detail page</h1>
            <div class="card">
                <div class="card-header">
                    <h1 style="text-transform: capitalize">{{ $student->name }}</h1>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Student information</h5>
                            <img src="{{ asset($student->image) }}" alt="" width="120">
                            <p class="card-text">Name = {{ $student->name }}</p>
                            <p class="card-text">Address = {{ $student->address }}</p>
                            <p class="card-text">City = {{ $student->city }}</p>
                            <p class="card-text">Roll = {{ $student->roll }}</p>
                            <p class="card-text">Name = {{ $student->name }}</p>
                            <p class="card-text">Faculty = {{ $student->faculty->name }}</p>
                            <p class="card-text">DOB = {{ $student->dob }}</p>
                        </div>
                    </div>
                    <div class="col-md-4" style="position: relative; border: ">
                        <img class=" " style="border: solid 9px #ffc70f" src="data:image/jpeg;base64,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" alt="">
                    </div>
                </div>
            </div>
        <a href="/students" class="btn btn-primary btn-sm mt-3">Back</a>
    </div>
@endsection