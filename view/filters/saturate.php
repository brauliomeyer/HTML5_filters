<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CSS Color Filters | Greyscale</title>

        <!-- Bootstrap -->
        <link href="../../view/css/bootstrap.css" type="text/css" rel="stylesheet">
        
        <!-- Specefic stylesheet -->
        <link href="../../view/css/style.css" type="text/css" rel="stylesheet" >

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BDR</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li><a href="../../index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span></a>
                            <ul class="dropdown-menu" role="menu">  
                               <li><a href="blureffect.php">CSS Color Filters | Blur</a></li>
                                <li><a href="greyscale.php">CSS Color Filters | Grey</a></li>                                         <li><a href="invert.php">CSS Color Filters | Invert</a></li>
                                <li><a href="opacity.php">CSS Color Filters | Opacity</a></li>
                                <li><a href="sepia.php">CSS Color Filters | Sepia</a></li>
                                <li><a href="saturate.php">CSS Color Filters | Saturate</a></li>
                                <li><a href="contrast.php">CSS Color Filters | Contrast</a></li>
                                <li><a href="brightness.php">CSS Color Filters | Brightness</a></li>
                                <li><a href="hue_rotate.php">CSS Color Filters | Hue-Rotate</a></li>
                            <li><a href="drop_shadow.php">CSS Color Filters | Drop-Shadow</a></li>    
                            </ul>
                        </li>
                    </ul>                
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <h2 class="text-center text-muted">CSS Color Filters | Saturate</h2>        
        
        <hr>
    <div class="saturate">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/1.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/2.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/3.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/4.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
        </div>
        <div class="row">            
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/5.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/6.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/7.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#" class="img-thumbnail">
                    <img src="../../view/img/8.jpg" class="img-responsive" alt="animal">
                </a>
            </div>
        </div>
    </div>     
        <hr>
        <footer>
            <p class="text-center">Copyright &copy; Timothy Meijer</p>
        </footer>
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../../controller/js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>