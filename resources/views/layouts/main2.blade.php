<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Syllubus Management Information System</title>
        <link href="{{url('https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900')}}" rel="stylesheet">
         
        <link id="gull-theme" rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">


        <link id="gull-theme" rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">
        
    </head>


    <body class="text-left">
        
        <!-- Pre Loader Strat  -->
        <div class='loadscreen' id="preloader">
            <div class="loader spinner-bubble spinner-bubble-primary">
            </div>
        </div>
        <!-- Pre Loader end  -->

            <!-- ============ Body content start ============= -->
            @yield('content')

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Add-User"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">New Leads</p>
                                <p class="text-primary text-24 line-height-1 mb-2">205</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Financial"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Sales</p>
                                <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Checkout-Basket"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Orders</p>
                                <p class="text-primary text-24 line-height-1 mb-2">80</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Expense</p>
                                <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">This Year Sales</div>
                            <div id="echartBar" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Sales by Countries</div>
                            <div id="echartPie" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-chart-bottom o-hidden mb-4">
                                <div class="card-body">
                                    <div class="text-muted">Last Month Sales</div>
                                    <p class="mb-4 text-primary text-24">$40250</p>
                                </div>
                                <div id="echart1" style="height: 260px;"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="card card-chart-bottom o-hidden mb-4">
                                <div class="card-body">
                                    <div class="text-muted">Last Week Sales</div>
                                    <p class="mb-4 text-warning text-24">$10250</p>
                                </div>
                                <div id="echart2" style="height: 260px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">New Users</h3>
                                    <div class="dropdown dropleft text-right w-50 float-right">
                                        <button class="btn bg-gray-100" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="{{url('index.html')}}">Add new user</a>
                                            <a class="dropdown-item" href="{{url('index.html')}}">View All users</a>
                                            <a class="dropdown-item" href="{{url('index.html')}}">Something else here</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Avatar</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Smith Doe</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                                    </td>

                                                    <td>Smith@gmail.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <a href="{{url('index.html')}}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="{{url('index.html')}}" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jhon Doe</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                                    </td>

                                                    <td>Jhon@gmail.com</td>
                                                    <td><span class="badge badge-info">Pending</span></td>
                                                    <td>
                                                        <a href="{{url('index.html')}}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="{{url('index.html')}}" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Alex</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                                    </td>

                                                    <td>Otto@gmail.com</td>
                                                    <td><span class="badge badge-warning">Not Active</span></td>
                                                    <td>
                                                        <a href="{{url('index.html')}}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="{{url('index.html')}}" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Mathew Doe</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{asset('assets/images/faces/1.jpg')}}" alt="">

                                                    </td>

                                                    <td>Mathew@gmail.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <a href="{{url('index.htm')}}" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="{{url('index.htm')}}" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


                <div class="col-lg-6 col-md-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Top Selling Products</div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/products/headphone-4.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="{{('index.html')}}">Wireless Headphone E23</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$450 <del class="text-muted">$500</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/products/headphone-2.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="{{url('index.html')}}">Wireless Headphone Y902</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$550 <del class="text-muted">$600</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm btn-rounded m-3 m-sm-0">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/products/headphone-3.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="index.html">Wireless Headphone E09</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$250 <del class="text-muted">$300</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm btn-rounded m-3 m-sm-0">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{asset('assets/images/products/headphone-4.jpg')}}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="index.html">Wireless Headphone X89</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$450 <del class="text-muted">$500</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm btn-rounded m-3 m-sm-0">View details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <div class="card-title border-bottom d-flex align-items-center m-0 p-3">
                                <span>User activity</span>
                                <span class="flex-grow-1"></span>
                                <span class="badge badge-pill badge-warning">Updated daily</span>
                            </div>
                            <div class="d-flex border-bottom justify-content-between p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Pages / Visit</span>
                                    <h5 class="m-0">2065</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">New user</span>
                                    <h5 class="m-0">465</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Last week</span>
                                    <h5 class="m-0">23456</h5>
                                </div>
                            </div>
                            <div class="d-flex border-bottom justify-content-between p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Pages / Visit</span>
                                    <h5 class="m-0">1829</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">New user</span>
                                    <h5 class="m-0">735</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Last week</span>
                                    <h5 class="m-0">92565</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Pages / Visit</span>
                                    <h5 class="m-0">3165</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">New user</span>
                                    <h5 class="m-0">165</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Last week</span>
                                    <h5 class="m-0">32165</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <h5 class="card-title m-0 p-3">Last 20 Day Leads</h5>
                            <div id="echart3" style="height: 360px;"></div>
                        </div>
                    </div>
                </div>

            </div>


                </div>

                <!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                <div class="row">
                    <div class="col-md-9">
                        <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam
                            sunt.
                        </p>
                    </div>
                </div>
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <a class="btn btn-primary text-white btn-rounded" href="{{url('https://themeforest.net/user/mh_rafi')}}" target="_blank">Buy
            Gull HTML</a>
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="{{asset('assets/images/logo.png')}}" alt="">
                        <div>
                            <p class="m-0">&copy; 2018 Gull HTML</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
            </div>
            <!-- ============ Body content End ============= -->
        </div>
        <!--=============== End app-admin-wrap ================-->

        <!-- ============ Search UI Start ============= -->
        <!-- ============ Search UI Start ============= -->
  <div class="search-ui">
        <div class="search-header">
            <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="{{url('index.html')}}" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{asset('assets/images/products/headphone-2.jpg')}}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="{{url('index.html')}}" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{asset('assets/images/products/headphone-3.jpg')}}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="{{url('index.html')}}" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{asset('assets/images/products/headphone-4.jpg')}}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="{{url('index.html')}}" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="{{url('index.html')}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="{{url('index.html')}}">1</a></li>
                    <li class="page-item"><a class="page-link" href="{{url('index.html')}}">2</a></li>
                    <li class="page-item"><a class="page-link" href="{{url('index.html')}}">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="{{url('index.html')}}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
        <!-- ============ Search UI End ============= -->

        <!-- ============ Customizer ============= -->
<div class="customizer open">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p class="mb-0">
                        Sidebar Layout
                    </p>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingThree"
                    data-parent="accordionCustomizer">
                    <div class="card-body">
                        <div class="">
                            <a title="Compact Sidebar" href="{{url('large-compact-sidebar/dashboard/dashboard1.html')}}" class="btn btn-primary"> Compact
                                Sidebar </a>
                            <a title="Horizontal Layout" href="{{url('horizontal-bar/dashboard/dashboard1.html')}}" class="btn btn-primary">
                                Horizontal Layout </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        RTL
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="rtl-checkbox">
                            <span>Enable RTL</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>
<!-- ============ End Customizer ============= -->

        <!-- ============ Large Sidebar Layout End ============= -->



        




        
     <script src="{{asset('assets/js/common-bundle-script.js')}}"></script>   
     <script src="{{asset('assets/js/vendor/echarts.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/echart.options.min.js')}}"></script>
     <script src="{{asset('assets/js/es5/dashboard.v1.script.js')}}"></script>
     <script src="{{asset('assets/js/script.js')}}"></script>
     <script src="{{asset('assets/js/sidebar.large.script.js')}}"></script>
     <script src="{{asset('assets/js/customizer.script.js')}}"></script>

        
        

        </body>

</html>