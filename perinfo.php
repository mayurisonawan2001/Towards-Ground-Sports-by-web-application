# Towards-Ground-Sports-by-web-application
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
    font: optional;
}

.container{
    max-width: 80%; 
    padding: 40px; 
    margin: auto;
}

.container h1 {
    text-align: center;
    font-size: 50px;
    font color: white;
}

p{
    font-size: 30px;
    text-align: center;
    color:white;
}

input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}
</style>
<body>
    <img class="bg" src="image/iitdsports111.jpg" alt="personal information">
    <div class="container">
        <p>Enter your details and submit this form to confirm your participation. </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="add_per_info.php">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="city" id="city" placeholder="Enter your city">
            <input type="text" name="address" id="address" placeholder="Enter your address">
            <input type="text" name="pincode" id="pincode" placeholder="Enter your pincode">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="sport" name="sport" id="sport" placeholder="Enter your sport">
            
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
