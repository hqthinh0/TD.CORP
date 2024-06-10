@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Thêm</h4>

            <form  method="post" action="{{ route('about.page.add') }}" enctype="multipart/form-data" >
                @csrf

            <input type="hidden" name="id" value="{{$AboutPage->id}}">
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Thêm</label>
                <div class="col-sm-10">
                   <textarea id="elm1" name="description">
                    {{ $AboutPage->description }}
                    </textarea>
                </div>
            </div>
            <!-- end row -->
            
            <!-- end row -->
            <input type="submit" class="btn btn-info waves-effect waves-light text" value="Thêm Bài viết">
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