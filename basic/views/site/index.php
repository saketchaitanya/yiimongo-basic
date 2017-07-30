<?php
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Chinmaya Centre Reporting System';
?>
<div class="site-index">
                <div class="divider-new">
                        <h2 class="h2-responsive"><?php echo Html::encode(\Yii::$app->name); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-12">
                            
                            <!--Carousel Wrapper-->
                            <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                </ol>
                                <!--/.Indicators-->

                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active" align="center">
                                        <img src="http://theunn.com/wp-content/uploads/2016/02/Chinmaya-Mission-Boston-to-Kick-Off-Swami-Chinmayananda%E2%80%99s-Centenary-Celebrations-on-May-8-678x381.jpg" height="128" class="" alt="First slide">
                                        <div class="carousel-caption">
                                            <h4>Pujya Gurudev - Founder Chinmaya Mission</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="carousel-item" align="center">
                                        <img src="https://i.ytimg.com/vi/7UAvjDlwjp8/hqdefault.jpg" class="" alt="Second slide">
                                        <div class="carousel-caption">
                                            <h4>Pujya Guruji - Swami Tejomayananda</h4>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="carousel-item" align="center">
                                        <img src="https://pbs.twimg.com/media/C2ieQzPW8AAEnKh.jpg" height="128" class="" alt="Third slide">
                                        <div class="carousel-caption">
                                            <h4>Swami Swaroopananda - Head of Chinmaya Mission</h4>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!--/.Slides-->

                                <!--Controls-->
                                <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>
                    </div>
                    <!--side bar 1-->
                    <div class="col-md-4">
                         <div class="widget-wrapper">
                            <!-- <h4>Login</h4> -->
                            <div class="card">
                               <!--  <?= \shiyang\login\Login::widget(); ?> -->
                                <?php echo $this->render('_login_form', ['model' => $model]); ?>
                                <!-- <div class="card-block">
                                    <div class="md-form">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" id="form1" class="form-control">
                                        <label for="form1">Username</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="text" id="form2" class="form-control">
                                        <label for="form2">Password</label>
                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                       <br>
                    <hr class="extra-margins">
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
