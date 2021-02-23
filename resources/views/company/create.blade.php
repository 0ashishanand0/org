@extends('layouts.master')
@section('content')
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Company Management</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <a class="btn btn-sm btn-success custombutton" href="{{ route('companies.index') }}"> <i class="fa fa-arrow-circle-left custonicon-right"></i> Back to company list</a>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add new company</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="{{ route('companies.store')}}" method = "post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group col-md-6">
                    <label for="newCourseName">Compnay Name</label>
                    <input type="text" class="form-control" name="companyName" value="{{ old('companyName') }}" placeholder="Enter Company name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="newCourseName">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email" required>
                  </div>
                   <div class="form-group col-md-12">
                    <label for="newCourseName">Website</label>
                    <input type="text" class="form-control" name="website" value="{{ old('website') }}" placeholder="Enter Website" required>
                  </div>
                   <div class="form-group col-md-12">
                    <label for="newCourseName">GST</label>
                    <input type="text" class="form-control" name="gst" value="{{ old('gst') }}" placeholder="Enter GST" required>
                  </div>
                   <div class="form-group col-md-12">
                    <label for="newCourseName">Logo</label>
                      <input type="file" name="image" id="file">
                      <br/>
                      Width: <span id='width'></span><br/>
                      Height: <span id='height'></span>
                      <p id='response' style="color: Red"></p>
                    </div>
                  <div class="form-group col-md-12">
                       <button type="submit" class="btn btn-primary align-center form-control">Submit</button>
                  </div>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection