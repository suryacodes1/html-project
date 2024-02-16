<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&family=Mooli&display=swap');

html{
    scroll-behavior: smooth;
}
*{
    margin:0;
    padding:0;
}
body{
    padding-bottom:10px;
}
.center{
    display: flex;
    flex-direction: column;

    align-items: center;
    height: 140vh;
}
.name{
    color:white;
    margin-left:5px;
    font-size:45px;
  
    font-family: 'Kanit', sans-serif;



}
.namem{
    color:white;
    margin-left:5px;
    font-size:45px;
    font-weight: bold;
    
    font-family: 'Mooli', sans-serif;


}
.plus{
    color:white;
    margin-left:5px;
    font-size:45px;
    font-weight: bold;
    
    font-family: 'Mooli', sans-serif;

}
.head{
    
    margin-right: 70%;
    margin-top: 0;
    

}
.log{
    margin-top:0;
    font-size: 50px;
    color: white;
}
.background{
    background: rgba(0, 0, 0, 0.7) url('./backgroundimg/fruit.jpg');
    background-size: cover;
    background-blend-mode: darken;

}
.form{
    margin-top:60px;
    padding-bottom: 20px;

}
.txt_field1{
    padding-top: 30px;
        height: 5px;
        width:300px;
        border-radius: 5px;
        font-size: 14px;
        vertical-align:center;
        padding-bottom: 5px; 
}

 .txt_field{
  color:white;
 }    
#logincss{
    color:blue;
} 
        

.btn{
    padding:6px 10px;
    vertical-align: middle;
    background:none;
    color: white;
    margin: 0 19px;
    border: 1px solid white;
    border-radius: 8px;
    cursor: pointer;
    margin-top:30px;

}
.signup_link{
    color: white;
    margin-top: 30px;
}
      </style>
</head>
<body>
    <?php
    session_start();
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $name = $_SESSION["name"];
    $mn = $_SESSION["mn"];
    $email = $_SESSION["email"];
    ?>
    <div class="container"> <!-- Apply the container class -->
        
    </div>
    <section class="background" >
    <div class="c">
      <div class="center">
        <div class="head"><h1 class="name"><span class="namem">m</span><span>anga</span><span class="plus">+</span></h1>   </div>
          <h1 class="log">Login</h1>
          <form action="update1.php" method="post">
            <!-- username <input type="text" name="umname"><br> -->
            <label  class=" txt_field"for="name">Name:</label>
            <input type="text"  class="txt_field1"name="name" id="name" value="<?php echo "$name" ?>"><br>
            <label  class=" txt_field" for="mn">Mobile no.:</label>
            <input type="text" class="txt_field1"  name="mn" id="mn" value="<?php echo "$mn" ?>"><br>
            <label  class=" txt_field" for="email">E-mail:</label>
            <input type="text"class="txt_field1"   name="email" id="email" value="<?php echo "$email" ?>"><br>
            <input type="submit" class="btn" value="Update">
        </form>
        </div>
  
    </div>
  </section>

</body>
</html>
