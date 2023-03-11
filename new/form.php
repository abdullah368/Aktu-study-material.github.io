<?php
include "header.php"
?>
<form action="form.php" method="post" style="height: 300px; width: 200px;  text-align: center; margin-left: 25%;">
First Name<input type="text" placeholder="first Name" name="firstname">
Last Name
<input type="text" placeholder="last Name" name="lastname">
  
Email Id<input type="text" placeholder="Email" name="email">
  
Phone Number<input type="text" placeholder=" Phone Number" name="number">
<button type="submit" style="margin: 2px;"> Submit</button>

</form>

<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];

$conn = new mysqli('localhost', 'root', '', 'form');
if($conn->connect_error)
{
    echo "connection Faild";
}
else {
       // if($email != "" || $number!= "")
        $stmt = $conn->prepare("insert into shah(firstname, lastname, email, number) values (?,?,?,?)");
        $stmt->bind_param("sssi", $firstname, $lastname, $email, $number);
        $stmt->execute();
        echo
            "sucessfully connected";
        $stmt->close();
        $conn->close();  
}
include "footer.php"
?>