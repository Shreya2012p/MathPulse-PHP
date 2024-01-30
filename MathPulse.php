<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR APP ❤️ </title>
    <style>
        *{
    margin:0;
    padding:0;
    font-family:'Poppins',sans-serif;
    box-sizing: border-box;
}
.container{
    width:100%;
    height:100vh;
    background:rgb(60, 104, 67);
    display: flex;
    align-items:center ;
    justify-content:center;
    border:solid white;
}
.answer{
    background:black;
    padding :60px;
    border-radius: 30px;
    border:solid white;
    border-style: double;

}
form input[type="text"]{
    width:270px;
    height:40px;
    border:solid;
    background-color:white;
    color:green;
    display:block;
    border:solid;
    font-size:20px;
    font-style:italic;
    font-weight: normal;
    outline:none;
    border-radius:10px;
    box-shadow:green 12px 3px;
    
}
form input[type="text"]:hover{
    border:solid green;
    border:solid white;
    border-style: double;
}
select{
    width:270px;
    height:40px;
    font-size:20px;
    border:solid green;
    border-radius:10px;
    box-shadow:green 12px 3px;
    border-style: double;
}
button{
    width:270px;
    height:50px;
    font-size:20px;
    background-color:green;
    border:solid;
    outline:none;
    cursor:pointer;
    box-shadow:green 12px 3px;
    border-radius:10px;
    border:solid black;
    border-style: double ;
}
.hero{
 color:green;
 text-decoration: underline;

}
.footer{
    color:green;
}
.ans{
    color:white;
    font-size:20px;
    font-style:italic;
    font-weight: bold;
}
</style>
</head>
<body>
 <div class="container">
        <form action="" method="GET">
            <div class="answer">
<h1 class="hero">PHP CALCULATOR</h1>
<br><br>
<input type="text" name="num1" placeholder="Enter First Number">
<br>
<br>
<input type="text" name="num2" placeholder="Enter Second Number">
<br>
<br>
<select name="operator" id="">
    <option>None</option>
    <option>Addition</option>
    <option>Subtration</option>
    <option>Multiplication</option>
    <option>Division</option>
</select>
<br>
<br>
<br>
<button type="submit" value="submit" name="submit">Calculate</button>
<br>
<br>
<br>
<div class="ans">
<?php
            if(isset($_GET['submit'])){
                $result1=$_GET['num1'];
                $result2=$_GET['num2'];
                $operator=$_GET['operator'];
            switch($operator){
                case"None":
                    echo"You need to select a Method!!";
                break;
                case"Addition":
                    echo "The required answer is : \t ";
                    echo $result1 + $result2;
                break;
                case"Subtration":
                    echo "The required answer is : \t ";
                    echo $result1 - $result2;
                break;
                case"Multiplication":
                    echo "The required answer is : \t ";
                    echo $result1 * $result2;
                break;
                case"Division":
                    echo "The required answer is : \t ";
                    echo $result1 / $result2;
                break;
                }
            }
            ?>
<br>
<br><br>
</div>
<h4 class="footer">Made by ❤️ K.G.SHREYA<span>
</form>
</div>
</body>
</html>
