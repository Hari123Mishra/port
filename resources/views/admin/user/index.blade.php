@extends('layouts.admin.app')
@section('content')

<div class="card">
    <div class="card-body">
<div class="text-end mb-5">
    <button class="btn btn-primary" data-toggle="modal" data-target="#my-modal">Add User</button>
</div>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $item )
        <tr>
            <td>{{$item->name}}</td>
            <td>
                <a href="{{url('/admin/'.$item->id)}}"><i class="mdi mdi-eye menu-icon"></i></a>
                <button  id="delete-role" data-delete-id="{{$item->id}}"><i class="mdi mdi-delete menu-icon"></i></a>
            </td>
        </tr>
        @empty
        <h2>Data Not Found</h2>
        @endforelse
       
    </tbody>
   
</table>
        
<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="my-modal-title">User</h5>
            <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control">
            <label for="roleid">Role</label>
            <select name="roleId" id="roleid" class="form-control">
                @forelse ($roles as $item )
                <option value="{{$item->id}}">{{$item->name}}</option>
                @empty
                    
                @endforelse
            </select>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" id="user-button">submit</button>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@push('scripts')
<script>
    $('document').ready(function(){
       $('#user-button').on('click',function(){
          var name=$('#name').val();
          var password=$('#password').val();
       var token=$('meta[name="csrf-token"]').attr('content');
       alert(token);
          $.ajax({
             method:'Post',
             url:"{{route('user.save')}}",
             data:{
                name:name,
                password:password,
                _token:token
             },
             success:function(response){
                console.log(response);
             }
          })
       })
    })

</script>
@endpush