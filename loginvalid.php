<?php

require "config.php";

$uname = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM phpauth WHERE username='$uname'";
$result = mysqli_query($conn, $query);

 if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 {
    if ($row['password'] == $pass) {
        echo "<script>alert('Login success');
        window.location.href='home.php'</script>;";
    } else {
        echo "<script>alert('Invalid password');
        window.location.href='login.php'</script>";
    }
} else {
    echo "<script>alert('Invalid username');
    window.location.href='login.php'</script>";
}

?>
