@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>service_title</th>
                    <th>service_short</th>
                    <th>service_description</th>
                    <th>service_images</th>
                    <th>edit</th>
                    <th>xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($services as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->service_title}}</td>
                    <td>{{ $item->service_short }}</td>
                    <td>{{ $item->service_description}}</td>
                    <td><img src="{{asset($item->service_images)}}" alt=""></td>
                    <td> <a href="{{ route('services.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('services.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection