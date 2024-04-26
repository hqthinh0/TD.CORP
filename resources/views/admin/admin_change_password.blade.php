@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title"> Change Password Page </h4>

            @if(count($errors))
                @foreach($errors->all() as $error)
                    <p class="error"> {{$error}}</p>
                @endforeach
            @endif

            <form  method="post" action="{{ route('update.password') }}" enctype="multipart/form-data" >
                @csrf
            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                <div class="col-sm-10">
                    <input name="oldpassword" class="form-control" type="password" value=""  id="oldpassword">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                    <input name="newpassword" class="form-control" type="password" value=""  id="example-text-input">
                </div>
            </div>
             <!-- end row -->
              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">confirm Password</label>
                <div class="col-sm-10">
                    <input name="confirmpassword" class="form-control" type="password" value=""  id="example-text-input">
                </div>
            </div>
             <!-- end row -->

            <input type="submit" class="btn btn-info waves-effect waves-light" value="change Password">
            </form>

        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection