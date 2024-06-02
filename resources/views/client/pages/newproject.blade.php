@extends('client.layouts.app')
@section('title', 'Add New Project')

@section('content')
<div class="card-body">
    <form action="{{route('admin.newproject')}}" method="POST" class="form-layout form-layout-1">
      @if ($errors->any())
      <div class="alert alert-danger">

         <ul>
            @foreach ($errors->all() as $error )
               <li>{{$error}}</li>
            @endforeach
         </ul>

      </div>
      
         
      @endif
      @csrf
      @method('POST')
       <div class="row mg-b-25">
          <div class="col-lg-5">
             <div class="form-group">
                <label class="form-control-label active">Project Code : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="project_code" value="McDoe" placeholder="Enter lastname">
             </div>
          </div>
          <div class="col-lg-7">
             <div class="form-group">
                <label class="form-control-label active">Project Name : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="project_name" value="John Paul" placeholder="Enter firstname">
             </div>
          </div>
          <!-- col-4 -->
          <!-- col-4 -->
          <div class="col-lg-5">
             <div class="form-group">
                <label class="form-control-label active">Email address: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="email" value="johnpaul@yourdomain.com" placeholder="Enter email address">
             </div>
          </div>
          <!-- col-4 -->
          <div class="col-lg-5">
             <div class="form-group mg-b-10-force">
                <label class="form-control-label active"> Address: <span class="tx-danger"></span></label>
                <input class="form-control" type="text" name="address" value="Market St. San Francisco" placeholder="Enter address">
             </div>
          </div>

          <div class="col-lg-5">
            <div class="clearfix">
               <label class="form-control-label active">Start Date : <span class="tx-danger">*</span></label>
               <input type="text" class="form-control" placeholder="Choose date" id="datepicker4" name="start_date">
            </div>
         </div>

         <div class="col-lg-5">
            <div class="clearfix">
               <label class="form-control-label active">Deadline : <span class="tx-danger">*</span></label>
               <input type="text" class="form-control" placeholder="Choose date" id="datepicker88" name="deadline">
            </div>
         </div>
         
          <!-- col-8 -->
          <div class="col-lg-5">
             <div class="form-group mg-t-10-force">
                <label class="form-control-label">Department: <span class="tx-danger">*</span></label>
                <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose Department" tabindex="-1" aria-hidden="true">
                   <option label="Select Department"></option>
                   <option value="UK">United Kingdom</option>
                   <option value="China">China</option>
                   <option value="Japan">Japan</option>
                </select>
             </div>
          </div>

          <div class="col-lg-5">
            <div class="form-group mg-t-10-force">
               <label class="form-control-label">Client: <span class="tx-danger">*</span></label>
               <select class="selectpicker form-control select2 select2-hidden-accessible" data-style="btn-default" data-live-search="true" name="client_id">
                  <option value="" selected>Select Client</option>
                  <option data-tokens="ketchup mustard" value="1">Hot Dog, Fries and a Soda</option>
                  <option data-tokens="mustard" value="1">>Burger, Shake and a Smile</option>
                  <option data-tokens="frosting" value="1">>Sugar, Spice and all things nice</option>
                </select>
            </div>
         </div>
          <!-- col-4 -->
          
          <div class="col-lg-5">
            <label class="form-control-label">Project Summary: <span class="tx-danger">*</span></label>
            <textarea name="project_summary" class="textarea" cols="30" rows="10"></textarea>

         </div>

         <div class="col-lg-5">
            <label class="form-control-label">Notes: <span class="tx-danger">*</span></label>
            <textarea name="notes" class="textarea" cols="30" rows="10" name="notes"></textarea>

         </div>

         {{-- <div class="col-lg-8 dropzone needsclick" class="" id="dropzone-demo" >
            <label class="form-control-label">Notes: <span class="tx-danger">*</span></label>
            <div class="dz-message needsclick">
               Drop files here or click to upload
               <span class="note needsclick">(This is just a demo dropzone. Selected files are
               <strong>not</strong> actually uploaded.)</span>
             </div>
             <div class="fallback">
               <input name="file" type="file" multiple>
             </div>

         </div> --}}
          


        <div class="col-lg-5 mg-t-10-force">
         <label class="form-control-label">Add Project Members : <span class="tx-danger">*</span></label>
         <select name="countries" id="staff"  multiple placeholder="helll" name="team_id">
            <option value="1" >Afghanistan</option>
            <option value="2">Australia</option>
            <option value="3">Germany</option>
            <option value="4">Canada</option>
            <option value="5">Russia</option>
        </select>
      </div>
      <div class="col-lg-5 mg-t-10-force">
         <div class="form-group">
            <label class="form-control-label active">Project Budget : <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="project_budget" value="$" placeholder="Enter project budget" id="price-input">
         </div>
      </div>


       </div>
       <!-- row -->
       <div class="form-layout-footer">
          <button type="submit" class="btn btn-primary">Submit Form</button>
          <button class="btn btn-secondary">Cancel</button>
       </div>
       <!-- form-layout-footer -->
    </form>

 </div>

@endsection
