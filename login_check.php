<?php
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    $con = new mysqli("localhost", "root", "", "user_info") or die("Failed");

    $stmt = $con->prepare("select * from info where gmail = ?");
    $stmt->bind_param("s", $gmail);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0){

        $data = $stmt_result->fetch_assoc();
        
        if($data['password'] === $password){

            header("Location: ./courses_main.php");
            exit();
            echo "<h1>Login successful!</h1>";
        }
        else{
            header("Location: ./login1_fail.php");
            $message="error";
            // echo "Wrong password!";
        }
    }
    else{
        $message="error";
        header("Location: ./login1_fail.php");
        // echo "Wrong email!";
    }

?>
