@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card table_card">
                    <div class="card-body">
                        <h4 class="card-title">Hiển Thị</h4>
                         <table class="table select-table">
            <thead>
                <tr>
                    <th>Số</th>
                    <th>Danh Mục</th>
                 
                    <th>Tiêu Đề</th>
                    <th>Tên Chủ Sở Hữu</th>
                    <th>Địa Chỉ</th>
                    <th>bài viết</th>
                    <th>Diện Tích</th>
                    <th>Số Tầng</th>
                    <th>Hình Ảnh</th>
                    <th>Chỉnh Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($subcategory as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                   	<td>{{ $item['category']['category_name'] }}</td>
                    <td>{{ $item->subcategory_title }}</td>
                    <td>{{ $item->subcategory_name }}</td>
                    <td>{{ $item->subcategory_area }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->subcategory_map }}</td>
                    <td>{{ $item->subcategory_building }}</td>
                    <td><img src="{{asset($item->subcategory_images)}}" alt=""></td>
                    <td> <a href="{{ route('subcategory.page.edit',$item->id) }}" class="btn btn-edit"><img src="{{ asset('backend/assets/images/file-icons/128/edit.png')}}" /></a></td>
                    <td> <a href="{{ route('subcategory.page.delete',$item->id) }}" id="delete" class="btn btn-delete"><img src="{{ asset('backend/assets/images/file-icons/128/bin.png')}}" /></a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
                    </div>
                </div>
            </div> <!-- end col -->
            </div>

    </div>
</div>



@endsection