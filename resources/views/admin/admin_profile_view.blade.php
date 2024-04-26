@extends('admin.admin_master')
@section('admin')

<div class="">
       <div class="profile"><img  style="width: 100px; height:100px" src="{{ (!empty($adminData->profile_image)) ? url('img/admin_image/'.$adminData->profile_image):url(img/user.png)}}" alt="image"><span class="offline"></span>
       <h4>Name: {{ $adminData->name}} </h4>
        <h4>Email: {{ $adminData->email}} </h4>
        <h4>UserName: {{ $adminData->username}} </h4>

        <a href="{{route('edit.profile')}}"> Edit profile</a>
</div>

@endsection