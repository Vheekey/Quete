<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>

  <title>Quete.com - An online recruitment management system</title>
</head>

<body>
     <div class="container">
        <div class="h1 text-primary">Quete.com</div>
        <div class="small text-primary">An online recruitment system for the digital times</div>
        <div class="btn-group pull-right">
            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal1">Register</button>
              <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal2">Log in</button>
       </div>
     </div>
   <p></p>
        <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                    <li data-target="#myCarousel" data-slide-to="9"></li>
                    <li data-target="#myCarousel" data-slide-to="10"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/images/job01.jpg" style = "width:100%;height:500px;" alt="job pix">
                            <div class="carousel-caption">
                                <h2 class="text-primary text-uppercase">Quete.com helps you in your quest for an impeccable employee</h2>
                            </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/job001.jpg" style = "width:100%; height:500px;" alt="job pix">
                    </div>

                    <div class="item">
                        <img src="assets/images/job1.jpg" style = "width:100%; height:500px;" alt="job pix">
                        <div class="carousel-caption">
                                <h2 class="text-primary">Recruit employees on the click of a button</h2>
                            </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/job2.jpg" style = "width:100%; height:500px;" alt="job pix">
                    </div>

                    <div class="item">
                        <img src="assets/images/job3.jpg" style = "width:100%; height:500px;" alt="job pix">
                    </div>

                    <div class="item">
                        <img src="assets/images/job4.jpg" style = "width:100%; height:500px;" alt="job pix">
                    </div>

                    <div class="item">
                        <img src="assets/images/job5.jpg" style = "width:100%; height:500px;" alt="job pix">
                    </div>

                    <div class="item">
                        <img src="assets/images/job6.jpg" style = "width:100%; height:500px;" alt="job pix">
                        <div class="carousel-caption">
                                <h2 class="text-primary">No more interview queues</h2>
                            </div>
                    </div>

                    <div class="item">
                        <img src="assets/images/job7.jpg" style = "width:100%; height:500px;" alt="job pix">
                    </div>

                    <div class="item">
                        <img src="assets/images/job8.jpg" style = "width:100%; height:500px;" alt="job pix">
                        <div class="carousel-caption">
                                <h2 class="text-primary">Schedule Interviews anywhere, anytime</h2>
                            </div>
                    </div>
                </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <!--<span class="glyphicon glyphicon-chevron-right"></span>-->
                <span class="sr-only">Next</span>
            </a>
    </div>
        </div>


     <!--</div>-->

           <!---- modals--->
                  <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">Register Here</h4>
                                    </div>
                            <div class="modal-body">
                                <form action="" method="post" id="registration" class="form-inline">
                                    <div class="reg form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Full Name</label>
                                                <input class="form-control" type="text" name="fname" data-required="true"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Email Address</label>
                                                <input class="form-control" type="text" name="email" data-required="true"/>
                                             </div>
                                        </div>
                                <p></p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Username</label>
                                                <input class="form-control" type="text" name="usname" data-required="true" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Password</label>
                                                <input class="form-control" type="password" name="pword" data-required="true" />
                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Register As</label>
                                                <select class="form-control" name="position" data-required="true">
                                                    <option value="candidate">Candidate</option>
                                                    <option value="recruiter">Recruiter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-sm btn-primary pull-right" name="register" value="Done" />
                                    </div>
                                </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
                                        </div>
                            </div>

                        </div>
                    </div>
                </div>


        <!-- Modal -->
                <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                <!-- Modal content-->
                    <div class="mod modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-primary">Login</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <form action="" method="post" class="form-inline">
                                    <label class="control-label">Username</label>
                                    <input type="text" class="form-control" name="usname"/>

                                    <label class="control-label">Password</label>
                                    <input type="password" class="form-control" name="pword" />

                                    <input type="submit" name="login" class="btn btn-sm btn-primary pull-right"/>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                    </div>
                </div>

</body>
</html>