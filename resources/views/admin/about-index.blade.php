@extends('layouts.admin.app')
@section('content')

<div class="card">
    <div class="card-body">
<div class="text-end mb-5">
    <a href="/admin"><button class="btn btn-primary">Add About</button></a>
    <a href="/export-about"><button class="btn btn-primary">Export<i class="mdi mdi-export menu-icon"></i></button></a>
    <a href="/import-view"><button class="btn btn-primary">Import<i class="mdi mdi-import menu-icon"></i></button></a>
    <a href="/import-download"><button class="btn btn-primary">Download</button></a>
</div>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($data as $item )
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->mobile}}</td>  
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
        
</div>
</div>

@endsection