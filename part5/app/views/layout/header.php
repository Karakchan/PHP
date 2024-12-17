<!DOCTYPE html>
    <html>
        <head>
            <title><?php echo APPNAME; ?></title>
            <!-- fav icon -->
            <link href="<?Php echo ROOTURL; ?>/public/assets/img/fav/favicon.png" rel="icon" type="img/png" sizes="16x16"/>
            <!-- bootstrap css1 js1 -->
            <link href="<?Php echo ROOTURL; ?>/public/assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <!-- fontawesome css1 -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- jquery ui css1 js1 -->
            <link href="<?Php echo ROOTURL; ?>/public/assets/libs/jquery-ui-1.13.2/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
           <!-- lightbox2 css1 js1 -->
           <link href="<?Php echo ROOTURL; ?>/public/assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css" rel="stylesheet" type="text/css"/>
            <!-- custom css -->
            <link href="<?Php echo ROOTURL; ?>/public/css/style.css" rel="stylesheet" type="text/css"/>



        </head>
        <body>


            <!-- start back to top  -->
            <div class="fixed-bottom">
                <a href="index.html" class="btn-backtotops" ><i class="fas fa-arrow-up"></i></a>
            </div>

            <!-- End back to top -->


             <!-- Start Stick NOte -->

             <div class="sticknotes">
                <a href="javascript:void(0);" class="about">About</a>
                <a href="javascript:void(0);" class="blog">Blog</a>
                <a href="javascript:void(0);" class="news">News</a>
                <a href="javascript:void(0);" class="contact">Contact</a>
             </div>

             <!-- End Stick NOte -->

<?php require APPURL.'/views/layout/navbar.php'?>