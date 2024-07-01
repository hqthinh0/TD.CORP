@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title text">Thêm bài viết <span class="text-noti">vui lòng nhập đầy đủ thông tin trước khi thêm bài viết</span></h4>

            <form id="myForm"  method="post" action="{{ route('subcategory.page.store') }}" enctype="multipart/form-data" >
                @csrf

            
            <!-- end row -->

           <div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Danh mục</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
                    <select name="category_id" class="form-select mb-3" aria-label="Default select example">
                        <option selected="">Open this select menu</option>

                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
				</div>
			</div>
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tên Chủ đầu tư</label>
                <div class="col-sm-10">
                    <input name="subcategory_name" class="form-control" type="text" value="" placeholder="Nhập tên khách hàng"  id="example-text-input">
                </div>
            </div>
       
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">Tiêu Đề</label>
                <div class="col-sm-10">
                    <input name="subcategory_title" class="form-control" type="text" value="" placeholder="Nhập Tiêu Đề"  id="example-text-input">
                </div>
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">diện tích</label>
                <div class="col-sm-10">
                    <input name="subcategory_area" class="form-control " type="text" value="" placeholder="Nhập diện tích"  id="example-text-input">
                </div>
            </div>
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">địa chỉ</label>
                <div class="col-sm-10">
                    <input name="subcategory_map" class="form-control" type="text" value="" placeholder="Nhập địa chỉ"  id="example-text-input">
                </div>
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">số tầng</label>
                <div class="col-sm-10">
                    <input name="subcategory_building" class="form-control" type="text" value="" placeholder="Nhập số tầng"  id="example-text-input">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">nội dung</label>
                <div class="col-sm-10">
                   <textarea id="elm1" name="description">
                        {{ $category->description }}
                    </textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label text">hình ảnh</label>
                <div class="col-sm-10">
                  <input name="subcategory_images" class="form-control" type="file"  id="image" >
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                       <img id="showImage" style="width: 300px; height: auto;" class="rounded avatar-lg" src="{{ url('img/no_image.jpg') }}" alt="Card image cap">
                    <!-- <img id="showImage" style="width: 100px; height:100px" class="rounded avatar-lg" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap"> -->
                </div>
            </div>
           
            <!-- end row -->

            <!-- end row -->
            <input type="submit" class="btn btn-info waves-effect waves-light text" value="thêm mới">
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
        $('#myForm').validate({
            rules: {
                subcategory_name: {
                    required : true,
                }, 
            },
            messages :{
                subcategory_name: {
                    required : 'Please Enter SubCategory Name',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });

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