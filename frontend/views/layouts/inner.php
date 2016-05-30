<?php
\frontend\assets\MainAsset::register($this);

use yii\helpers\Html;
use yii\bootstrap\Nav;

?>


<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $this->title ?></title>
    <meta charset="<?php Yii::$app->charset ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php echo Html::csrfMetaTags(); ?>
    <?php $this->head(); ?>

<body>
<?php $this->beginBody(); ?>
<?php $this->render('//common/head'); ?>




<div class="container">

    <!-- Header Starts -->
    <div class="header">
        <a href="index.html" ><img src="images/logo.png"  alt="Realestate"></a>

        <ul class="pull-right">
            <li><a href="buysalerent.html" >Buy</a></li>
            <li><a href="buysalerent.html" >Sale</a></li>
            <li><a href="buysalerent.html" >Rent</a></li>
        </ul>
    </div>
    <!-- #Header Starts -->
</div><!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Buy</span>
        <h2>Buy</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="properties-listing spacer">

        <div class="row">
            <div class="col-lg-3 col-sm-4 hidden-xs">

                <div class="hot-properties hidden-xs">
                    <h4>Hot Properties</h4>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg"  class="img-responsive img-circle" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.html" >Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p> </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg"  class="img-responsive img-circle" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.html" >Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p> </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/3.jpg"  class="img-responsive img-circle" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.html" >Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p> </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-5"><img src="images/properties/2.jpg"  class="img-responsive img-circle" alt="properties"/></div>
                        <div class="col-lg-8 col-sm-7">
                            <h5><a href="property-detail.html" >Integer sed porta quam</a></h5>
                            <p class="price">$300,000</p> </div>
                    </div>

                </div>



                <div class="advertisement">
                    <h4>Advertisements</h4>
                    <img src="images/advertisements.jpg"  class="img-responsive" alt="advertisement">

                </div>

            </div>

            <div class="col-lg-9 col-sm-8 ">

                <h2>2 room and 1 kitchen apartment</h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="property-images">
                            <!-- Slider Starts -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators hidden-xs">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <!-- Item 1 -->
                                    <div class="item active">
                                        <img src="images/properties/4.jpg"  class="properties" alt="properties" />
                                    </div>
                                    <!-- #Item 1 -->

                                    <!-- Item 2 -->
                                    <div class="item">
                                        <img src="images/properties/2.jpg"  class="properties" alt="properties" />

                                    </div>
                                    <!-- #Item 2 -->

                                    <!-- Item 3 -->
                                    <div class="item">
                                        <img src="images/properties/1.jpg"  class="properties" alt="properties" />
                                    </div>
                                    <!-- #Item 3 -->

                                    <!-- Item 4 -->
                                    <div class="item ">
                                        <img src="images/properties/3.jpg"  class="properties" alt="properties" />

                                    </div>
                                    <!-- # Item 4 -->
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                            <!-- #Slider Ends -->

                        </div>




                        <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                            <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                            <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service</p>

                        </div>
                        <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
                            <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="../../../maps.google.com/fi000001.002642&t=m&z=14&output=embed" ></iframe></div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="col-lg-12  col-sm-6">
                            <div class="property-info">
                                <p class="price">$ 200,000,000</p>
                                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Syndey, Australia</p>

                                <div class="profile">
                                    <span class="glyphicon glyphicon-user"></span> Agent Details
                                    <p>John Parker<br>009 229 2929</p>
                                </div>
                            </div>

                            <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
                            <div class="listing-detail">
                                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>

                        </div>
                        <div class="col-lg-12 col-sm-6 ">
                            <div class="enquiry">
                                <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                                <form role="form">
                                    <input type="text" class="form-control" placeholder="Full Name"/>
                                    <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                                    <input type="text" class="form-control" placeholder="your number"/>
                                    <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
                                    <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $this->render('//common/footer'); ?>


<!-- Modal -->
<div id="loginpop" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-sm-6 login">
                    <h4>Login</h4>
                    <form class="" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h4>New User Sign Up</h4>
                    <p>Join today and get updated with all the properties deal happening around.</p>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /.modal -->


<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>



