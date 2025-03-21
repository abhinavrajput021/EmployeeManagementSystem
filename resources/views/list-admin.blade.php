
@if(session('super') || session('employee') )

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="super-dashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>
                        @if(session('super'))
                            SuperPan
                        @elseif(session('employee'))
                            EmployeePan
                        @endif    
                    
                    </h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{$data->name}}</h6>

                        @if(session('super'))
                           <span>Super Admin</span>
                        @elseif(session('employee'))
                           <span>Employee</span>
                        @endif
                        
                    </div>
                </div>
                <div class="navbar-nav w-100">





                                   @if(session('super'))
                                    
                                          

                                       <a href="super-dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Profile</a>
                                            <div class="dropdown-menu bg-transparent border-0">
                                                <a href="super-profile" class="dropdown-item">View</a>
                                                <a href="superProfileChangepassword" class="dropdown-item">Change Password</a>
                                                <a href="superAdminLogout" class="dropdown-item">Logout</a>
                                            </div>
                                        </div>
                                        <a href="adminList" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Admins</a>
                                    
                                        <a href="employeeList" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Employees</a>
                                        
                                        <a href="addAdmin" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add New Admin</a>
                                        <a href="addEmployee" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add New Employ</a>



                                    @elseif(session('employee'))
                                    

                                           <a href="employee-profile" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                                            <div class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Profile</a>
                                                <div class="dropdown-menu bg-transparent border-0">
                                                    <a href="employee-profile" class="dropdown-item">View</a>
                                                    <a href="employeeProfileChangepassword" class="dropdown-item">Change Password</a>
                                                    <a href="employeeLogout" class="dropdown-item">Logout</a>
                                                </div>
                                            </div>
                                            <a href="adminList" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Admins</a>
                                        
                                            <a href="employeeList" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Employees</a>
                                            
                                            
                                                

                                    @endif
                
                     
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">


                                @if(session('super'))
                                     
                                        <div class="nav-item dropdown">

                                        <a href="super-dashboard" class="nav-link">
                                            <i class="fa fa-home me-lg-2"></i>
                                            <span class="d-none d-lg-inline-flex">Home</span>
                                        </a>

                                        </div>

                                        <div class="nav-item dropdown">
                                        <a href="superAdminLogout" class="nav-link">
                                            <i class="fa fa-clone me-lg-2"></i>
                                            <span class="d-none d-lg-inline-flex">Logout</span>
                                        </a>
                                        </div>

                                        <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                                <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                                <span class="d-none d-lg-inline-flex">{{$data->name}}</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                                <a href="super-profile" class="dropdown-item">My Profile</a>
                                                <a href="superProfileChangepassword" class="dropdown-item">Change Password</a>
                                                <a href="superAdminLogout" class="dropdown-item">Log Out</a>
                                            </div>
                                        </div>

                                
                                @elseif(session('employee'))


                                        <div class="nav-item dropdown">

                                        <a href="employee-profile" class="nav-link">
                                            <i class="fa fa-home me-lg-2"></i>
                                            <span class="d-none d-lg-inline-flex">Home</span>
                                        </a>

                                        </div>
                                        <div class="nav-item dropdown">
                                        <a href="employeeLogout" class="nav-link">
                                            <i class="fa fa-clone me-lg-2"></i>
                                            <span class="d-none d-lg-inline-flex">Logout</span>
                                        </a>

                                        </div>
                                        <div class="nav-item dropdown">

                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <span class="d-none d-lg-inline-flex">{{$data->name}}</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                            <a href="employee-profile" class="dropdown-item">My Profile</a>
                                            <a href="employeeProfileChangepassword" class="dropdown-item">Change Password</a>
                                            <a href="employeeLogout" class="dropdown-item">Log Out</a>
                                        </div>

                                        </div>
                                
                                @endif
                    

                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">

                                    @if(session('super'))
                                        <p class="mb-2"><a href="super-profile">Profile</a></p>
                                    @elseif(session('employee'))
                                        <p class="mb-2"><a href="admin-profile">Profile</a></p>
                                    
                                    @endif
                                
                                <h6 class="mb-0"></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"><a href="adminList">Show All Admin</a></p>
                                <h6 class="mb-0"></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> <a href="employeeList">Show All Employees</a> </p>
                                <h6 class="mb-0"></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">{{date("Y/m/d")}} </p>
                                <h6 class="mb-0"></h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Sale & Revenue End -->


            

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">All Admins</h6>

                        @if(session('addedAdminMsg'))
                           <span class="success-message" style="width:60%;">{{session('addedAdminMsg')}}</span>
                        @elseif(session('faildAdminMsg'))   
                        <span class="error-message" style="width:60%;">{{session('faildAdminMsg')}}</span>
                        @endif


                        @if(session('editedAdminMsg'))
                           <span class="success-message" style="width:60%;">{{session('editedAdminMsg')}}</span>
                        @elseif(session('noteditAdminMsg'))   
                        <span class="error-message" style="width:60%;">{{session('noteditAdminMsg')}}</span>
                        @endif

                        @if(session('deletedAdminMsg'))
                           <span class="success-message" style="width:60%;">{{session('deletedAdminMsg')}}</span>
                        @elseif(session('notDeleteAdminMsg'))   
                        <span class="error-message" style="width:60%;">{{session('notDeleteAdminMsg')}}</span>
                        @endif

                        


                                       @if(session('employee'))
                                        
                                        @else
                                           <a href="addAdmin">Add</a>
                                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    
                                    <th scope="col">Position</th>
                                    

                                    @if(session('super'))
                                        <th scope="col">Action</th>
                                    @elseif(session('employee'))
                                          <th scope="col">Email ID</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>

                               @foreach($admins as $admin)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{rand(1000,9999)."_".$admin->id}}</td>
                                    <td>{{$admin->name}}</td>
                                    
                                    <td>{{$admin->position}}</td>
                                    <td>
                                      

                                        @if(session('super'))
                                            <a class="btn btn-sm btn-success" href="{{'editAdmin/'.$admin->id}}">Edit</a>
                                            <a class="btn btn-sm btn-primary" href="{{'deleteAdmin/'.$admin->id}}">Delete</a>
                                            
                                        @elseif(session('employee'))
                                            {{$admin->email}}
                                        @endif
                                        
                                    </td>
                                </tr>
                                @endforeach


                                
                            </tbody>
                        </table>

                        <div  style="float:right;">
                        
                        

                           
                                        @if(session('employee'))
                                        
                                        @else
                                          <a class="btn btn-sm btn-warning mt-2" href="addAdmin">Add New Admin</a>
                                        
                                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Employee Management System</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By Abhinav Kumar
                            <br>Distributed By: <a href="#" target="_blank">AK Group</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
@else
    <center>
        <h1 style="margin-top:100px">
        Session doesn't exist in current context <a href="/">Go Back</a>
    </h1>
    </center>    
@endif