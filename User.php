<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","mibawa"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $Email=$_POST['e_mail'];
        
        $password=$_POST['pas_word']; 
        
        $login_query="SELECT * FROM `member_reg` WHERE email='$Email' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);

        if(mysqli_num_rows($login_res)>0)
        { 
            $_SESSION['e_mail']=$Email;
            header('Location:log_form.php');
            echo "success";
        } 
        else{
            echo '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
                  
        }
    }

?>