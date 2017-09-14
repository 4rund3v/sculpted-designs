<?php
include_once ('header.php');
?>

<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Catering<small>  : Perfect Quality ensured Everytime</small></h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Catering</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image:url('img/catering5.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Complete Arrangements </h3>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/catering3.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Tasty!</h3>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image:url('img/catering6.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3></h3>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/catering3.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Weddings to be Remembered</h3>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('img/catering2.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>From Decor to Catering</h3>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Catering</h3>
            <p>Catering is one of the most important component of a successful function/events.
                A large portion of planning for an event is food – knowing the number of people you need to feed, figuring out what food you
                want to serve, preparing the food, serving the food, and cleaning up once your guests leave. Now to us, that sounds like a lot of work – but work we enjoy doing.
                A lot of thought goes into what to serve at an event which can be stressful.
                We can ease this worry and take care of the hard work.</p>
            <div style="text-align: center;">
                <button type="button" class="button" data-toggle="modal" data-target="#myModal">Book</button>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="container">
                                <form class="well form-horizontal" action="includes/register.php" method="post"  id="contact_form">
                                    <fieldset>
                                        <!-- Form Name -->
                                        <legend><center><h2><b>Event Registration</b></h2></center></legend><br>
                                        <!-- Text input-->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">First Name</label>
                                            <div class="inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input  name="name" placeholder="First Name"class="form-control"  type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Event Selection</label>
                                            <div class="selectContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                                    <select name="event" class="form-control selectpicker">
                                                        <option value="">Select your Event</option>
                                                        <option>Wedding Events</option>
                                                        <option>House Warming Events</option>
                                                        <option>Birthday Party</option>
                                                        <option>Corporate Event</option>
                                                        <option>Reception Event</option>
                                                        <option>Anniversary Event</option>
                                                        <option>Catering</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">E-Mail</label>
                                            <div class="inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Text input-->

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Contact No.</label>
                                            <div class="inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input name="contact_no" placeholder="(9898989898)" class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Select Basic -->

                                        <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>
                                            <div class="col-md-4"><br>
                                                <button name = "submit" type="submit" class="btn btn-warning" >
                                                    SUBMIT
                                                    <span class="glyphicon glyphicon-send"></span></button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div><!-- /.container -->

                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4">You also might like</h3>

        <div class="row">

            <div class="col-md-3 col-sm-6 mb-4" style="text-align: center;">
                <a href="portfolio-item-house_warming.html">
                    <figure>
                        <img class="img-fluid" src="img/houseWarming3.jpg" alt="">
                        <figcaption><strong>House Warming</strong></figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4" style="text-align: center;">
                <a href="portfolio-item-birthday_party.html">
                    <figure>
                        <img class="img-fluid" src="img/princess2.jpg" alt="">
                        <figcaption><strong>Birthday</strong></figcaption>
                    </figure>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4" style="text-align: center;">
                <a href="portfolio-item-corporate_events.html">
                    <figure>
                        <img class="img-fluid" src="img/corporate.jpeg" alt="Corporate Events">
                        <figcaption><strong>Corporate Events</strong></figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4" style="text-align: center;">
                <a href="portfolio-item-engagement.html">
                    <figure>
                        <img class="img-fluid" src="img/engagement.jpeg" alt="">
                        <figcaption><strong>Engagement<strong></figcaption>
                    </figure>
                </a>
            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php
include_once ('footer.php');
?>
