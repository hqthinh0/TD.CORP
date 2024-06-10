@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title text">Cập nhật</h4>

            <form  method="post" action="{{ route('category.page.update') }}" enctype="multipart/form-data" >
                @csrf

            
            <!-- end row -->
                <input type="hidden" name="id" value="{{$Editcontent->id}}">
                <input type="hidden" name="old_image" value="{{$Editcontent->category_image}}">


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">tên</label>
                <div class="col-sm-10">
                    <input name="category_name" class="form-control" type="text" value="{{$Editcontent->category_name}}" placeholder="nhập nội dung" id="example-text-input">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">thẻ tag</label>
                <div class="col-sm-10">
                    <input name="hastag" class="form-control" type="text" value="{{$Editcontent->hastag}}" placeholder="nhập nội dung" id="example-text-input">
                </div>
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">hình ảnh</label>
                <div class="col-sm-10">
                  <input name="category_image" class="form-control" type="file"  id="image" >
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                       <img id="showImage" style="width: 300px; height: auto;" class="rounded avatar-lg" src="{{ asset($Editcontent->category_image) }}" alt="Card image cap">
                    <!-- <img id="showImage" style="width: 100px; height:100px" class="rounded avatar-lg" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap"> -->
                </div>
            </div>
            <!-- end row -->
            <input type="submit" class="btn btn-info waves-effect waves-light text" value="Cập nhật">
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