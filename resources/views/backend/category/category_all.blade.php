@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>category Name</th>
                    <th>hastag</th>
                    <th>category slug</th>
                    <th>category Images</th>
                    <th>edit</th>
                    <th>xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($category as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->hastag }}</td>
                    <td>{{ $item->category_slug }}</td>
                    <td><img src="{{asset($item->category_image)}}" alt=""></td>
                    <td> <a href="{{ route('category.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('category.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection