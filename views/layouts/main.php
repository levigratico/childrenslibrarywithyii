<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Dropdown;
use yii\grid\GridView;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
         /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
 /*   header{
      background-color: black;
      width: 100%;
      height: 50px;
    }*/

    .navbar{
      padding: 0;
      margin:0;
      border-radius: 0;
      background-color: rgb(61,140,189);
      border-right: 0;
      border-left: 0;
      border-top: 0;
      border-bottom: 1px thin;
      border-color: whitesmoke;

    }
    .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus
    {
      background-color: rgb(241,241,241);
      color:rgb(51,122,183);
    }
    img.img-adjust
    {
        margin-bottom: 20px;
    }

    .navbar-default .navbar-brand
    {
        color: white;
    }

    .sidebar ul li
    {
        background-color: rgb(36,43,54);
        border-color: rgb(36,43,54);
        color:white;

    }
    .sidebar ul li a.active
    {
        background-color: rgb(45,56,66);
        border-color: rgb(36,43,54);
    }
    .nav>li>a:focus, .nav>li>a:hover
    {
       background-color: rgb(36,43,54);
       /*color:white;*/
    }
    .sidebar .nav-second-level li a
    {
        background-color: none;
    }
    a 
    {
        color:rgb(239,239,247);
    }
    a:hover
    {
        color:rgb(61,140,187);
    }
    html,body
    {
        background-color: rgb(36,43,54);
        border-color: rgb(36,43,54);
    }
    table thead tr th a 
    {
        color:rgb(61,140,187);
    }
    span.glyphicon
    {
        color:rgb(61,140,187);
        font-size: 20px;
        padding-top: 10px;
    }
    
    ul.breadcrumb li a
    {
        color:rgb(61,140,187);

    }
    ul.breadcrumb
    {
        padding-top:20px;
        background-color: white;
    }
    table tbody tr td img
    {
        box-shadow: 1px 1px 1px 1px gray;
    }
    div#multipleid table tr th:nth-child(2) {
        display: none;
    }
    div#multipleid table tr td:nth-child(2) {
        display: none;
    }
    h3#book-title
    {
        color: rgb(86,103,129);
        background-color: rgb(242,242,242);
        min-height: 50px;
        text-align: center;
        border-radius: 2px 2px 2px 2px;
        font-size: 20px;
        padding-top: 15px;
        padding bottom: 15px;
        font-weight: bold;

    }

    ul.breadcrumb > :first-child 
    {
        display: none;
    }   
    
    </style>
</head>
<body>
<?php $this->beginBody() ?>
<!-- <div id="wrapper">

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Account</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu"> 
                       <li><br/><center><?php echo Html::img('@web/images/admin.png',['width'=>'200','class'=>'img-adjust']) ?></li>
                         
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-book"></i>&nbsp; Books</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= Url::to('index.php?r=tblbookcover%2Findex')?>">Cover page/Information</a>
                                </li>
                                <li>
                                    <a href="<?= Url::to('index.php?r=bookcontent%2Fmultiple')?>">Upload Content</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-tags"></i> &nbsp;Category</a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= Url::to('index.php?r=category%2Findex')?>">List</a>
                                </li>
                                <li>
                                    <a href="<?= Url::to('index.php?r=categorycontent%2Findex')?>">Content</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="<?= Url::to('index.php?r=color%2Findex')?>"><i class="glyphicon glyphicon-adjust"></i>&nbsp; Color</a>
                        </li>
                         <li>
                            <a href="<?= Url::to('index.php?r=language%2Findex')?>"><i class="glyphicon glyphicon-globe"></i>&nbsp; Language</a>
                        </li>
                        <!-- <li>
                            <a href="index.html"><i class="glyphicon glyphicon-user"></i>&nbsp; Accounts</a>
                        </li> -->
                        <li>
                            <a href="<?= Url::to('index.php?r=batch%2Fcreate')?>"><i class="glyphicon glyphicon-save"></i>&nbsp; Import CSV</a>
                        </li>
                       <li>
                            <a href="<?= Url::to('index.php?r=searchbook%2Findex')?>" target="_blank"><i class="glyphicon glyphicon-th-list"></i>&nbsp; Children's Library</a>
                        </li>
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
                      <?= $content ?>
                     
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Children's Library <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>

<script>
    $(document).ready(function(){
        $("table").removeClass("table table-striped table-bordered");
        $("table").addClass("table table table-hover table-striped");

        $("#multipletablebookcontent tr td").click(function(){
           var id = $(this).parents('tr:eq(0)').find('td:eq(1)').text();
           var booktitle = $(this).parents('tr:eq(0)').find('td:eq(2)').text();
            $.trim($("#tblbookcontent-bookcover_id").val(id));
            $("h3#book-title").text(booktitle);
        });

        $('#tblcolor-color_value').ColorPicker({
            onSubmit: function(hsb, hex, rgb, el) {
                $(el).val("#"+hex);
                $(el).ColorPickerHide();
            },
            onBeforeShow: function () {
                $(this).ColorPickerSetColor(this.value);
            }
        })
        .bind('keyup', function(){
            $(this).ColorPickerSetColor(this.value);
        })

       
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
