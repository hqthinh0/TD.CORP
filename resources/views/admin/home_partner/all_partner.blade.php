@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>Hình Ảnh</th>
                    <th>Sửa</th>
                    <th>Xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($allImages as $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><img src="{{asset($item->partners_Images)}}" alt=""></td>
                    <td> <a href="{{ route('partner.route.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('partner.route.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection