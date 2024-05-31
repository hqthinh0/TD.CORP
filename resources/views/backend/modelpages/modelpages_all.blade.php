@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
    
        <div class="table-responsive  mt-1">
            <table class="table select-table">
            <thead>
                <tr>
                    <th>Số lượng</th>
                    <th>models_title</th>
                    <th>description</th>
                    <th>images</th>
                    <th>edit</th>
                    <th>xoá</th>
                </tr>
            </thead>
            <tbody>
                @php($i = 1)
                @foreach($models as $key => $item)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $item->models_title}}</td>
                    <td>{{ $item->models_description }}</td>
                    <td><img src="{{asset($item->models_images)}}" alt=""></td>
                    <td> <a href="{{ route('models.page.edit',$item->id) }}" class="btn btn-edit">edit</a></td>
                    <td> <a href="{{ route('models.page.delete',$item->id) }}" id="delete" class="btn btn-delete">delele</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

    </div>
</div>



@endsection