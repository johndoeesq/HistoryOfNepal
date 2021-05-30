<footer id="footer-sweeper">
    <div class="container">
        <div class="row">

               <div class="col-lg-9">
                   <div class="row">
                       <div class="col-lg-4">
                           <div class="footer-listing">
                               <h3><span class="firstWord">Trekking</span> in Nepal</h3>
                               <ul>
                                   <li><a href="">Everest Base Camp Trek</a></li>
                                   <li><a href="">Everest Panorama Trek</a></li>
                                   <li><a href="">Annapurna Base Camp Trek</a></li>
                                   <li><a href="">Ghorepani Poon Hill Trek</a></li>
                                   <li><a href="">Langtang &amp; Gosainkunda Trek</a></li>
                                   <li><a href="">Ganesh Himal Trek</a></li>
                                   <li><a href="">Jomsom Muktinath Trek</a></li>
                                   <li><a href="">Manaslu Base Camp Trek</a></li>
                                   <li><a href="">Mustang Lo-Manthang Trek</a></li>
                                   <li><a href="">Dhaulagiri Trek</a></li>
                                   <li><a href="">Royal Trek </a></li>

                               </ul>
                           </div>
                       </div>
                       <div class="col-lg-4">
                           <div class="footer-listing">
                               <h3><span class="firstWord">Nepal</span> Expedition</h3>
                               <ul>
                                   <li><a href="">Amadablam Expedition</a></li>
                                   <li><a href="">Island Expedition</a></li>
                                   <li><a href="">Everest South Expedition</a></li>
                                   <li><a href="">Everest North Expedition</a></li>
                                   <li><a href="">Baruntse Expedition</a></li>
                                   <li><a href="">Manaslu Expedition</a></li>
                                   <li><a href="">Pumori Expedition</a></li>
                                   <li><a href="">Lhotse Expedition</a></li>
                                   <li><a href="">Shisapangma Expedition</a></li>
                                   <li><a href="">Mt.Everest Expedition</a></li>
                                   <li><a href="">Dhaulagiri Expedition</a></li>
                               </ul>
                           </div>

                       </div>
                       <div class="col-lg-4">
                           <div class="footer-listing">
                               <h3><span class="firstWord">Quick</span> Menu</h3>
                               <ul>
                                   <li><a href="">Home</a></li>
                                   <li><a href="">About Us</a></li>
                                   <li><a href="">Our Team Work</a></li>
                                   <li><a href="">Why with Us</a></li>
                                   <li><a href="">FAQS</a></li>
                                   <li><a href="">Legal Document</a></li>
                                   <li><a href="">Payment System</a></li>
                                   <li><a href="">Location Map</a></li>
                                   <li><a href="">Link Exchange</a></li>
                                   <li><a href="">Online Inquiry</a></li>
                                   <li><a href="">Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="row">
                       <div class="col-lg-12">
                                                           <div class="facebook-api-wrapper">
                                                               <div id="fb-root"></div>
                                                               <script>(function (d, s, id) {
                                                                       var js, fjs = d.getElementsByTagName(s)[0];
                                                                       if (d.getElementById(id)) return;
                                                                       js = d.createElement(s);
                                                                       js.id = id;
                                                                       js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=483834881751998";
                                                                       fjs.parentNode.insertBefore(js, fjs);
                                                                   }(document, 'script', 'facebook-jssdk'));</script>
                                                               <div class="fb-page" data-href="https://www.facebook.com/FirstVisit/?ref=bookmarks"
                                                                    data-tabs="timeline" data-height="275px" data-small-header="false"
                                                                    data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                                                   <blockquote cite="https://www.facebook.com/FirstVisit/?ref=bookmarks"
                                                                               class="fb-xfbml-parse-ignore"><a
                                                                           href="https://www.facebook.com/FirstVisit/?ref=bookmarks">First Visit</a></blockquote>
                                                               </div>
                                                           </div>

                       </div>
                       <div class="col-lg-12">
                           <div class="social-links-cover">
                               <p><span class="firstWord">Connect </span>with us:</p>
                               <ul>
                                   <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-linkedin" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-youtube" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i>
                                       </a></li>
                                   <li><a href=""><img src="images/tencent-qq.png" alt=""></a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
            <div class="col-lg-12 text-center">
                <div class="copywrite-wrapper">
                    <p> Copyright &copy; 2017 Creative Adventure Nepal. All Rights Reserved.</p>
                </div>
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
                600: {
                    items: 1,
                    loop: true
                },
                1000: {
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