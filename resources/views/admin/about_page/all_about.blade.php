@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>description</th>
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
                    <td> <a href="{{ route('about.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('about.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection