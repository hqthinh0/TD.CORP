@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>Sub category Name</th>
                    <th>description</th>
                    <th>edit</th>
                    <th>xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($detailcategory as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td> {{ $item['subcategory']['subcategory_title'] }}</td>
                    <td>{{ $item->description }}</td>
                    <td> <a href="{{ route('detailcategory.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('detailcategory.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection