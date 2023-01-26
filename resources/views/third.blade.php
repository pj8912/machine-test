@extends('layouts.app') @section('content')
<div class="container">

<div class="card card-body mt-5 m-auto col-md-6">

<form id="address-form" action="{{route('thirdform.submit')}}" method="POST">
  @csrf
  <label>Do you have a previous address?</label>
  <div>
    <input type="radio" name="has_address" value="yes" id="yes" onclick="showAddress()">
    <label for="yes">Yes</label>
    <input type="radio" name="has_address" value="no" id="no" onclick="hideAddress()">
    <label for="no">No</label>
  </div>
  <div id="address-fields" style="display:none;">
    <div class="form-group">
        <label for="address_line1">Address Line 1</label>
        <input type="text" class="form-control" id="address_line1" name="address_line1">
    </div>
    <div class="form-group">
        <label for="address_line2">Address Line 2</label>
        <input type="text" class="form-control" id="address_line2" name="address_line2">
    </div>
    <div class="form-group">
        <label for="address_line3">Address Line 3</label>
        <input type="text" class="form-control" id="address_line3" name="address_line3">
    </div>
    <button type="button" class="btn btn-secondary" onclick="back()">Back</button>
  </div>
  <div class="d-grid gap-2">

    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>


</div>

<script>
  function showAddress() {
    document.getElementById("address-fields").style.display = "block";
  }
function hideAddress() {
document.getElementById("address-fields").style.display = "none";
}

function back() {
    document.getElementById("address-fields").style.display = "none";
    document.getElementById("yes").checked = false;
    document.getElementById("no").checked = false;
}
</script>


</div>

@endsection