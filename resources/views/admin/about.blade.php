@extends('layouts.admin.app')
@section('content')
    <div class="main">
        <div class="card">
            <div class="card-body">
                <form action="{{ $data == null ? url('/admin/about') : url('/admin/about/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf  <!-- CSRF protection for all forms -->
                    
                    @if($data != null)
                        @method('PUT')  <!-- Spoof the PUT method for updates -->
                    @endif           
                     @csrf
                    <div class="row mb-3">      
                        <div class="col-6 mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" value="{{$data->name ?? ''}}" class="form-control">
                            @error('name')
                            <div>
                                <span style="color: red">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="{{$data->email ?? '' ?? ''}}" class="form-control">
                            @error('email')
                            <div>
                                <span style="color: red">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 mb-2">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="number" name="mobile" id="mobile" value="{{$data->mobile ?? ''}}" oninput="this.value=this.value.slice(0,10)" class="form-control">
                            @error('mobile')
                            <div>
                                <span style="color: red">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 mb-2">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" accept="image/*" name="image" id="image" class="form-control">
                            @error('image')
                            <div>
                                <span style="color: red">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="col-6 mb-2">
                            <label for="resume" class="form-label">Resume</label>
                            <input type="file" accept="application/pdf" name="resume" id="resume"
                                class="form-control">
                                @error('resume')
                                <div>
                                    <span style="color: red">{{ $message }}</span>
                                </div>
                                @enderror
                        </div>
                        <div class="col-6 mb-2">
                            <label for="course" class="form-label">Date Of Birth</label>
                            <input type="dob" name="dob" id="dob" value="{{$data->dob ?? ''}}" class="form-control">
                            @error('resume')
                            <div>
                                <span style="color: red">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>

                        <h4>Qualification</h4>
                            <div class="col-4 mb-2">
                                <label for="course" class="form-label">Course Name</label>
                                <input type="text" name="course" id="course" value="{{$data->course ?? ''}}" class="form-control">
                                @error('course')
                                <div>
                                    <span style="color: red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-4 mb-2">
                                <label for="university" class="form-label">University Name</label>
                                <input type="text" name="university" id="university" value="{{$data->university ?? ''}}" class="form-control">
                                @error('university')
                                <div>
                                    <span style="color: red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="col-4 mb-2">
                                <label for="passed_out_year" class="form-label">Pass Out Year</label>
                                <input type="text" name="passed_out_year" id="passed_out_year" value="{{$data->passed_out_year ?? ''}}" class="form-control">
                                @error('passed_out_year')
                                <div>
                                    <span style="color: red">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        <h4>Professional Experience</h1>
                                <div class="col-4 mb-2">
                                    <label for="company_name" class="form-label">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" value="{{$data->company_name ?? ''}}" class="form-control">
                                    @error('company_name')
                                    <div>
                                        <span style="color: red">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-4 mb-2">
                                    <label for="from" class="form-label">From</label>
                                    <input type="date" name="from" id="from" value="{{$data->from ?? ''}}" class="form-control">
                                    @error('from')
                                    <div>
                                        <span style="color: red">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-4 mb-2">
                                    <label for="to" class="form-label">To</label>
                                    <input type="text" name="to" id="to" value="{{$data->to ?? ''}}" class="form-control">
                                    @error('to')
                                    <div>
                                        <span style="color: red">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                        <h4>Project Name</h4>
                                    <div class="col-4 mb-2">
                                        <label for="project_name" class="form-label">Project Name</label>
                                        <input type="text" name="project_name" id="project_name" value="{{$data->project_name ?? ''}}"  class="form-control">
                                        @error('project_name')
                                        <div>
                                            <span style="color: red">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label for="project_description" class="form-label">Description</label>
                                        <input type="text" name="project_description"  value="{{$data->project_description ?? ''}}" id="project_description"
                                            class="form-control">
                                            @error('project_description')
                                            <div>
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                            @enderror
                                    </div>
                                    <div class="col-4 mb-2">
                                        <label for="project_link" class="form-label">Link</label>
                                        <input type="text" name="project_link" value="{{$data->project_link ?? ''}}"  id="project_link"
                                            class="form-control">
                                            @error('project_link')
                                            <div>
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                            @enderror
                                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>Content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
