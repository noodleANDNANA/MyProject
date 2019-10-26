<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>商城管理系统</title>
    <style>
        body{
            overflow: hidden;
        }
        aside {
            width: 200px;
            /*background-color: red;*/
            position: absolute;
            top: 50px;
            bottom: 0;


        }

        aside > .panel-default {
            border-radius: 0;
            margin-bottom: 0;
        }

        aside a {


            color: black;
            text-decoration: none;
        }

        aside a:hover {
            color: black;
            text-decoration: none;
        }

        aside a:link {

            color: #000000;
            text-decoration: none;
        }

        aside a:visited {

            color: #000000;
            text-decoration: none;
        }

        .list-group-item {
            padding-left: 25px;
        }

        main {
            position: absolute;
            top: 50px;
            left: 200px;
            bottom: 0;
            right: 0;
            padding: 5px 10px;
            background-color: #E7E7E7;
        }

        main > iframe {

            height: 100%;
            width: 100%;
        }

        .glyphicon {
            float: right;
            /*transition-property: all;*/
            /*transition-duration: .3s;*/
            transition: all .3s;
        }

        .glyphicon.active {

            transform: rotateZ(180deg);

        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">暖阳</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<!--                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
<!--                <li><a href="#">Link</a></li>-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<aside>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">导航管理
            <i class="glyphicon glyphicon-menu-down"></i>
        </div>


        <!--        <div class="panel-body">-->
        <!--                          -->
        <!--        </div>-->
        <!-- List group -->
        <ul class="list-group">
            <a href="../admin/NavigationList.php" target="ifram">
                <li class="list-group-item">导航列表</li>
            </a>
            <a href="../admin/newnavigation.php" target="ifram">
                <li class="list-group-item">插入导航</li>
            </a>
        </ul>
    </div>
    <!--    产品分类-->
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">分类管理
            <i class="glyphicon glyphicon-menu-down"></i>
        </div>
        <!--        <div class="panel-body">-->
        <!--    -->
        <!--        </div>-->
        <!-- List group -->
        <ul class="list-group">
            <a href="../admin/classification.php" target="ifram">
                <li class="list-group-item">产品分类列表</li>
            </a>

        </ul>
    </div>
    <!--产品表-->
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">产品管理
            <i class="glyphicon glyphicon-menu-down"></i>
        </div>
        <!--        <div class="panel-body">-->
        <!--    -->
        <!--        </div>-->
        <!-- List group -->
        <ul class="list-group">
            <a href="../admin/addproduct.php" target="ifram">
                <li class="list-group-item">添加产品</li>
            </a>
            <a href="../admin/productList.php" target="ifram">
                <li class="list-group-item">产品列表</li>
            </a>
        </ul>
    </div>
<!--    新闻管理  -->
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">新闻管理
            <i class="glyphicon glyphicon-menu-down"></i>
        </div>
        <!--        <div class="panel-body">-->
        <!--    -->
        <!--        </div>-->
        <!-- List group -->
        <ul class="list-group">
            <a href="../admin/addNews.php" target="ifram">
                <li class="list-group-item">添加新闻</li>
            </a>
            <a href="../admin/NewsList.php" target="ifram">
                <li class="list-group-item">新闻列表</li>
            </a>
        </ul>
    </div>
<!--    客户预约管理-->
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">客户预约管理
            <i class="glyphicon glyphicon-menu-down"></i>
        </div>
        <!--        <div class="panel-body">-->
        <!--    -->
        <!--        </div>-->
        <!-- List group -->
        <ul class="list-group">
            <a href="../admin/serviceList.php" target="ifram">
                <li class="list-group-item">预约列表</li>
            </a>
        </ul>
    </div>
</aside>
<main>
    <iframe src="../admin/success.php" frameborder="0" name="ifram">

    </iframe>
</main>
</body>
</html>
<script>
    $(".panel-heading").on("click", function () {
        $(this).children("i").toggleClass("active");
        $(this).next(".list-group").slideToggle();
    });
</script>