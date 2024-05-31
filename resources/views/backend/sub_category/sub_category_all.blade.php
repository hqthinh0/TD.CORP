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
                    <th>subcategory slug</th>
                    <th>title</th>
                    <th>name</th>
                    <th>area</th>
                    <th>description</th>
                    <th>map</th>
                    <th>building</th>
                    <th>images</th>
                    <th>edit</th>
                    <th>xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($subcategory as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                   	<td> {{ $item['category']['category_name'] }}</td>
                    <td>{{ $item->subcategory_slug }}</td>
                    <td>{{ $item->subcategory_title }}</td>
                    <td>{{ $item->subcategory_name }}</td>
                    <td>{{ $item->subcategory_area }}</td>
                     <td>{{ $item->description }}</td>
                    <td>{{ $item->subcategory_map }}</td>
                    <td>{{ $item->subcategory_building }}</td>
                    <td><img src="{{asset($item->subcategory_images)}}" alt=""></td>
                    <td> <a href="{{ route('subcategory.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('subcategory.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection