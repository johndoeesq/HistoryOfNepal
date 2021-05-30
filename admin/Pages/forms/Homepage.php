<?php include 'connect.php';
$sql="select * from homepage  lIMIT 1";
$homepage_result=mysqli_query($conn,$sql);

//submission code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $file_size =$_FILES['image1']['size'];
  $file_size2 =$_FILES['image2']['size'];
  $title=$_POST['title'];
  $description=$_POST['description'];
  $description2=$_POST['description1'];

  if(($file_size AND $file_size2 )>0) {

    $file_name1 = $_FILES['image1']['name'];
    $file_name = $_FILES['image2']['name'];
    $file_tmp1 = $_FILES['image1']['tmp_name'];
    $file_tmp = $_FILES['image2']['tmp_name'];
    move_uploaded_file($file_tmp1, "image1/" . $file_name1);
    move_uploaded_file($file_tmp, "image2/" . $file_name);


    mysqli_query($conn, "UPDATE homepage SET  title='$title',  description='$description',image = '$file_name1',  image2='$file_name', description2='$description2' ");

  }
  else{
    echo('hi');
    mysqli_query($conn,  "UPDATE homepage SET  title='$title',  description='$description', description2='$description'");

  }
  header("Refresh:1");

}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HISTORICAL</b>NEPAL</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Sanya Koirala</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Sanya Koirala- Web Developer

                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Sanya Koirala</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>

        </li>


            <li class="active"><a href="../forms/Homepage.php"><i class="fa fa-circle-o"></i><span>Home Page</span></a></li>

        <li>

          <a href="../forms/Pictures.php"> <i class="fa fa-files-o"></i><span>Image Content</span>

          </a>
        </li>
        <li>

          <a href="../forms/Description.php"> <i class="fa fa-folder"></i><span>Discription Content </span>

          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b>HOME PAGE</b></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<?php
while ($row=mysqli_fetch_array($homepage_result)) {
  echo '
            <form role="form" action="Homepage.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input name="title" class="form-control" id="exampleInputEmail1" value="'.$row['title'].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input  class="form-control" name="description" id="exampleInputPassword1"  value="'.$row['description'].'">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Image1</label>
                  <input type="file" name="image1" id="exampleInputFile" value="'.$row['image'].'">

                  <p class="help-block">You can choose any file within the folder.</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile1">Image2</label>
                  <input type="file" name="image2" id="exampleInputFile1" value="'.$row['image2'].'">

                  <p class="help-block">You can choose any file within the folder.</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Description1</label>
                  <input  name ="description1" class="form-control" id="exampleInputEmail2" value="'.$row['description2'].'">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            ';
}
?>
          </div>
          </div>
        </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright &copy; 2018 Historical Nepal.</strong> All rights reserved.
  </footer>


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
