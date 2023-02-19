
    <?php
    
    

    //import database
    include("../connection.php");



    if($_POST){
        //print_r($_POST);
        $result= $database->query("select * from webuser");
        $oldemail=$_POST["oldemail"];      
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        
        if ($password==$cpassword){
            $error='3';
            $result= $database->query("select admin.aemail from admin inner join webuser where webuser.email='$email';");
            //$resultqq= $database->query("select * from doctor where docid='$id';");
                    
            }else{

                //$sql1="insert into doctor(docemail,docname,docpassword,docnic,doctel,specialties) values('$email','$name','$password','$nic','$tele',$spec);";
                $sql1="update admin set aemail='$email',apassword='$password';";
                $database->query($sql1);

                $sql1="update webuser set email='$email' where email='$oldemail' ;";
                $database->query($sql1);

                echo $sql1;
                //echo $sql2;
                $error= '4';
                
            }
            
        }else{
            $error='2';
        }      
        //header('location: signup.php');
        $error='3';
    
    

    header("location: settings.php?action=edit&error=".$error."&id=".$id);
    ?>
    
   

</body>
</html>