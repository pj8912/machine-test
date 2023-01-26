@extends('layouts.app') @section('content')
<div class="container">
    
    <div class="card card-body col-md-6 m-auto mt-5">
    
    <h3 class="text-center">Enter Your Contact Details</h3>
        
        <form action="{{route('secondform.submit')}}" method="post">
            
            @csrf 

            <div class="mb-2">
                <label for="emial">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            </div>
            
            <div class="mb-2">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required>
            </div>
            
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            
       
        </form>
    </div>

</div>

@endsection
