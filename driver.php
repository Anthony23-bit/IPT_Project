
<?php include "css/customcss.php" ?>
<?php include "remove.php" ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DrivePool Solutions</title>
    <link rel="icon" type="image/png" sizes="16x16" href="icon/light(1).png">
    <link href="css/style.min.css" rel="stylesheet">
   <script src="js/jquery/jquery.js"></script>

</head>

<body>
  
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
  
    <!-- Main Wrapper -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
       
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
        <!-- Logo -->
                    <a class="navbar-brand" href="dashboard.php">
                        <b class="logo-icon">
                            <img src="icon/logo1.png" alt="homepage">
                        </b>
                        <span class="logo-text">
                            <img src="icon/Logo.png" alt="homepage">
                        </span>
                    </a>
                    
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>

        <!-- Right side toggle and nav items -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                    <!-- Search -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>

                    <!-- User profile -->
                        <li>
                            <a class="profile-pic" href="#">
                            <img src="icon/users/d1.jpg" alt="user-img" width="36"
                            class="img-circle"><span class="text-white font-medium">Steave</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- ADD DRIVER MODAL START -->
        <div class="modal fade " id="addDriver" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ADD DRIVER</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="driver-add" method="POST">
                            <div class="alert alert-warning error" role="alert">
                            <div id="errormsg"></div></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="first-name" class="col-form-label">First Name:</label>
                                                <input type="text" class="form-control" id="driver-first-name"  name ="fname" required>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="middle-name" class="col-form-label">Middle Name:</label>
                                                <input type="text" class="form-control" id="driver-middle-name" maxlength = "15" name ="mname">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="last-name" class="col-form-label">Last Name:</label>
                                                <input type="text" class="form-control" id="driver-last-name" maxlength = "15" name ="lname" required>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="suffix-name" class="col-form-label">Suffix:</label>
                                                <select class="form-control" id="driver-suffix-name" size="1" name ="sname" value="" >
                                                <option selected value></option> <option>Jr.</option><option>Sr.</option></select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="birthday" class="col-form-label">Birthday</label>
                                                <input type="date" class="form-control" id="driver-birthday" name ="birthday" required>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="id" class="col-form-label">Driver ID</label>
                                                <i class="fas fa-exclamation-triangle mandate" aria-hidden="true"></i>
                                                <input type="text" class="form-control" id="driver-id" placeholder="1000" 
                                                onKeyDown="if(this.value.length==4 && event.keyCode>47 && event.keyCode < 58) return false;" name ="id" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="province" class="col-form-label">Province:</label>
                                                <select class="form-control" id="driver-province" size="1" name ="province" required>
                                                <option  value="" selected="selected" selected disabled value> -- Select Province -- </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="city" class="col-form-label">City:</label>
                                                <select class="form-control" id="driver-city" size="1" name ="city" required>
                                                <option value="" selected="selected" selected disabled value> -- Select City -- </option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="barangay" class="col-form-label">Barangay:</label>
                                                <select class="form-control" id="driver-barangay" size="1" name ="barangay" required>
                                                <option value="" selected="selected" selected disabled value> -- Select Barangay -- </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label class="col-form-label" for="phone">Phone #:</label>
                                                <i class="fas fa-exclamation-triangle mandate" aria-hidden="true"></i>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text">+63</div>
                                                    </div>
                                                    <input type="number" class="form-control" id="driver-phone" required placeholder="9*********" onKeyDown="if(this.value.length==10 && event.keyCode>47 && event.keyCode < 58) return false;" name ="pnumber">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email Address:</label>
                                                <i class="fas fa-exclamation-triangle mandate" aria-hidden="true"></i>
                                                <input type="email" class="form-control" id="driver-email" name ="email" placeholder="example@gmail.com" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="cancel-btn" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="add-btn" class="btn btn-success" onclick="addDriver()" name ="submit">Add Driver</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ADD DRIVER MODAL END -->

        <!-- EDIT DRIVER MODAL START -->
        <div class="modal fade " id="editDriver" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT DRIVER</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="driver-edit" action ="#" method="POST">
                            <div class="alert alert-warning error2" role="alert">
                            <div id="errormsg2"></div></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="first-name" class="col-form-label">First Name:</label>
                                                <input type="text" class="form-control" id="driver-first-name2"  name ="fname" required>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="middle-name" class="col-form-label">Middle Name:</label>
                                                <input type="text" class="form-control" id="driver-middle-name2" maxlength = "15" name ="mname">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="last-name" class="col-form-label">Last Name:</label>
                                                <input type="text" class="form-control" id="driver-last-name2" maxlength = "15" name ="lname" required>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="suffix-name" class="col-form-label">Suffix:</label>
                                                <select class="form-control" id="driver-suffix-name2" size="1" name ="sname" value="" >
                                                <option selected value></option> <option>Jr.</option><option>Sr.</option></select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="birthday" class="col-form-label">Birthday</label>
                                                <input type="date" class="form-control" id="driver-birthday2" name ="birthday" required>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="id" class="col-form-label">Driver ID</label>
                                                <i class="fas fa-exclamation-triangle mandate" aria-hidden="true"></i>
                                                <input type="text" class="form-control" id="driver-id2" placeholder="1000" 
                                                onKeyDown="if(this.value.length==4 && event.keyCode>47 && event.keyCode < 58) return false;" name ="id" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="province" class="col-form-label">Province:</label>
                                                <select class="form-control" id="driver-province2" size="1" name ="province" required>
                                                <option  value="" selected="selected" selected disabled value> -- Select Province -- </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="city" class="col-form-label">City:</label>
                                                <select class="form-control" id="driver-city2" size="1" name ="city" required>
                                                <option value="" selected="selected" selected disabled value> -- Select City -- </option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="barangay" class="col-form-label">Barangay:</label>
                                                <select class="form-control" id="driver-barangay2" size="1" name ="barangay" required>
                                                <option value="" selected="selected" selected disabled value> -- Select Barangay -- </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label class="col-form-label" for="phone">Phone #:</label>
                                                <i class="fas fa-exclamation-triangle mandate" aria-hidden="true"></i>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text">+63</div>
                                                    </div>
                                                    <input type="number" class="form-control" id="driver-phone2" required placeholder="9*********" onKeyDown="if(this.value.length==10 && event.keyCode>47 && event.keyCode < 58) return false;" name ="pnumber">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email Address:</label>
                                                <i class="fas fa-exclamation-triangle mandate" aria-hidden="true"></i>
                                                <input type="email" class="form-control" id="driver-email2" name ="email" placeholder="example@gmail.com" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="cancel-btn" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="add-btn" class="btn btn-success" name ="submit">Edit Driver</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- EDIT DRIVER MODAL END -->



        <!-- Left Sidebar  -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#"
                                aria-expanded="false">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="hide-menu">Driver Management</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="vehicle.php"
                                aria-expanded="false">
                                <i class="fa fa-car" aria-hidden="true"></i>
                                <span class="hide-menu">Vehicle Management</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="schedule.php"
                                aria-expanded="false">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                <span class="hide-menu">Schedule</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="trips.php"
                                aria-expanded="false">
                                <i class="fa fa-map" aria-hidden="true"></i>
                                <span class="hide-menu">Trips</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Page wrapper  -->
        <div class="page-wrapper" style="min-height: 250px;">

            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Driver Management</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><button type="button" class="btn btn-primary" data-bs-toggle="modal" 
                                data-bs-target="#addDriver" click="addUser()">ADD DRIVER</button>
                            <div id="displayDataTable"></div></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Driver</h3>
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Address</th>
                                            <th class="border-top-0">Birthday</th>
                                            <th class="border-top-0">Phone #</th>
                                            <th class="border-top-0">Email</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1000</td>
                                            <td>Oshino Shinobu</td>
                                            <td>Valencia City, Bukidnon</td>
                                            <td>2002-09-10</td>
                                            <td>09350050225</td>
                                            <td>oshino@gmail.com</td>
                                            <td>
                                                <button type="button" id="edit-btn" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editDriver">EDIT</button>
                                                <button type="button" id="delete-btn" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">DELETE</button>
                                            </td> 
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- footer -->
         <footer class="footer text-center"> 2023 © DrivePool Solutions - Efficiently Manage Your Fleet <br>
                <a href="404.php">DrivePoolSolutions.com</a>
            </footer>
        </div>
    </div>
    <!-- End Wrapper -->
    

    <!-- All Jquery -->
    <script src="plugins/bower_components/jquery/jquery.min.js"></script> 
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/js/boostrap.js"></script>
    <script src="js/jsall/app-style-switcher.js"></script> 
    <!--Wave Effects -->
    <script src="js/jsall/waves.js"></script> 
    <!--Menu sidebar -->
    <script src="js/jsall/sidebarmenu.js"></script> 
    <!--Custom JavaScript -->
    <script src="js/jsall/custom.js"></script> 

        <script defer src="plugins/bower_components/jquery/jquery.min.js">
        
            function displayData(){
                var displayData = "true";
                $.ajax([
                    url:"display.php",
                    type:'post',
                    data:{
                        displaySend:displayData
                    },
                    success:function(data,status){
                        $('#displayDataTable').html(data);
                    }
                ]);
            }


    function addUser(){
        var fnameAdd = $('#driver-first-name').var();
        var mnameAdd = $('#driver-middle-name').var();
        var lnameAdd = $('#driver-last-name').var();
        var snameAdd = $('#driver-suffix-name').var();
        var birthdayAdd = $('#driver-birthday').var();
        var driverIdAdd = $('#driver-id').var();
        var provinceAdd = $('#driver-province').var();
        var cityAdd = $('#driver-city').var();
        var barangayAdd = $('#driver-barangay').var();
        var phoneAdd = $('#driver-phone').var();
        var emailAdd = $('#driver-email').var();

        $.ajax({
            url:"db_driver_add.php",
            type: 'post',
            data:{

                fnameSend: fnameAdd,
                mnameSend: mnameAdd,
                lnameSend: lnameAdd,
                snameSend: snameAdd, 
                birthdaySend: birthdayAdd,
                driverIdSend: driverIdAdd,
                provinceSend: provinceAdd,
                citySend: cityAdd,
                barangaySend: barangayAdd,
                phoneSend: phoneAdd,
                emailSend: emailAdd
            },
            success:function(data,status){
                //function to display data;
                console.log(status);
                displayData();
            }
        });
    }
</script>

<script src="js/drivers.js"></script>
</body>

</html>