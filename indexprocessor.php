<?php 
    session_start();//starting the database
    $connection=mysqli_connect("localhost","root","","mibawa"); //connecting to the database
    
    $msg="";
    if(isset($_POST['submit'])){//called after user enters credentials and submits
        $Email=$_POST['e_mail'];//assigning html elements to the created variables
        
        $password=$_POST['pas_word']; 
        
        $login_query="SELECT * FROM `member_reg` WHERE email='$Email' and password='$password'";//comparing user credentials to table data
        
        $login_res=mysqli_query($connection,$login_query);//calling the sql functions for connecting to the database selecting the user table

        if(mysqli_num_rows($login_res)>0)// checking if the number of rows entered by the user in the database table is greater than zero 
        { 
            $_SESSION['e_mail']=$Email; //comparing if the username in the log in form is the same as the php variable

            
            header('Location:log_formtrial.php');//directing the user to the admin home page
        } 
        else{
            echo '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';//unsucceful registration message
        }
    }

?>