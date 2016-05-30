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
    <meta charset="<?php Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php echo Html::csrfMetaTags(); ?>
    <?php $this->head(); ?>

<body>
<?php $this->beginBody(); ?>


<!-- Header Starts -->

    <?php echo $this->render('//common/head'); ?>

<!-- #Header Starts -->


<!-- banner -->
<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / Buy</span>
        <h2>Buy</h2>
    </div>
</div>
<!-- banner -->


<div class="container">
    <div class="properties-listing spacer">

        <?= $content ?>

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
                            <input type="password" class="form-control" id="exampleInputPassword2"
                                   placeholder="Password">
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
                    <button type="submit" class="btn btn-info" onclick="window.location.href='register.html'">Join Now
                    </button>
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



