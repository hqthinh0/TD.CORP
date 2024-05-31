@extends('admin.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">detail</h4>

            <form  method="post" action="{{ route('detailcategory.page.store') }}" enctype="multipart/form-data" >
                @csrf

            
            <!-- end row -->
       
           <div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0">Category Name</h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">
                    <select name="subcategory_id" class="form-select mb-3" aria-label="Default select example">
                        <option selected="">Open this select bài viết</option>

                        @foreach($detailcategories as $detail)
                        <option value="{{ $detail->id }}">{{ $detail->subcategory_title }}</option>
                        @endforeach
                    </select>
				</div>
			</div>

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                   <textarea id="elm1" name="description">
                        {{ $detail->description }}
                    </textarea>
                </div>
            </div>


            <!-- end row -->
            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update">
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