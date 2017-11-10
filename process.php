    <?php
        $conn = new PDO ("mysql:host=localhost;dbname=niob","root","kini419,247");
       
        $surname = $_POST['surname'];

        if ( isset($surname) ) 
        {
            $query = "INSERT INTO niob_info ( member_surname )  VALUES ( $surname )";

            $result = mysqli_query($Dbconnect, $query);
            
            if($result){
                $smsg = "User Created Successfully.";
            }else{
                $fmsg ="User Registration Failed";
            }
        }
    ?>


        <?php 
        if(isset($smsg)){
            echo $smsg;
        }
        ?>
        <?php 
        if(isset($fmsg)){
            echo $fmsg;
        }
        ?>
