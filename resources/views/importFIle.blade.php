@extends('layouts.admin.app')
@section('content')

<form action="{{ url('/import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4">
        <div class="custom-file text-left">
            <input type="file" name="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <button class="btn btn-primary">Import Users</button>
</form>
</div>

@endsection