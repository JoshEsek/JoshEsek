<?php include ('includes/database.php'); ?>
<?php
    if (isset($_POST['save'])) {

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];

        $location_name = $_POST['locname'];
        $location_address = $_POST['locaddress'];

        $remote = $_POST['remote'];
        $greet = $_POST['greet'];
        $selfservice = $_POST['selfservice'];
        $qrcode = $_POST['qrcode'];

        $messaging = $_POST['messaging'];
        $inperson = $_POST['inperson'];
        $tv = $_POST['tv'];

        $desk_query = "SELECT id FROM desks";
        $desk_query_result = mysqli_query($connection, $desk_query);
        $desk_query_content = mysqli_fetch_all($desk_query_result);
        $selectedDesk = $desk_query_content[array_rand($desk_query_content)][0];


        $query = query("INSERT INTO users (firstname,lastname,email,password,phone,organisation,locname,locaddress,remote,greet,selfservice,qrcode,messaging,inperson,tv,desk) values ('$firstname','$lastname','$email','$password','$phone','$company','$location_name','$location_address','$remote','$greet','$selfservice','$qrcode','$messaging','$inperson','$tv','$selectedDesk')");

        confirm($query);

        $user =  $email;
        $pass =  $password;

        $query = query("SELECT * FROM users WHERE  email='$user' && password='$pass'");
        confirm($query);

        $row = fetch_array($query);

        if (mysqli_num_rows($query) > 0) {

            $seconds = 120 + time () ;
            setcookie(loggedin, date ("F jS - a "), $seconds);
            session_start();
            session_regenerate_id();
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['firstName'] = $row['firstname'];
            $_SESSION['lastName'] = $row['lastname'];
            $_SESSION['fullName'] = $row['firstname'] . ' ' . $row['lastname'];
            $_SESSION['deskId'] = $row['desk'];
            header('location:dashboard/index.php');
            session_write_close();
            exit();
        } else {
            //echo "<p style='color: red'><b>Wrong Login Details</b></p><br>";
            header('location:index.php?invalidLogin');
            session_write_close();      
        }

        //header('location:index.php?success');
    }
?>