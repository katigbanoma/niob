<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <body>
        <div id="site-wrapper">
            <div class="main">
                <div class="section">
                    <div class="section-content">
                        <div class="post">
                            <div class="post-title"><h2><a href="#">Please Enter your personal details</a></h2></div>
                            <div>
                            <?php 
                                if (!$_SESSION['registered']) {
                                    
                                }else{
                                    echo $_SESSION['registered'];
                                }
                            ?>
                                <form action="process.php" id="member_reg_form" name="member_reg_form" class="contact-form" role="form" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control2" name="surname" id="surname" placeholder="Member's Surname">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control2" name="other_names" id="other_names" placeholder="Member's Other Names">
                                        </div>
                                        <div class="col-md-6" style="float:left; width: 39%;">
                                            <select class="form-control3" name="member_title" id="member_title" placeholder="Member's Title">
                                                <option value='#'>::: Please Select  Personal Title :::</option>
                                                <option value='Alhaji'  >Alhaji </option>
                                                <option value='Bldr.'  >Bldr. </option>
                                                <option value='Chief'  >Chief </option>
                                                <option value='Comrade'  >Comrade </option>
                                                <option value='Doctor'  >Doctor </option>
                                                <option value='Emperor'  >Emperor </option>
                                                <option value='Engineer'  >Engineer </option>
                                                <option value='Miss'  >Miss </option>
                                                <option value='Mr'  >Mr </option>
                                                <option value='Mrs'  >Mrs </option>
                                                <option value='Pastor'  >Pastor </option>
                                                <option value='Professor'  >Professor </option>
                                                <option value='Reverend'  >Reverend </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6" style="float:left; width: 40%; margin-left: -9px;">
                                            <select class="form-control3" name="gender" id="gender" placeholder="Member's Gender">
                                                <option value="#"> Please select Gender</option>
                                                <option value="Male"> Male</option>
                                                <option value="Female"> Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6" style="float:left; width: 35%;">
                                            <input type="text" class="form-control2" name="dob" id="dob" placeholder="Date of Birth">
                                        </div>
                                        <div class="col-md-6" style="float:left; width: 36%; margin-left: 37px;">
                                            <input type="text" class="form-control2" name="phone" id="phone" placeholder="Member's Phone Number">
                                        </div>
                                        <div class="col-md-6" style="float:left; width: 40%;">
                                            <select class="form-control2" name="religion" id="religion" placeholder="Member's Religion">
                                                <option value="#"> Religion</option>
                                                <option value="Islamic"> Islamic</option>
                                                <option value="Christianity"> Christianity</option>
                                                <option value="Traditional"> Traditional</option>
                                            </select>
                                        </div>
                                         <div class="col-md-6" style="float:left; width: 40%; margin-left: -20px;">
                                            <select class="form-control2"  name="niob_membership_grade" id="niob_membership_grade">
                                                <option value='#'>::: Please Select  NIOB Membership Grade Title :::</option><option value='Fellow'  >Fellow </option><option value='Corporate'  >Corporate </option><option value='Graduate'  >Graduate </option><option value='Associate'  >Associate </option><option value='Licentiate'  >Licentiate </option><option value='Technician'  >Technician </option><option value='Student'  >Student </option><option value='Craftmen And Artisans'  >Craftmen And Artisans </option>                    </select>
                                        </div>  
                                        <div class="col-md-6">
                                            <input type="email" class="form-control2" name="email" id="email" placeholder="Member's Email Address">
                                        </div>      
                                        <div class="col-md-12">
                                            <input type="text" class="form-control2" name="address" id="address" placeholder="Member's Contact Address">
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control2" name="niob_admission_date" id="niob_admission_date" placeholder="Member's NIOB Admission Date">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control2" name="reg_no" id="reg_no" placeholder="Registration Number">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control2" name="membership_no" id="membership_no" placeholder="Membership Number">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control2" name="corbon_admin_no" id="corbon_admin_no" placeholder="Corbon Admission Number">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control2" name="corbon_admin_date" id="corbon_admin_date" placeholder="Corbon Date of Admission">
                                        </div> 
                                        <div class="col-md-6" style="float:left; width: 40%;">
                                            <select class="form-control2"   name="highest_acad_qual" id="highest_acad_qual" placeholder="Highest Academic Qualification">
                                                <option value='#'>::: Please Select  Academic Qualification :::</option><option value='Bsc/Btech'  >Bsc/Btech </option><option value='HND'  >HND </option><option value='Msc'  >Msc </option><option value='NCE'  >NCE </option><option value='OND'  >OND </option><option value='PGD'  >PGD </option><option value='Phd'  >Phd </option><option value='WASCE'  >WASCE </option>                    </select>
                                        </div>
                                        <div class="col-md-6" style="float:left; width: 40%; margin-left: -20px;">
                                            <select class="form-control2"   name="year_education" id="highest_acad_qual" placeholder="Highest Academic Qualification">
                                                <option value='#'>:::Qualification Year :::</option>
                                                <option value='Bsc/Btech'  >1981</option>
                                                <option value='HND'  >1982 </option>
                                                <option value='Msc'  >1983 </option>
                                                <option value='NCE'  >1984</option>
                                                <option value='OND'  >1985 </option>
                                                <option value='PGD'  >1986</option>
                                                <option value='Phd'  >1987</option>
                                                <option value='WASCE'  >1988 </option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control2" name="current_employer" id="current_employer" placeholder="Current Employer">
                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control2" name="position_held" id="position_held" placeholder="Position Held">
                                        </div>

                                        <div class="col-md-12">
                                            <textarea class="form-control2" name="additional_info" id="additional_info" placeholder="Additional Information" rows="7"></textarea>
                                        </div>
                                        <div id="upload" class="plupload_button col-md-6" ><a class="btn btn-primary" href="#" style="background-color: #eee !important;  border: 1px solid #CCC !important; color:#000 !important"><i class="fa fa-upload"></i> &nbsp; Upload Passport Photograph</a></div>&nbsp;
                                        <span id="status" ></span>
                                        <input type="hidden" name="passport" id="passport"  value="" title="Passport Photograph" />
                                        <ul id="files" ></ul>  
                                        <div id="foto" class="col-md-6" style="margin-bottom:10px !important;">&nbsp;
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" id="save_member" name="save_member" class="btn btn-large btn-effect"><i class="fa fa-check"></i> Save Member Details</button>
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
