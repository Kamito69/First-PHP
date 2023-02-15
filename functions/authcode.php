<?php
    session_start();
    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    if(isset($_POST['register_input'])){
        $Username = mysqli_real_escape_string($con, $_POST['Username']);
        $Password = mysqli_real_escape_string($con, $_POST['Password']);
        $Name = mysqli_real_escape_string($con, $_POST['Name']);
        $Address = mysqli_real_escape_string($con, $_POST['Address']);
        $Phonenumber = mysqli_real_escape_string($con, $_POST['Phonenumber']);
        $Email = mysqli_real_escape_string($con, $_POST['Email']);


        $check_email_query = "SELECT Email FROM users WHERE Email = '$Email'";
        $check_email_query_run = mysqli_query($con, $check_email_query);

        if(mysqli_num_rows($check_email_query_run) > 0){
            $_SESSION['message'] = "email đã được sử dụng";
            header('location: ../register.php');
        }else{
            $insert_query = "INSERT INTO users (Username, Password, Name, Address, Phonenumber, Email) VALUES ('$Username','$Password','$Name','$Address','$Phonenumber','$Email')";
            $insert_query_run = mysqli_query($con, $insert_query);
    
            if($insert_query_run){
                $_SESSION['message'] = "đăng ký thành công";
                header('location: ../login.php');
            }else{
                $_SESSION['message'] = "đăng ký không thành công";
                header('location: ../register.php');
            }
        }
    }
    else if(isset($_POST['login_input'])){
        $Username = mysqli_real_escape_string($con, $_POST['Username']);
        $Password = mysqli_real_escape_string($con, $_POST['Password']);

        $login_query = "SELECT * FROM users where Username = '$Username' AND Password = '$Password'";
        $login_query_run = mysqli_query($con, $login_query);

        if(mysqli_num_rows($login_query_run) > 0){
            $_SESSION['auth'] = true;

            $userdate = mysqli_fetch_array($login_query_run);
            $uid = $userdate['MaTK'];
            $uname = $userdate['Name'];
            $uemail = $userdate['Email'];
            $admin = $userdate['admin'];

            $_SESSION['auth_user'] = [
                'user_id' => $uid,
                'Name' => $uname,
                'Email' => $uemail
            ];
            $_SESSION['admin'] = $admin;

            if($admin == 1){
                redirect("../admin/index.php", "Chào admin");
            }else{
                redirect("../index.php", "đăng nhập thành công");
            }

        }else{
            redirect("../login.php", "đăng nhập chưa thành công");
        }
    }
?>