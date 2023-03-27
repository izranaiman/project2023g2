
    <?php
    
    

    //import database
    include("../connection.php");



    if($_POST){
        //print_r($_POST);
        $result= $database->query("select * from schedule");
        $scheduledate=$_POST['date'];
        $scheduletime=$_POST['time'];
        $id=$_POST['id00'];
        

        $result= $database->query("select schedule.scheduleid from schedule ;");
        if($result->num_rows==1){
                $id2=$result->fetch_assoc()["scheduleid"];
            }else{
                $id2=$id;
            }
            
            echo $id2."jdfjdfdh";
            if($id2!=$id){
                $error='1';
            
                }


                //$sql1="insert into doctor(docemail,docname,docpassword,docnic,doctel,specialties) values('$email','$name','$password','$nic','$tele',$spec);";
                $sql1="update schedule set scheduledate='$scheduledate',scheduletime='$scheduletime'";
                $database->query($sql1);


                echo $sql1;
                //echo $sql2;
                $error= '4';
                
    
            
        }else{
            $error='2';
        }
    

    header("location: schedule.php?action=edit&error=".$error."&id=".$id);
    ?>
     

</body>
</html>