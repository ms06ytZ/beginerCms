<!doctype html>
<html lang="en">
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <link rel="shortcut icon" href="../png/favicon.png"> 
        <title>Onassis - Bootstrap 3 Theme</title> 
        <!-- Bootstrap core CSS --> 
        <link rel="stylesheet" href="../css/bootstrap.css"> 
        <!-- Custom styles for this template --> 
        <link rel="stylesheet" href="../css/main.css"> 
        <link rel="stylesheet" href="../css/font-awesome.min.css"> 
        <script src="../js/jquery.min.js"></script> 
        <script src="../js/Chart.js"></script> 
        <script src="../js/modernizr.custom.js"></script> 
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css"> 
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css"> 
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
          <![endif]--> 
    </head> 
    <body data-spy="scroll" data-offset="0" data-target="#theMenu"> 
        <!-- Menu --> 
        <nav class="menu" id="theMenu"> 
            <div class="menu-wrap"> 
                <h1 class="logo"><a href="/#home">Onassis</a></h1> 
                <i class="icon-remove menu-close"></i> 
                <a href="#home" class="smoothScroll">Home</a> 
                <a href="#services" class="smoothScroll">Services</a> 
                <a href="#portfolio" class="smoothScroll">Portfolio</a> 
                <a href="#about" class="smoothScroll">About</a> 
                <a href="#contact" class="smoothScroll">Contact</a> 
                <a href="#"><i class="icon-facebook"></i></a> 
                <a href="#"><i class="icon-twitter"></i></a> 
                <a href="#"><i class="icon-dribbble"></i></a> 
                <a href="#"><i class="icon-envelope"></i></a> 
            </div> 
            <!-- Menu button --> 
            <div id="menuToggle">
                <i class="icon-reorder"></i>
            </div> 
        </nav> 
        <!-- ========== HEADER SECTION ========== --> 
        <section id="home" name="home"></section> 
        <div id="headerwrap"> 
            <div class="container"> 
                <br> 
                <h1>{{$index->theme}}</h1> 
                <h2>{{$index->sub_theme}}</h2> 
                <div class="row"> 
                    <br> 
                    <br> 
                    <br> 
                    <div class="col-lg-6 col-lg-offset-3"> 
                    </div> 
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /headerwrap --> 
        <!-- ========== WHITE SECTION ========== --> 
        <div id="w"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-8 col-lg-offset-2"> 
                        <h3>{!!$index->welcomes!!}</h3> 
                    </div> 
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /w --> 
        <!-- ========== SERVICES - GREY SECTION ========== --> 
        <section id="services" name="services"></section> 
        <div id="g"> 
            <div class="container"> 
                <div class="row"> 
                    <h3>OUR SERVICES</h3> 
                    <br> 
                    <br> 
                    @foreach($index->services as $service)
                    <div class="col-lg-3"> 
                        <img src="{{$service->image}}"> 
                        <h4>{{$service->place}}</h4> 
                        <p>{{$service->capture}}</p> 
                    </div> 
                    @endforeach
             
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /g --> 
        <!-- ========== CHARTS - DARK GREY SECTION ========== --> 
        <div id="dg"> 
            <div class="container"> 
                <div class="row"> 
                    <h3>SOME CHARTS</h3> 
                    <br> 
                    <br> 
                      @foreach($index->smCharts as $smChart)
                    
                    <div class="col-lg-4"> 
                        <canvas id="{{$smChart->product}}" height="130" width="130"></canvas> 
                        <br> 
                        <h4>{{$smChart->product}}</h4> 
                        <br> 
                        <script>
