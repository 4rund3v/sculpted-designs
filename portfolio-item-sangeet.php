<?php
include_once ('header.php');
?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Sangeet / Mehendi <small>and other arrangements</small></h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Sangeeth & Mehendi</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <img class="img-fluid" src="img/sangeet.jpg" alt="sangeet picture">
        </div>

        <div class="col-md-4">
            <h3 class="my-3">Sangeeth & Mehendi</h3>
            <p>Just for the perfect occasion, we provide ambient sound sangeet, and the best Mehendi Artists for the bridesmaid.
                We like to make sure that you get everything you want from us as we offer.

            </p>
            <h3 class="my-3">Package Details</h3>
            <ul>
                <li>Wedding photography and vediography</li>
                <li>Mehendi party</li>
                <li>Catering</li>
            </ul>
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

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <?php
    include_once ('references.php');
    ?>
    <!-- /.row -->

</div>
<!-- /.container -->
<?php
include_once ('footer.php');
?>