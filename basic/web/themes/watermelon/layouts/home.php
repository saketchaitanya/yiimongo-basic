<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
   AppAsset::register($this);

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo Html::encode(\Yii::$app->name); ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS (used bootstrap 4 instead of 3 in bootstrap folder) -->
    <!-- <link href="<?php echo $this->theme->baseUrl ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/style.css" rel="stylesheet">

    <style>
      
      /*** TF PALETTE ***/
body
{
    background-color: #D2D2CE; /*#C9D787*/
    color:#7D8A2E;
}
.primary-color-dark, 
.list-group-item.active, 
.list-group-item.active:focus, 
.list-group-item.active:hover
{
    background-color:#FF8598 !important;border-color:#FF8598;
}
nav.top-nav-collapse
{
    background-color:#FFFFFF;
}
.btn-primary, 
.btn-default, 
.btn-default:focus, 
.btn-default:hover, 
.btn-primary:focus, 
.btn-primary:hover
{
    background-color:#FFC0A9 !important;
}
.carousel-item img{
    height:128px    
}
</style>

</head>

<body>

<?php $this->beginBody() ?>

    <header>

        <!--Navbar-->
        <nav class="navbar navbar-dark primary-color-dark">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="about"><img src="http://www.chinmayanola.org/images/Om_logo.gif" style="float:left; height:35px" /><?php echo Html::encode(' CCRS'); ?></a>
                    <!--Links-->
                    <?php
                     $username='';
                    if (\Yii::$app->user->getIdentity())
                    {
                        $username=\Yii::$app->user->getIdentity()->username;
                    }

      				        echo Menu::widget([
      				          'options' => [
      				            "id"  => "nav",
      				            "class" => "nav navbar-nav"
      				          ],
    				            'items' => [
    				              ['label' => 'Home', 'url' => ['site/index'], "options" => [ "class" => "nav-item"],'visible' =>!Yii::$app->user->isGuest],
    				              ['label' => 'About', 'url' => ['site/about'], "options" => [ "class" => "nav-item"],'visible' =>!Yii::$app->user->isGuest],
    				              ['label' => 'Contact', 'url' => ['site/contact'], "options" => [ "class" => "nav-item"], 'visible' =>!Yii::$app->user->isGuest],
    				              ['label' => 'Logout('.$username. ')', 
                                        'url' => ['site/index/logout'], "options" => [ "class" => "nav-item"], 
                                        'linkOptions'=>['data'=>['method' => 'post']],
                                        'visible' =>!Yii::$app->user->isGuest],
    				            ],
      				        ]);
	  		            ?>

                    <!--Search form-->
                    <form class="form-inline">
                        <input class="form-control" type="text" placeholder="Search">
                    </form>
                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

    </header>

    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Main column-->
                      <div class="col-md-12">
                         <?php echo $content; ?>
                      </div>
                </div>
                <!--/.Main column-->
        </div>
        <!--/.Main layout-->

    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 col-md-offset-1">
                    <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                    <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-md-2 col-md-offset-1">
                    <h5 class="title">First column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-md-2">
                    <h5 class="title">Second column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-md-2">
                    <h5 class="title">Third column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4><?php echo Html::encode(\Yii::$app->name); ?></h4>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
               Copyright &copy; 2016 - made with <span style="color:red;">&#9829;</span> by <a href="https://ThemeFactory.net">ThemeFactory.net</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo $this->theme->baseUrl ?>/js/mdb.min.js"></script>

    <script>
      // ugly MDB fix http://i.imgur.com/WFl7fkh.jpg
      $(function(){
        $("#nav li a").addClass("nav-link");
      });
    </script>

    <?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage(); ?>
