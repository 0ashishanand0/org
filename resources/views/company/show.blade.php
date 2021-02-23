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
                <a class="btn btn-sm btn-success custombutton pull-right" href="{{ route('companies.index') }}"> <i class="fa fa-arrow-circle-left custonicon-right"></i> Back to company list</a>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Company Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul class="list-unstyled timeline">
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <span>Company Name:</span>
                                </div>
                                <div class="block_content">
                                    <h2 class="title">
                                        {{ $company->name }}
                                    </h2>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <span>Email</span>
                                </div>
                                <div class="block_content">
                                   <p class="excerpt">{{$company->email}}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <span>Website</span>
                                </div>
                                <div class="block_content">
                                   <p class="excerpt">{{ $company->website }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <span>Logo</span>
                                </div>
                                <div class="block_content">
                                   <p class="excerpt">{{ $company->gst }}</p>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <span>Logo</span>
                                </div>
                                <div class="block_content">
                                   <p class="excerpt"><img src="/companyImage/{{$company->logo}}" style="width: 150px" ></p>
                                </div>
                            </div>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection