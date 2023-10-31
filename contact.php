<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact us</title>
</head>
<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="Index.php" class="abc">Home</a></li>
                <li><a href="About.php" class="abc">About us</a></li>
                <li><a href="Contact.php" class="abc">Contact Us</a></li>
               
            </ul>
        </nav>
    </div>
    <main>
        <img src="sideimage.png" alt="" id="sideimage">
        <div class="container">
        <form action="" method="post">
           
            <input type="text" name="name" id="name" class="input" placeholder="Enter your name" required><br>
            
            <input type="number" name="number" id="number" class="input" placeholder="Enter your mobile number" required><br>
            
            <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required><br>
            <!-- <input type="submit" value="Submit"> -->
            <input type="submit" name="submit" id="submit">
        </form>
        </div>
    </main>
    
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
       {
        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];

        $conn= mysqli_connect("sql206.infinityfree.com","if0_35319906","gSbqYNfQN6pB","if0_35319906_g");
        if(!$conn)
        {
            die("Connection error");
        }
        $sql="INSERT INTO `form` (`name`, `number`, `email`) VALUES ('$name', '$number', '$email');";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo"Succesfully entered data";

        }
        else{
            echo 'not inserted';
        }
       }

    ?>
</body>
</html>