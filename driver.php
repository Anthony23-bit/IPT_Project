<?php include "header.php" ?>
<link href="css/driver.css" rel="stylesheet">

<script> 

$(document).ready(function (){

    $('#add-btn').click(function (){

        alert('Driver Added Successfully');

    })


})

</script>

<style>
#add-btn{
    color: green;
    background-color: #fff;
    border-radius: 5px;
    
    
}

#add-btn:hover{
    color: #fff;
    background-color: green;
    transition: 0.5s;
    
}

#cancel-btn{
    color: #fff;
    background-color: #CD0000;
    border-radius: 5px;

}

#cancel-btn:hover{
    color: #fff;
    background-color: red;
    transition: 0.5s;

}

</style>
        <!-- Add Student MODAL START-->
        <div class="modal fade " id="addDriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ADD DRIVER</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="first-name" class="col-form-label">First Name:</label>
                                                <input type="text" class="form-control" id="driver-first-name">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="middle-name" class="col-form-label">Middle Name:</label>
                                                <input type="text" class="form-control" id="driver-middle-name">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="last-name" class="col-form-label">Last Name:</label>
                                                <input type="text" class="form-control" id="driver-last-name">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="suffix-name" class="col-form-label">Suffix:</label>
                                                <input type="text" class="form-control" id="driver-suffix-name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="birthday" class="col-form-label">Birthday</label>
                                                <input type="date" class="form-control" id="driver-birthday">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="id" class="col-form-label">Driver ID</label>
                                                <input type="text" class="form-control" id="driver-id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="province" class="col-form-label">Province:</label>
                                                <input type="text" class="form-control" id="driver-province">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="city" class="col-form-label">City:</label>
                                                <input type="text" class="form-control" id="driver-city">
                                            </div>
                                            
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="barangay" class="col-form-label">Barangay:</label>
                                                <input type="text" class="form-control" id="driver-barangay">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label">Phone #:</label>
                                                <input type="number" class="form-control" id="driver-phone">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email Address:</label>
                                                <input type="text" class="form-control" id="driver-email">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="cancel-btn" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="add-btn" class="btn btn-success">Add Driver</button>
                        </div>
                </div>
            </div>
        </div>
        <!-- Add Student MODAL END -->


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
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Blank Page</span>
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
                                data-bs-target="#addDriver" >ADD DRIVER</button></li>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1000</td>
                                            <td>Oshino Shinobu Jr</td>
                                            <td>Valencia City</td>
                                            <td>September 10, 2002</td>
                                            <td>09350050225</td>
                                            <td>oshino@gmail.com</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "footer.php" ?>