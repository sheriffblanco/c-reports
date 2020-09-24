<?php 
    session_start();
    $con = mysqli_connect('localhost', 'root');
    if($con){
        echo "connection successfully";
    }else{
        echo "no connection";
    }
    $db = mysqli_select_db($con, 'c-reports');

    if(isset($_POST['submit'])){
        $uname = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from tbl_registration where user = 'uname' and pass = '$password' ";
        $query = mysqli_query($con, $sql);

        $row = mysql_num_rows(){
            if($row == 1){
                echo "login successfully";
                %_SESSION['user'] = $username;
                header('location:adminpage.php');
            }else{
                echo "login failed";
                header('location:crisislogin.php')
            } 
            }
        }
    }
?>