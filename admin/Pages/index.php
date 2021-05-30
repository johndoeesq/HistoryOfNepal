<?php include 'connection.php';
$sql="select * from homepage";
$homepage_result=mysqli_query($conn,$sql);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PROJECT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">

</head>
<body>
<header id="carousel-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <div class="row">
                   <nav class="navbar navbar-default" id="creativeAdventure_navigation">
                       <div class="container">
                           <!-- Brand and toggle get grouped for better mobile display -->
                           <div class="navbar-header">
                               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                       data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>

                               </button>

                               <a class="navbar-brand" href="index.php"> <h2>HISTORICAL&nbsp;NEPAL</h2>  <img src="images/logo.gif"  alt="..." >  </a>


                           </div>

                           <!-- Collect the nav links, forms, and other content for toggling -->
                           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                               <ul class="nav navbar-nav navbar-right">

                                   <li class="active"><a href="index.php">Home</a></li>
                                   <li><a href="politics.php">Politics</a></li>
                                   <li><a href="monuments.php">Monuments</a></li>
								   <li><a href="education.php">Education</a></li>
                                   <li><a href="mis.php">Miscelleneous</a></li>
                               </ul>
                           </div>
                           <!-- /.navbar-collapse -->
                       </div>
                       <!-- /.container-fluid -->
                   </nav>
               </div>
            </div>
        </div>
    </div>
</header>


    <style type="text/css">
        #creativeAdventure_navigation {
            position: absolute;
            top: 50px;
        }
    </style>
     <section id="carousel-coversweeper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div id="creative-carousel"class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#creative-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#creative-carousel" data-slide-to="1"></li>
                                <li data-target="#creative-carousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="highlight-carousel-text">


                                   <h3>Discovery the great history of Nepal</h3>

                                </div>
                                <div class="item active">
                                    <img src="images/background.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="images/baby.jpg" alt="...">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#creative-carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#creative-carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>


<?php 
while ($row=mysqli_fetch_array($homepage_result))
{
    echo '<div class="col-lg-12" >
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-info-asia">
                                <h1 style="padding:20px ;text-align:center"><b>'.$row['title'].'</b></h1>
                               '.$row['description'].'
                               </div>
                            </div>
                             </div>
    </div>





      <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="about-info-asia">

                               '.$row['description2'].'
                                </div>
                        </div>


              <div class="col-md-4">
    <img src="images/'.$row['image'].'" alt=""  style ="width:400px" align="right"/>
    <img src="images/'.$row['image2'].'" alt=""   style ="width:400px" align="right" />


    </div>
    </div>
    </div>
	';
}
?>


    </div>
    </div>

    </section>

    <footer id="footer-sweeper">
    <div class="container">
               <div class="col-lg-3">
                   <div class="row">
                       <div class="col-lg-2">


                       </div>
                       <div class="col-lg-12">
                           <div class="social-links-cover">
                               <p><span class="firstWord">Connect </span>with us:</p>
                               <ul >
                                   <li><a href="" ><i class="fa fa-facebook fa-lg" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-youtube fa-lg" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-google-plus fa-lg" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><img src="images/tencent-qq.png" alt=""></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
            <div class="col-lg-12 text-right">
                <div class="copywrite-wrapper">
                    <p>Copyright &copy; 2018 Historical Nepal. All Rights Reserved.</p>
                </div>
            </div>

        </div>
    </div>
</footer>




     <script src="js/jquery_1_12_4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope-docs.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

</body>
</html>