<?php
$conn = mysqli_connect("localhost","root","openmysql","admission");
// if($conn){
//     echo ('<script>alert("Connection Established")</script>');
// }
// else{
//     echo "<script>alert('Failure')</script>";
// }

if(isset($_POST['submit'])){
    $name = $_POST['x'];
    $pwd = $_POST['y'];
    $sql = "select * from login where pwd='$pwd' and name_= '$name';";
    if($result = mysqli_query($conn,$sql)){
        if(mysqli_num_rows($result)>0)
        {
        echo ('<script>alert("Welcome")</script>');  
        include 'home.html';}  
        else
        echo "<script>alert('Imposter!!')</script>";
    }

}
?>