    <?php
      require('dbconnect.php');
      // If the values are posted, insert them into the database.
      if (isset($_POST['surname']) && isset($_POST['other_names']) && isset($_POST['member_title']) && isset($_POST['gender'])
            && isset($_POST['dob']) && isset($_POST['religion']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address'])
            && isset($_POST['niob_admission_date']) && isset($_POST['niob_membership_grade']) && isset($_POST['reg_no']) && isset($_POST['membership_no'])
            && isset($_POST['corbon_admin_no']) && isset($_POST['highest_acad_qual']) && isset($_POST['year_education']) && isset($_POST['current_employer'])
            && isset($_POST['position_held']) && isset($_POST['additional_info']) 
      ){
          $surname = $_POST['surname'];
          $othernames = $_POST['other_names'];
          $member_title = $_POST['member_title'];
          $gender = $_POST['gender'];
          $dob = $_POST['dob'];
          $religion = $_POST['religion'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $niob_addmission_date = $_POST['niob_admission_date'];
          $niob_membership_grade = $_POST['niob_membership_grade'];
          $reg_no = $_POST['reg_no'];
          $membership_no = $_POST['membership_no'];
          $corbon_admin_no = $_POST['corbon_admin_no'];
          $corbon_admin_date = $_POST['corbon_admin_date'];
          $highest_acad_qual = $_POST['highest_acad_qual'];
          $education_year = $_POST['education_year'];
          $current_employer = $_POST['current_employer'];
          $position_held = $_POST['position_held'];
          $additional_info = $_POST['additional_info'];
          $passport = $_POST['passport'];
          $save_member = $_POST['save_member'];
   
          $query = "INSERT INTO `niob_info` (member_surname, member_othernames, member_personal_title, member_gender, member_date_of_birth, member_religion, 
          member_phone_no, member_email_address, member_contact_address, member_niob_admission_date, member_niob_grade_title, member_registration_number,
          membership_number, corbon_admission_number, corbon_date_of_admission, academic_qualification, member_year_of_education, member_current_employer,
          member_position_held, member_additional_infomation
          ) 
          VALUES ('$surname', '$othernames', '$member_title', '$gender', '$dob', '$religion', '$phone', '$email', '$address',
          '$niob_addmission_date', '$niob_membership_grade', '$reg_no', '$membership_no', '$corbon_admin_no', '$corbon_admin_date',
          '$highest_acad_qual', '$education_year', '$current_employer', '$position_held', '$additional_info' 
           )";
          $result = mysqli_query($connection, $query);
          if($result){
              $smsg = "User Created Successfully.";
          }else{
              $fmsg ="User Registration Failed";
          }
      }
    ?>

        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
        <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>