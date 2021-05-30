<?php include 'connection.php';
$sql="select images from image_content WHERE category='education'";
$sql1="select * from description_content WHERE category='education'";
$image_content_result=mysqli_query($conn,$sql);
$description_content_result=mysqli_query($conn,$sql1);
?>




<!DOCTYPE HTML>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PROJECT</title>

    <!-- Bootstrap -->

    <link href="css/layout.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/jquery_1_12_4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope-docs.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>




</head>

<body>
<script>

    function check(e) {
        var id="#myModal"+e;
        $(id).modal({keyboard: true});
    }
</script>



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
                                <a class="navbar-brand" href="index.php"> <h2 >HISTORICAL&nbsp;NEPAL </h2><img src="images/logo.gif"  alt="..."</h2></a>
                            </div>




                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li ><a href="index.php">Home</a></li>
                                    <li><a href="politics.php">Politics</a></li>
                                    <li><a href="monuments.php">Monuments</a></li>
                                    <li class="active"><a href="education.php">Education</a></li>
                                    <li ><a href="mis.php">Miscelleneous</a></li>
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
<section id="page-header-background" class="about-cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Education</h4>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Education</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section id="about-content-wrapper">
    <div class="container">
        <div class="column-pushing-up">
            <div class="row">

                <div class="col-lg-12">
                    <div class="about-carousel">
                        <div class="owl-carousel" id="owl-carousels">
                            <?php
                            while ($row=mysqli_fetch_array($image_content_result)) {
                                echo '<div ><img src = "images/Education/'.$row['images']. '" alt = "" style = "height:197px" ></div >';
                            }
                            ?>


                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="visited-place-filter">
                        <div id="container">

<?php
while ($row=mysqli_fetch_array($description_content_result)) {
    echo '


                            <div class="element post-transition lakes">
                                <div class="example example-cover" >
                                    <div id="myImg">
                                        <img data-toggle="modal"  src="images/Education/' . $row['images'] . '"  alt="Snow" onclick="check('.$row['id'].')">
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal'.$row['id'].'" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><b>' . $row['Title'] . '</b></h4>
                                                </div>
                                                <div class="modal-body" >

                                                             ' . $row['Description'] . '

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caption-head">
                                        <p>' . $row['Title'] . '</p>
                                    </div>
                                </div>
                            </div>

                               ';
                               }
                                ?>

                        </div>
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

</footer>
<script>
    // cache container
    var $container = $('#container');
    // initialize isotope
    $container.isotope({
        // options...
    });

    // filter items when filter link is clicked
    $('#filters a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        return false;
    });
</script>
<script>

    $(window).load(function () {
        $('#owl-carousels').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            margin: 30,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                1326: {
                    items: 1,
                    loop: true
                },
                708: {
                    items: 4,
                    loop: true
                }
            }
        });
    });
    $(window).load(function () {
        $('.owl-carousel').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            margin: 30,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 1,
                    loop: true
                },
                1000: {
                    items: 1,
                    loop: true
                }
            }
        });
    });
    $(window).load(function () {
        $('#hightlight_cover-slider').owlCarousel({
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            margin: 30,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    loop: true
                },
                600: {
                    items: 1,
                    loop: true
                },
                1000: {
                    items: 1,
                    loop: true
                }
            }
        });
    });
</script>

</body>

</html>

