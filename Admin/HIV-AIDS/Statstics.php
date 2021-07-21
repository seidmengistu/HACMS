<?hp

session_start();
// include ("../middleware.php");
if(!isset($_SESSION['logged_in'])) {
    
    header('location:../../login.php');
}   


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HACMS</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="include/plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="include/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="include/dist/css/adminlte.css">
    <!-- Google Font: Source Sans Pro -->

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <a class="btn btn-danger" href="../Blood-Donation/logout.php">Logout</a>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="include/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Seid Mengistu</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="home1.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Members
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Add-Members/add-member.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Members</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Add-Members/member-list.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Member List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Announcements
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="right badge badge-danger"></span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="announcement/create-announcement.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Announcements</p>
                                    </a>
                                </li>
                            </ul>


                            <li class="nav-item">
                            <a href="Statstics.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staststics</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="attendanceapp.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Approve </p>
                            </a>
                        </li>



                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image:url('../include/image/banner.png')">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color:green">Registered Members</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a class="btn btn-info btn-sm" href="../home1.php">Home</a>
                                </li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">


                            </div>

                            <section class="content">
                                <div class="container-fluid">
                                    <!-- Small boxes (Stat box) -->
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <!-- small box -->
                                            <div class="small-box bg-info">
                                                <div class="inner">

                                                    <?php
                                        $conn=mysqli_connect('localhost','root','','bbdms');
                                        $query="SELECT id From member ORDER BY id";
                                        $query_run=mysqli_query($conn,$query);

                                        $row=mysqli_num_rows($query_run);
                                        echo '<h1>'.$row.'</h1>';

                                        ?>
                                                    <p>Total Registered Members</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="ion ion-bag"></i>
                                                </div>
                                                <a href="Add-Members/member-list.php" class="small-box-footer">More info <i
                                                        class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <!-- small box -->

                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                    <!-- Main row -->

                                </div>
                                <!-- /.card -->
                            </section>

                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include('include/footer.php');
  ?>
    </div>


    <script src="include/plugins/jquery/jquery.min.js"></script>
    <script src="include/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="include/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="include/dist/js/adminlte.min.js"></script>

</body>

</html>