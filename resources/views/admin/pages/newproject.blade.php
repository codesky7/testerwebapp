@extends('admin.layouts.app')
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
                <input class="form-control" type="text" name="project_code" value="" placeholder="Enter lastname">
             </div>
          </div>
          <div class="col-lg-7">
             <div class="form-group">
                <label class="form-control-label active">Project Name : <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="project_name" value="" placeholder="Enter firstname">
             </div>
          </div>
          <!-- col-4 -->
          <!-- col-4 -->
          <div class="col-lg-5">
             <div class="form-group">
                <label class="form-control-label active">Email address: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="email" value="" placeholder="Enter email address">
             </div>
          </div>
          <!-- col-4 -->
          <div class="col-lg-5">
             <div class="form-group mg-b-10-force">
                <label class="form-control-label active"> Address: <span class="tx-danger"></span></label>
                <input class="form-control" type="text" name="address" value="" placeholder="Enter address">
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
                   <option value="App Testing">App Testing</option>
                  
                </select>
             </div>
          </div>

          <div class="col-lg-5">
            <div class="form-group mg-t-10-force">
               <label class="form-control-label">Client: <span class="tx-danger">*</span></label>
               <select class="selectpicker form-control select2 select2-hidden-accessible" data-style="btn-default" data-live-search="true" name="client_id">
                  <option value="" selected>Select Client</option>        
                  @foreach ($clientlist as $client)
                  <option  value="{{$client->id}}">{{$client->fname .' '. $client->lname}}</option>
                  @endforeach
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
      

            @foreach ($testertlist as $tester )
            <option value="{{$tester->id}}">{{$tester->fname .' '. $tester->lname}}</option>
            @endforeach
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
@section('js')
   <script>
      $('.textarea').summernote({
 placeholder: '',
 tabsize: 2,
 height: 70
});
   </script>
@endsection