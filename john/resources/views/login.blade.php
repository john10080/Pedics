@extends('layouts.mainLayout')
 <link rel="stylesheet" href="css/creative.css">
  <link rel="stylesheet" href="js/creative.js">
@include('layouts.headerLayout')

@section('content')

     <header>
        <div class="header-content">
            <div class="header-content-inner btn-group" role="group">
                <h1>Patient FIles</h1>
                <hr>
                <p>Transforming the Doctor-Patient experience through cloud-based electronic
medical records accessible anytime, anywhere.</p>
                <div>
                <a id="sign_in" href="#services" class="btn btn-primary btn-xl page-scroll">Get Started</a>
                  <a id="sign_in" href="#about" class="btn btn-primary btn-xl page-scroll">Sign In</a> 
                </div>
            </div>
        </div>
    </header>


    <section class="bg-primary" id="about">
        <div class="container" >
            <div class="row" >
                <div class="col-lg-8 col-lg-offset-2 text-center">
                <br><br><br>
                    <h2 class="section-heading" style="color: black">Login Your Account</h2>
                    <hr class="light">
                    
                    <form role="form" >
                        <div class="form-group" align="center">
                            <input  style="width: 50%" class="form-control" type="text" placeholder="Email Address">
                        </div>
                        <div class="form-group" align="center">
                            <input type="password" style="width: 50%" class="form-control" type="text" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button  class="btn btn-default btn-xl wow tada">Sign In</button> 
                        </div>

                        <div class="form-group">
                          <span style="color: black;font-weight: bold;">or   Sign in with   </span><a href="#"><img src="img/withMd.png" width="55px" ></a>
                        </div>

                    </form>

                    
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Create Account</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                      <form role="form" >
                        <div class="form-group" align="center">
                            <input style="width: 50%" class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="form-group" align="center">
                            <input style="width: 50%" class="form-control" type="text" placeholder="Surname">
                        </div>
                        <div class="form-group" align="center">
                            <input style="width: 50%" class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="form-group" align="center">
                            <input type="password" style="width: 50%" class="form-control" type="text" placeholder="Password">
                      
                        </div>
                         <div class="form-group" align="center">
                            <input type="password" style="width: 50%" class="form-control" type="text" placeholder="Confirm Password">
                          
                        </div>
                        <div class="form-group" align="center">
                            <button id="sign_up" style="color: white" class="btn btn-default btn-xl wow tada">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr id="p_hr2">

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>






@endsection