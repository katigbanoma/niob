<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <body>
        <div id="site-wrapper">
            <div class="main">
                <div class="section">
                    <div class="section-content">
                        <div class="post">
                            <div class="post-title"><h2>Please Enter your login details [New member? Click <a href="#" onclick="showUser('register.php', this.value)">here</a>]</h2></div>
                            <div>
                                <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" id="member_login_form" name="member_login_form" style="contact-form"  method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Member's Login Username">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control" name="mem_password" id="mem_password" placeholder="Member's Login Password">
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" id="login_member" name="login_member" class="btn btn-large btn-effect"><i class="fa fa-check"></i> Login </button>
                                            <div id="success"></div>
                                        </div>
                                    </div> 
                                </form>
                                <?php
                                    $username = $_POST['username'];
                                    $mem_password  = $_POST['mem_password'];
                                    $login = $_POST['login_member'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
