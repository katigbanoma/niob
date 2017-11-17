<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
    <script type="text/javascript">
        function validateForm() {
            var x = document.forms["myform"]["username"].value;
            var y = document.forms["myform"]["mem_password"].value;

            console.log(x);

            if (x == "" && y == "") {
                alert("UserName must be filled out");
                return false;
            }
        }
    </script>
    <title>
        NIOB | Login
    </title>
    <link rel="stylesheet" type="text/css" href="static/sweetalert2.min.css" />
    <link rel="stylesheet" type="text/css" href="static/style.css" media="screen"/>
</head>

<body>
<div id="site-wrapper">
    <div class="main">
        <div class="section">
            <div class="section-title" style="width: 70%">Payment Information</div>
            <div class="section-content">
                <div class="post">
                    <div>
                        <form id="paymentForm" name="paymentForm" method="post">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <select name="paymentStatus" id="paymentStatus" class="form-control" required>
                                        <option value=''> Select Membership Status </option>
                                        <option value='yes'>Yes, I am a Registered Member</option>
                                        <option value='no'>No, I am a not a Registered Member</option>
                                    </select>
                                </div>
                                <div id="noFields">
                                    <div class="form-group col-md-12">
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name" required>
                                    </div>
                                </div>
                                <div id="yesFields">
                                    <div class="form-group col-md-12">
                                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Member's Phone Number" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Member's Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" id="login_member" name="login_member" class="btn btn-large btn-effect"><i class="fa fa-check"></i> Pay </button>
                                    <div id="success"></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
