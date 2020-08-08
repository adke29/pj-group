<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'?>
    <title>Register</title>
    <link rel="stylesheet" href="./styles/signup.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <main>
     <header>
        <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST"){
                include 'conn.php';
                $name = $_POST['name'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $ref = $_POST['ref'];
                $sql = "INSERT INTO customer(name,username,email,password,ref) VALUE ('$name','$username','$email','$password','$ref')";
                if(mysqli_query($conn, $sql)) {
                    echo "<h1>Succesfully Registered!</h1>";
                }else {
                    echo "<h1>Failed to Register</h1><h2>Please Try Again Later</h2>";
                }
                $is_post = TRUE;
             }else{
                 $is_post =FALSE;
                 echo "<h1>You Have Not Fill The Form</h1>";
             }
            ?>
    </header>
    <div class="cont">
        <?php 
        if($is_post){
            echo"
            <h2>Selamat Datang $name</h2>
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td>$username</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>$username</td>
                </tr>
            </table>";    
        }else{
            echo"
                <h2>Silahkan Daftar di sini</h2>
                <a href='./signin.php?up=1' ><button>Sign Up</button></a>            
                ";
        }
            ?>
        
    </div>




    </main>
</body>
</html>