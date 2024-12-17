
            <!-- start Header Section -->

            <header>

                <!-- start nav Bar -->

                    <nav class="navbar navbar-expand-lg fixed-top ">

                        <a href="index.html" class="navbar-brand text-light mx-3">
                            <img src="./assets/img/fav/favicon.png" width="70" alt="favicon" />
                            <span class="text-uppercase h2 fw-bold mx-2">Plannco <span class="h3">HOME DECORATION</span></span>
                        </a>

                        <button type="button" class="navbar-toggler navbuttons " data-bs-toggle="collapse" data-bs-target="#nav">
                            <div class="bg-light lines1"></div>
                            <div class="bg-light lines2"></div>
                            <div class="bg-light lines3"></div>
                        </button>

                        <div id="nav" class="navbar-collapse collapse justify-content-end text-uppercase fw-bold">
                            <ul class=" navbar-nav">
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/welcomes" class="nav-link mx-2 menuitems" >Home</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/welcomes/about" class="nav-link mx-2 menuitems">About us</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/properties" class="nav-link mx-2 menuitems">Properties</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/services" class="nav-link mx-2 menuitems">Service</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/customer" class="nav-link mx-2 menuitems">Customer</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/furniture;"class="nav-link mx-2 menuitems">Furniture</a></li>
                                <li class="nav-item"><a href="<?php echo ROOTURL;?>/contact" class="nav-link mx-2 menuitems">Contact</a></li>
                               

                                <?php if(isset($_SESSION['user_id'])): ?>
                                    <li class="nav-item"><a href="<?php echo ROOTURL;?>/users/logout" class="nav-link mx-2 menuitems">Logout</a></li>

                                <?php else: ?>
                                    <li class="nav-item"><a href="<?php echo ROOTURL;?>/users/login"class="nav-link mx-2 menuitems">Login</a></li>
                                    <li class="nav-item"><a href="<?php echo ROOTURL;?>/users/register" class="nav-link mx-2 menuitems">Register</a></li>
                                <?php endif; ?>
                               
                            </ul>
                        </div>
                    </nav>
                    
                <!-- End nav Bar -->

                <!-- start banner Bar -->

                <div class="text-light text-center text-md-end banners">
                    <h1 class="display-4 bannerheaders">Welcome to <span class="display-3 text-uppercase">Plannco</span> Home Decoration Co.,ltd</h1>
                    <p class="lead bannerparagraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>

                <!-- start banner Bar -->
            </header>

            <!--  End Header Section-->
