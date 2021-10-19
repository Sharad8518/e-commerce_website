<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
*{
margin:0;
padding: 0;
font-family: sans-serif;

}
body{
box-sizing: border-box;
background:#dfe6e9 ;

}


.content{
width:500px;
height: 450px;
margin-top: 30px;
margin-left: 250px;
background:linear-gradient(100deg,#74b9ff ,#00cec9);
position: relative;
}


.content input{
width:50%;
height:40px;
position:relative;
margin-top: 50px;
border:none;
border-bottom: 1px solid #2c3e50;
margin-left: 160px;
border-radius: 5px;
outline:none;
background: transparent;
padding-left: 5px;
font-weight: 500;

}





.content label{

position: absolute;
padding-top: 54px;
padding-left: 20px;
margin-left: -260px;
margin-top:8px ;
font-size: 15px;

color:black;
transition:all 0.5s ease;
}

.content input:focus + label,
.content input:valid + label{
transform: translateY(-20px);
color:pink;
font-size: 13px;
font-weight: 300;
z-index: 10;

}
.content input:not(:placeholder-shown).content input:not(:focus)+label{

    width:50%;
    height:40px;
    position:relative;
    margin-top: 50px;
    margin-left: 160px;
    border-radius: 5px;
    outline:none;
    border:0.1em solid #fff;
    padding-left: 20px;
z-index: 10;



}




.content input:focus {


}



.content input[type="submit"]{

width:100px;
text-align: center;
margin-left: 350px;
margin-top: 20px;
border:1px solid #000;
background:linen ;
box-shadow: 0px  10px 15px 0px rgba(0, 0, 0, 0.5);
}
.content #name4{
width:100px;
height:40px;
line-height: 40px;
background: darkcyan;
}


.box1 h1{
margin-left: 395px;
margin-top: 40px;



}
.boxcontainer{
width:200px;
height:350px;
background: linen;
margin-top: -400px;
margin-left: 150px;
box-sizing: border-box;
overflow: hidden;
box-shadow: 0px 10px 15px 0px rgba(0, 0, 0, 0.5);
position:absolute;
}
.boxcontainer h1{
text-align: center;
font-size: 25px;
margin-top: 20px;
border-bottom: 1px solid black;
}
.boxcontainer p{
font-size: 16px;
font-style: italic;
text-align: center;
margin-top: 20px;
}


.boxcontainer i{

margin-left:100px;
margin-top: 60px;
font-size: 50px;
animation: pavan 5s linear infinite alternate;
}
@keyframes pavan{

from{
transform: rotate(360deg);

}



}

.boxfont i{

    margin-left:30px;
margin-top: -20px;
font-size: 100px;
animation: pavan1 5s linear infinite alternate;


}
@keyframes pavan1{

from{
transform: rotate(360deg);

}



}
.boxfont1 i{

margin-left:100px;
margin-top: -20px;
font-size: 65px;
animation: pavan2 5s linear infinite alternate;


}
@keyframes pavan2{

from{
transform: rotate(360deg);

}



}
.box2{
width:100%;
height:50px;
margin:0;
background: cornflowerblue;
}
.box2 ul{
text-align: center;
display:inline-flex;
margin-top: 20px;
margin-left:550px;
list-style: none;
}
.box2 ul li{
margin-left: 20px;


}
.box2 ul li a{
    text-decoration: none;
    color:white;
}
.box2 ul li a i{

margin-right: 5px;

}
.box2 ul li a:hover{


color:pink;

}


</style>
</head>
<body>
<div class="box2">
<ul>
    <li active="active"><a href=""><i class="fa fa-user-circle" aria-hidden="true"></i>Admin Panel</a></li>
<li><a href=""><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
<li><a href=""><i class="fa fa-database" aria-hidden="true"></i>Dashboard</a></li>
<li><a href=""><i class="fa fa-share" aria-hidden="true"></i>Logout</a></li>

</ul>
</div>
<div class="box1">
<h1>Admin Panel</h1>
</div>
    <div class=content>
 <div class="wrap">
     <form action="" mothed="POST" enctype="multipart/form-data"> 

<input type="text" id="name1" name="pname" required>
<label for="name1">Product Name</label>

<input type="text" id="name2" name="prname" required>
<label for="name2">Product Price</label>

<input type="text" id="name3" name="dname" required>
<label for="name3">Product Detail</label><br>

<input type="file" id="name4" name="uploaded">

<input type="submit">
</form>
 </div>
</div>
<div class="boxcontainer">
    <h1>Welcome</h1>
    <p>Admin</p>
<i class="fa fa-cog" aria-hidden="true" id="stting"></i>
<div class="boxfont">
<i class="fa fa-cog" aria-hidden="true"></i>

</div>
<div class="boxfont1">
<i class="fa fa-cog" aria-hidden="true"></i>

</div>
</div>




<?php
include("shoppconnection.php");
error_reporting(0);

$productname = $_POST["pname"];

$productprices = $_POST["prname"];

$productdiatel = $_POST["dname"];

$file_name =$_FILES["uploaded"]["name"];

 $temp_name =$_FILES["uploaded"]["tmp_name"];

 $folder  ="imgesshop/".$file_name ;


move_uploaded_file($folder,$file_name );


$query = "INSERT INTO CARD VALUE('$productname','$productprices','$productdiate','$folder')";


$data =mysqli_query($conn,$query);


if($data){

echo"data insert into databse";




}
else{

echo"data not insert";


}


?>





</body>

</html>