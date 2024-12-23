<?php require APPURL.'/views/layout/header.php' ?>

    <section class="col-md-4 mx-auto py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light rounded-0">
                    <div class="card-body">
                        <h3>Register Form</h3>
                        <form action="<?php  echo ROOTURL;  ?> /users/register" method="POST">
                           
                             <div class="col-md-12 form-group mb-3">
                                <label for="Fullname">Fullname</label>
                                <input type="text" name="fullname" id="fullname" class="form-control form-control-sm rounded-0" placeholder="Enter Fullname"/>
                                <span class=""></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm rounded-0" placeholder="Enter Email"/>
                                <span class=""></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-sm rounded-0" placeholder="Enter Password"/>
                                <span class=""></span>
                            </div>

                            <div class="col-md-12 form-group mb-3">
                                <label for="cfmpassword">Confirm Password</label>
                                <input type="password" name="cfmpassword" id="cfmpassword" class="form-control form-control-sm rounded-0" placeholder="Enter Confirm Password"/>
                                <span class=""></span>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <a href="<?php  echo ROOTURL;  ?> /users/register">not yet register ? Register here</a>
                                </div>
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Login</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section>
<?php require APPURL.'/views/layout/footer.php' ?>