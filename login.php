<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=input, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="action.php" method='post'>
    <input type="text" name='x'>
    <input type="password" name='y'>
    <input type="submit" value="submit" name='submit'>
</form>
<!-- <?php
$conn = mysqli_connect("localhost","root","openmysql","admission");
// if($conn){
//     echo ('<script>alert("Connection Established")</script>');
// }
// else{
//     echo "<script>alert('Failure')</script>";
// }

// if(isset($_POST['submit'])){
//     $name = $_POST['x'];
//     $pwd = $_POST['y'];
//     $sql = "select * from login where pwd='$pwd' and name_= '$name';";
//     if($result = mysqli_query($conn,$sql)){
//         if(mysqli_num_rows($result)>0)
//         echo ('<script>alert("Welcome")</script>');    
//         else
//         echo "<script>alert('Imposter!!')</script>";
//     }

// }
?> -->
</body>
</html>