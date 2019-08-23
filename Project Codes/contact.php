<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nobonita</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><div class="header">
    <div class="logo">
      <h1><a href="index.php"><img src="Image/2.jpg" height="100" width="100" ; alt=""></a></h1>
    </div>
  </div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      
      <a class="nav-link" href="index.php">Home &ensp;<span class="sr-only"></span></a></li>
        <a class="nav-link" href="AboutUS.php">About Us&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="contact.php">Contact Us&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="">Products&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="">Health Tips&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="">Calender&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="registration.php">Join Us&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="login.php?logout='1'" style="color : red;">Logout&ensp;&ensp;&emsp;&emsp;<span class="sr-only">(current)</span></a></li>
      </ul>
</div>
</nav>

  </div>
    <div>
<div style="height:500px; width:100%; margin:auto; margin-top:0px; margin-bottom:125px; background-color:#f000; border:2px solid #f000; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">


  <div   class="col span_2_of_3"> <div class="contact-form" style="padding-left:100px;">
            <img src="Image/contact.jpg" height="100px" width="300px" align="center" />
  
    <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"  style="vertical-align:middle"> Name:</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>



<tr><td class="lefttd"  style="vertical-align:middle">E-Mail</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd"  style="vertical-align:middle">Mobile No</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>

<tr><td class="lefttd"  style="vertical-align:middle">Subject</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr></table>

</div>
</div>
    
      </div>
</form>
        </div>
         </div> 
         </div>
        
<!--

<?php
if(isset($_POST["sbmt"])) 
{
  
  $cn=makeconnection();     

      $s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
      
      
  $q=mysqli_query($cn,$s);
  mysqli_close($cn);
  if($q>0)
  {
  echo "<script>alert('Record Save');</script>";
  }
  else
  {echo "<script>alert('Saving Record Failed');</script>";
  }
    
    } 
  

?> 
-->

 <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
  <div class="f_nav">


   <ul >
       <li class="active" > <a  href="index.php">Home </a></li>
       <li class="active" > <a  href="AboutUS.php">About Us</a></li>
       <li class="active"  > <a  href="contact.php">Contact Us</a></li>
       <li class="active" > <a  href="">Products</li>
       <li class="active" > <a  href="">Health Tips </a></li>
       <li class="active" > <a  href="">Calender</a></li>
       <li class="active" > <a  href="registration.php">Join Us</a></li>
        <li ><a  href="login.php?logout='1'" style="color : red;">Logout</a></li>
      </ul>
 




</div>
<div class="copy" >
      <p class="title"><br><br>©CSE299 Group 6</p>
    </div>
  <div class="clear"></div>
</div>
</div>
</div>
<!-- Footer end -->


</body>
</html>


<style>
  .ftr-bg{
  background: #f73c80;
  border-top: 1px solid rgba(214, 195, 167, 0.34);
   position: ;
  left: 0;
  bottom: 0;
  width: 100%;
}
.footer{
  padding:3% 0;
}
.f_nav{
  float:left;
}
.f_nav li{
  display: inline-block;
}
.f_nav li.active a{
  color:#ffffff;
  background: rgb(219,60,76);
  background: -moz-linear-gradient(top,  rgba(219,60,76,1) 0%, rgba(197,54,68,1) 56%, rgba(162,44,56,1) 99%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(219,60,76,1)), color-stop(56%,rgba(197,54,68,1)), color-stop(99%,rgba(162,44,56,1)));
  background: -webkit-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -o-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -ms-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: linear-gradient(to bottom,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3c4c', endColorstr='#a22c38',GradientType=0 );
}
.f_nav li a{
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  display:block;
  padding: 8px 18px;
  color: #805752;
  font-size: 0.8125em;
}
.f_nav li a:hover{
  color:#ffffff;
  background: rgb(219,60,76);
  background: -moz-linear-gradient(top,  rgba(219,60,76,1) 0%, rgba(197,54,68,1) 56%, rgba(162,44,56,1) 99%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(219,60,76,1)), color-stop(56%,rgba(197,54,68,1)), color-stop(99%,rgba(162,44,56,1)));
  background: -webkit-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -o-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: -ms-linear-gradient(top,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  background: linear-gradient(to bottom,  rgba(219,60,76,1) 0%,rgba(197,54,68,1) 56%,rgba(162,44,56,1) 99%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#db3c4c', endColorstr='#a22c38',GradientType=0 );
  -webkit-transition: 0.9s;
  -moz-transition: 0.9s;
  -o-transition: 0.9s;
}

</style>
