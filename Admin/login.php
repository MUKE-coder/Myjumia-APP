<?php require("header.php");?>
<div class="container">
    <div class="row mb-5 ">
            <div class="col-md-6 ">
                <div class="card-group myShadow">
                    <div class="card rounded-left p-4" ">
                        <h2 class="myColor">ACCOUNT LOGIN</h2>
                        <hr class="py-1">
                        <form action="#" class="px-3" method="post" id="login-form">
                        
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email" required>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-lock fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control rounded-0"  placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" name="rem" id="customCheck" class="custom-control-input">
                                    <label for="customCheck" class="custom-control-label">Remember Me</label>
                                </div>
                                <div class="forgot float-right">
                                    <a href="#" id="forgot-link"><span class="myColor">Forgot Password</span></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="LOGIN" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn2">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
            <div class="card-group myShadow">
                    <div class="card rounded-left p-4" ">
                        <h2 class="myColor">ACCOUNT REGISTER</h2>
                        <hr class="py-1">
                        <form action="#" class="px-3" method="post" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-user fa-lg"></i>
                                    </span>
                                </div>
                                <input type="name" name="name" id="name" class="form-control rounded-0" placeholder="Full Name" required>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Email" required>
                            </div>
                            
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-lock fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control rounded-0"  placeholder="Password" required>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-lock fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="cpassword" id="password" class="form-control rounded-0"  placeholder="Confirm Password" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" value="REGISTER" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn2">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
    </div>
</div>


















<?php require("footer.php");?>