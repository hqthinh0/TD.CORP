@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

                <div class="profile"><img  style="width: 100px; height:100px" src="{{ (!empty($adminData->profile_image)) ? url('img/admin_image/'.$adminData->profile_image):url('img/user.png')}}" alt="image"><span class="offline"></span>
                <div class="profile_h">  
                <h4 class="text">Tên: {{ $adminData->name}} </h4>
                <h4 class="">Email: {{ $adminData->email}} </h4>
                <h4 class="text">tài khoản: {{ $adminData->username}} </h4>
        </div>
              

        <a  class="btn-edit" href="{{route('edit.profile')}}"><img src="{{ asset('backend/assets/images/file-icons/128/edit.png')}}" /></a>

        </div>
    </div>
</div> <!-- end col -->
</div>



</div>

<div class="sss">
       
</div>

@endsection