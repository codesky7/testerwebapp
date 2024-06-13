@extends('admin.layouts.app')
@section('title', 'Add New Project')

@section('content')
<div class="card-body">
    <form action="{{ route('admin.newproject') }}" method="POST" class="form-layout form-layout-1">
        @csrf
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <div class="row mg-b-25">
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-control-label active">Project Code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="project_code" value="{{ old('project_code') }}" placeholder="Enter project code">
                </div>
            </div>
    
            <div class="col-lg-7">
                <div class="form-group">
                    <label class="form-control-label active">Project Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="project_name" value="{{ old('project_name') }}" placeholder="Enter project name">
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-control-label active">Email Address: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Enter email address">
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="form-group mg-b-10-force">
                    <label class="form-control-label active">Address: <span class="tx-danger"></span></label>
                    <input class="form-control" type="text" name="address" value="{{ old('address') }}" placeholder="Enter address">
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="clearfix">
                    <label class="form-control-label active">Start Date: <span class="tx-danger">*</span></label>
                    <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}">
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="clearfix">
                    <label class="form-control-label active">Deadline: <span class="tx-danger">*</span></label>
                    <input type="date" class="form-control" name="deadline" value="{{ old('deadline') }}">
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="form-group mg-t-10-force">
                    <label class="form-control-label">Department: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" name="department">
                        <option label="Select Department"></option>
                        <option value="App Testing">App Testing</option>
                        <!-- Add other departments as necessary -->
                    </select>
                </div>
            </div>
    
            <div class="col-lg-5">
                <div class="form-group mg-t-10-force">
                    <label class="form-control-label">Client: <span class="tx-danger">*</span></label>
                    <select id="client" class="form-control select2" name="clients_id[]" multiple="multiple">
                        
                        @foreach ($clientlist as $client)
                            <option value="{{ $client->id }}">{{ $client->fname . ' ' . $client->lname }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
    
            <div class="col-lg-5">
                <label class="form-control-label">Project Summary: <span class="tx-danger">*</span></label>
                <textarea name="project_summary" class="form-control" cols="30" rows="10">{{ old('project_summary') }}</textarea>
            </div>
    
            <div class="col-lg-5">
                <label class="form-control-label">Notes: <span class="tx-danger">*</span></label>
                <textarea name="notes" class="form-control" cols="30" rows="10">{{ old('notes') }}</textarea>
            </div>
    
            <div class="col-lg-5 mg-t-10-force">
                <label class="form-control-label">Add Project Members: <span class="tx-danger">*</span></label>
                <select id="staff" class="form-control select2" name="users_id[]" multiple="multiple">
                    @foreach ($testertlist as $tester)
                        <option value="{{ $tester->id }}">{{ $tester->fname . ' ' . $tester->lname }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="col-lg-5 mg-t-10-force">
                <div class="form-group">
                    <label class="form-control-label active">Project Budget: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="project_budget" value="{{ old('project_budget') }}" placeholder="Enter project budget" id="price-input">
                </div>
            </div>
        </div>
    
        <div class="form-layout-footer">
            <button type="submit" class="btn btn-primary">Create Project</button>
            <button type="button" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    
  

 </div>

@endsection
@section('js')
   <script>

@if (Session::has('success'))
toastr.success("{{session('success')}}")
@endif

      $('.textarea').summernote({
 placeholder: '',
 tabsize: 2,
 height: 70
});
   </script>
@endsection