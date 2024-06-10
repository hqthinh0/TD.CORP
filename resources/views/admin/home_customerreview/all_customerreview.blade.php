@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card table_card">
                    <div class="card-body">
                        <h4 class="card-title">Hiển Thị Bài Viết</h4>
                         <table class="table select-table">
                                    <thead>
                                      <tr>
                                        
                                        <th>Số lượng</th>
                                        <th>Nội Dung</th>
                                        <th>Tên</th>
                                        <th>Địa Chỉ</th>
                                        <th>Hình Ảnh Người dùng</th>
                                        <th>Sửa</th>
                                        <th>Xoá</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @foreach($allContent as $item)
                                      <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->address}}</td>
                                        <td><img src="{{asset($item->customer_img)}}" alt=""></td>
                                        <td> <a href="{{ route('CustomerReview.route.edit',$item->id) }}" class="btn btn-edit"><img src="{{ asset('backend/assets/images/file-icons/128/edit.png')}}" /></a></td>
                                         <td> <a href="{{ route('CustomerReview.route.delete',$item->id) }}" id="delete" class="btn btn-delete"><img src="{{ asset('backend/assets/images/file-icons/128/bin.png')}}" /></a></td>
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