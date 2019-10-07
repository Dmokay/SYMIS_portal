<!DOCTYPE html>
<html>
<head>
	<title>Principals table</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

</head>
<body>

@extends('layouts.app')

@section('content')
	<div class="main-panel">
              <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                       <form class="forms-sample" form method="post" action="save-principal">
						@csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id Number</label>
                            <input type="text" class="form-control" name="id_no" placeholder="Id Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tsc no</label>
                            <input type="text" class="form-control" name="tsc_no" placeholder="Tsc No">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" name="status" placeholder="Status">
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                          <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
             </div>
@endsection
</body>
</html>



	