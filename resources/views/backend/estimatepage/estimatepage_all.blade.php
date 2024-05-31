@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>estimates_title</th>
                    <th>estimates_short</th>
                    <th>estimates_description</th>
                    <th>estimates_images</th>
                    <th>edit</th>
                    <th>xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($estimate as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->estimates_title}}</td>
                    <td>{{ $item->estimates_short }}</td>
                    <td>{{ $item->estimates_description}}</td>
                    <td><img src="{{asset($item->estimates_images)}}" alt=""></td>
                    <td> <a href="{{ route('estimate.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('estimate.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection