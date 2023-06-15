<?php
    //db variables

    $user = 'root';
    $pass = '';
    $db_name = 'user_info';

    //variables

    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $street=$_POST['street'];
    $area=$_POST['area'];
    $landmark=$_POST['landmark'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $date=$_POST['date'];
    $number=$_POST['number'];

    if ($name === NULL){
        echo "name is null";
    }

    //db connecton

    $user = new mysqli ('localhost', $user, $pass, $db_name) or die("Failed");
    echo "db connection succesfull!";

    // Check if gmail already exists

    $search = $user->prepare("select * from info where gmail = ?");
    $search->bind_param("s", $gmail);
    $search->execute();
    $data = $search->get_result();

    if ($data->num_rows > 0){
        header("Location: ./signup_exists.php");
    }

    else{
        $push_db = $user->prepare("insert into info(
        name, gmail, password, confirmpassword,
        street, area, landmark, pincode, city, state,
        date, number) values(?,?,?,?,?,?,?,?,?,?,?,?)");

        $push_db->bind_param ("sssssssisssi", $name, $gmail, $password, $confirmpassword,
        $street, $area, $landmark, $pincode, $city, $state,
        $date, $number);

        $push_db->execute();
        $push_db->close();
        header("Location: ./courses_main.php");
    }

    $user->close();

?>  