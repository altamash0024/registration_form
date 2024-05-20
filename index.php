
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
</head>
<link rel="stylesheet" href="style.css">
<body background="aa.jpg">
    
    <div class="con">
        <center>

        <h1><p class="smsg">registration form</p></h1>

        <form action="index.php" method="POST" name="f1">
            <label>Enter Name</label>
            <input type="text" name="name" id="name" ><br>
            <label>Enter Age</label>
            <input type="text" name="age" id="age" ><br>
            <label>Enter Gender</label>
            <input type="text" name="gender" id="gender"><br>
            <label>Enter Email</label>
            <input type="email" name="email" id="email" ><br>
            <label>Enter number</label>
            <input type="phone" name="phone" id="phone" ><br>
            <button class="btn" name="submit">submit</button>
        </form>
    </center>

    </div>
    

</body>

</html>

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    $conn=mysqli_connect('localhost','root',"",'data_table');
    

    $sql="INSERT INTO information(name,age,gender,email,phone) 
    VALUES('$name','$age','$gender','$email','$phone')";


if(mysqli_query($conn,$sql))
{
    echo "<script>alert('inserted records')</script>";
}
else{
    echo "error..Not inserted";
}
}

?>