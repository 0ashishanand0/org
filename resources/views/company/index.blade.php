@extends('layouts.master')
@section('content')
 <!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Company Lists</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
              <a class="btn btn-sm btn-success custombutton" href="{{ route('companies.create') }}">
                Create new company
              </a>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of companies</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li>
                  <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Company Name</th>
                      <th>Email</th>
                      <th>Logo</th>
                      <th>Website</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($companies as $company)   
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td><center><img src="/companyImage/{{$company->logo}}" style="width: 50px" ></center></td>
                    <td>{{ $company->website }}</td>
                    <td>
                      <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}" data-toggle="tooltip" data-placement="top" title="Show this company in details"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-primary"  href="{{ route('companies.edit',$company->id) }}" data-toggle="tooltip" data-placement="top" title="Edit this company"><i class="fa fa-pencil-square-o"> </i></a>
                        <a class="btn btn-danger" href = "javascript:void(0)"onclick = "deleteComapny({{$company->id}})" data-toggle="tooltip" data-placement="top" title="Delete this company"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody> 
              </table>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
@endsection