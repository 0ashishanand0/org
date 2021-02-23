<head>
    
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Organization</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
 
  <!-- Bootstrap -->
    <link href="{{asset('/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('/assets/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('/assets/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
     <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="{{asset('/assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="{{asset('/assets/vendors/normalize-css/normalize.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/assets/vendors/build/css/custom.min.css')}}" rel="stylesheet">
   
   
    <!-- Select2 -->
    <link href="{{asset('/assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('/assets/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('/assets/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('/assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
     <!-- bootstrap-progressbar -->
    <link href="{{asset('/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('/assets/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
     <!-- Summernote css -->
   <link rel="stylesheet" href="{{asset('/assets/vendors/plugins/summernote/summernote.css')}}">

    <link rel="stylesheet" href="{{asset('/assets/vendors/custom/adminCustom.css')}}">
  <style>
.overlay {
 
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: red;
}

.imgcontainer:hover .overlay {
  opacity: 1;
}

.icon {
  color: black;
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #000;
}

.float-left{
    float:left;
}

.upload-btn-wrapper {
  overflow: hidden;
  display: inline-block;
}

.upload-btn-wrapper input[type=file] {
  font-size: 13px;
    left: 100px;
    top: 0;
    opacity: 40;
    height: 34px;
    width: 95px
}

.d-none{
    display:none;
}

.d-block{
    display:block !important;
}
.custombutton{
    float: right;
    top: 12px;
    right: 15px;
    font-size: 14px;
}
.upload-img-prew{
    width: 100%;
    height: 50px;
}
.imgcontainer {
    width: 60px;
    height: 60px;
    display: inline-block;
    margin-left: 15px;
}

.image {
  display: block;
  width: 60px;
    height: 60px;
    display: inline-block;
    margin-left: 15px;

}
.top-space{margin-top: -22px;}

.hide {
  display: none;
}
  </style>

</head>