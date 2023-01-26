@extends('layouts.app') @section('content')
<div class="container">


    <div class="card card-body col-md-6 m-auto mt-5">

        <h3 class="text-center">Enter Your Personal Details</h3>
        <form action="{{route('firstform.submit')}}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="mb-2">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="mb-2">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
            
        </form>
        
    </div>
    
</div>

@endsection