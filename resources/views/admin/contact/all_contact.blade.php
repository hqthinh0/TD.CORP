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
                                        <th>Tiêu Đề</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Nội Dung</th>
                                        <!-- <th>Sửa</th>
                                        <th>Xoá</th> -->
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @foreach($contact_Email as $item)
                                      <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{$item->subject}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->message}}</td>
                                        <!-- <td> <a href="{{ route('CustomerReview.route.edit',$item->id) }}" class="btn btn-edit"><img src="{{ asset('backend/assets/images/file-icons/128/edit.png')}}" /></a></td>
                                         <td> <a href="{{ route('CustomerReview.route.delete',$item->id) }}" id="delete" class="btn btn-delete"><img src="{{ asset('backend/assets/images/file-icons/128/bin.png')}}" /></a></td> -->
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