var doughnutData = [
 
    @foreach($smChart as  $chartDt)
    {
        value: {{$chartDt->value}},
        color: "{{$chartDt->color}}"
    },
    @endforeach
];
var myDoughnut = new Chart(document.getElementById("{{$smChart->product}}").getContext("2d")).Doughnut(doughnutData);
                        </script> 
                    </div> 
                      @endforeach
                
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /dg --> 
        <section id="portfolio" name="portfolio"></section> 
        <div id="portfoliowrap"> 
            <div class="container"> 
                <div class="row"> 
                    <h3>COOL WORKS</h3> 
                    <br> 
                    <br> 
                    <div class="col-lg-4 port-space"> 
                        <a href="/item/"><img src="../image/work1.png"></a> 
                    </div> 
                    <div class="col-lg-4 port-space"> 
                        <a href="/item/"><img src="../image/work2.png"></a> 
                    </div> 
                    <div class="col-lg-4 port-space"> 
                        <a href="/item/"><img src="../image/work3.png"></a> 
                    </div> 
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /portfoliowrap --> 
        <!-- ========== WHITE SECTION ========== --> 
        <div id="w"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-lg-8 col-lg-offset-2"> 
                        <h3>WE WORK HARD TO DELIVER A 
                            <bold>
                                HIGH QUALITY SERVICE
                            </bold>. OUR AIM IS YOUR COMPLETE 
                            <bold>
                                SATISFACTION
                            </bold>. </h3> 
                    </div> 
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /w --> 
        <!-- ========== ABOUT - GREY SECTION ========== --> 
        <section id="about" name="about"></section> 
        <div id="g"> 
            <div class="container"> 
                <div class="row"> 
                    <h3>ABOUT US</h3> 
                    <br> 
                    <br> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8"> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor, tristique erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper. Pellentesque fringilla, massa vel rutrum consequat, nulla velit fermentum dolor, sed scelerisque.</p> 
                        <br> 
                        <br> 
                    </div> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-3 team"> 
                        <img class="img-circle" height="90" width="90" src="../image/team01.jpg"> 
                        <h4>Liz Stewart</h4> 
                        <h5><i>Product Manager</i></h5> 
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
                        <p> <a href="/#"><i class="icon-facebook"></i></a> <a href="/#"><i class="icon-twitter"></i></a> <a href="/#"><i class="icon-envelope"></i></a> </p> 
                    </div> 
                    <div class="col-lg-3 team"> 
                        <img class="img-circle" height="90" width="90" src="../image/team02.jpg"> 
                        <h4>Brad Casey</h4> 
                        <h5><i>Front-end Developer</i></h5> 
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
                        <p> <a href="/#"><i class="icon-facebook"></i></a> <a href="/#"><i class="icon-twitter"></i></a> <a href="/#"><i class="icon-envelope"></i></a> </p> 
                    </div> 
                    <div class="col-lg-3 team"> 
                        <img class="img-circle" height="90" width="90" src="../image/team03.jpg"> 
                        <h4>Pamela Chow</h4> 
                        <h5><i>Web Designer</i></h5> 
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
                        <p> <a href="/#"><i class="icon-facebook"></i></a> <a href="/#"><i class="icon-twitter"></i></a> <a href="/#"><i class="icon-envelope"></i></a> </p> 
                    </div> 
                    <div class="col-lg-3 team"> 
                        <img class="img-circle" height="90" width="90" src="../image/team04.jpg"> 
                        <h4>Tim Gates</h4> 
                        <h5><i>Back-end Guru</i></h5> 
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
                        <p> <a href="/#"><i class="icon-facebook"></i></a> <a href="/#"><i class="icon-twitter"></i></a> <a href="/#"><i class="icon-envelope"></i></a> </p> 
                    </div> 
                </div> 
            </div>
            <!-- /container --> 
        </div>
        <!-- /g --> 
        <!-- ========== FOOTER SECTION ========== --> 
        <section id="contact" name="contact"></section> 
        <div id="f"> 
            <div class="container"> 
                <div class="row"> 
                    <h3><b>CONTACT US</b></h3> 
                    <br> 
                    <div class="col-lg-4"> 
                        <h3><b>Send Us A Message:</b></h3> 
                        <h3>onassis@blacktie.co</h3> 
                        <br> 
                    </div> 
                    <div class="col-lg-4"> 
                        <h3><b>Call Us:</b></h3> 
                        <h3>+55 3984-4389</h3> 
                        <br> 
                    </div> 
                    <div class="col-lg-4"> 
                        <h3><b>We Are Social</b></h3> 
                        <p> <a href="/#"><i class="icon-facebook"></i></a> <a href="/#"><i class="icon-twitter"></i></a> <a href="/#"><i class="icon-envelope"></i></a> </p> 
                        <br> 
                    </div> 
                </div> 
            </div> 
        </div>
        <!-- /container --> 
        <!-- /f --> 
        <div id="c"> 
            <div class="container"> 
                <p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p> 
            </div> 
        </div> 
        <!-- Bootstrap core JavaScript
          ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src="../js/classie.js"></script> 
        <script src="../js/bootstrap.min.js"></script> 
        <script src="../js/smoothscroll.js"></script> 
        <script src="../js/main.js"></script>   
    </body>
</html>