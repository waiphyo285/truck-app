<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href=" ../css/app.css" >
    <link rel="stylesheet" href=" css/bootstrap.min.css" />
    <link rel="stylesheet" href=" css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href=" css/main.css"/>
    <link rel="stylesheet" href=" fonts/awesome.css" />
    
    <script type="text/javascript" src="js/main.js"> </script>
    <script type="text/javascript" src=" js/jquery.js"> </script>
    <script type="text/javascript" src=" js/bootstrap.min.js"> </script>

    <link rel="stylesheet" type="text/css" href=" css/admin.side.css">
    <script type="text/javascript" src=" js/admin.side.js"></script>

    <script type="text/javascript" src=" js/newevent.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/home.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/ownership.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/modal.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/partnership.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/index.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/addprofit.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/profitdetail.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/launch.css')); ?>">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href=    "<?php echo e(url('/home')); ?>">
                         <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                        
                <div class="collapse navbar-collapse" id="app-navbar-collapse" style="background:#CCC;">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                        <?php else: ?>
                           <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>-->
                        <?php endif; ?>
                    </ul>
                </div>
            
       

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
