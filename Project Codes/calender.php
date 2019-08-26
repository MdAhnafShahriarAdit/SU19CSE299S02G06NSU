<!doctype html>
<html lang="en">
  <head>
    <title  > NOBONI </title>

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





     <div>
       
       <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label " for="date">
       Date
      </label>
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="textarea">
       Personal Notes
      </label>
      <textarea class="form-control" cols="40" id="textarea" name="textarea" rows="10"></textarea>
      <span class="help-block" id="hint_textarea">
       Your notes will be  secured and you can only see it.
      </span>
     </div>
     <div class="form-group ">
      <label class="control-label " for="select">
       Select a Choice
      </label>
      <select class="select form-control" id="select" name="select">
       <option value="Regular">
        Regular
       </option>
       <option value="Irregular ">
        Irregular
       </option>
       <option value="Miss">
        Miss
       </option>
      </select>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>



     </div>











</head>
</html>


















    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <script defer src="js/fontawesome-all.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


    


      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
  <div class="f_nav">


   <ul >
       <li class="active"  > <a  href="index.php">Home </a></li>
       <li class="active"  > <a  href="AboutUS.php">About Us</a></li>
       <li class="active"  > <a  href="contact.php">Contact Us</a></li>
       <li class="active"  > <a  href="">Products</li>
       <li class="active" > <a  href="">Health Tips </a></li>
       <li class="active"  > <a  href="">Calender</a></li>
       <li class="active" > <a  href="registration.php">Join Us</a></li>
        <li class="active"  ><a  href="login.php?logout='1'" style="color : red;">Logout</a></li>
      </ul>
 




</div>
<div class="copy">
      <p class="title"><br><br>©CSE299 Group 6</p>
    </div>
  <div class="clear"></div>
</div>
</div>
</div>


  </body>
</html>

<style>
  .ftr-bg{
  background: #f73c80;
  border-top: 1px solid rgba(214, 195, 167, 0.34);
   position: fixed ;
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


