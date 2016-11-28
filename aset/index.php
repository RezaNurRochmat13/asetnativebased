
<html>
<head>
<title>AINO | Human Resource</title>
<link rel="stylesheet" type="text/css" href="assets/css/style_login.css" />
<link href='' rel='SHORTCUT ICON'/>
<link type="text/css" rel="stylesheet" href="assets/css/font-awesome.css"/>
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css"/>
  <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css"/>
 
  <script type="text/javascript" src="datepicker/datetimepicker_css.js"></script>
<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
    alert("Anda belum mengisikan Username");
    form.username.focus();
    return (false);}
if (form.password.value == ""){
    alert("Anda belum mengisikan Password");
    form.password.focus();
    return (false);}
    return (true);}
</script>

</head>
<body OnLoad="document.login.username.focus();">
<div id="main">
<div id="footer" style="padding-left:40px;padding-right:40px;margin-top:120px;margin-bottom:20px">
	<center><img src="images/logo_aino2.png"></center>
	<br>
	<form action="login.php" method="post">
		<div class="control-group">
		   <div class="controls">
			<div class="input-prepend">
			  <span class="add-on" style="background-color:#04c"><i class="icon-user icon-large"></i></span>
			  <input class="span2 " id="inputIcon" type="text" name="username" style="width:200px" id="input" placeholder="Username">
			</div>
		  </div>
		  <br/>
		  <div class="controls">
			<div class="input-prepend">
			  <span class="add-on" style="background-color:#04c"><i class="icon-lock icon-large"></i></span>
			  <input class="span2" id="inputIcon" type="password" name="password" style="width:200px" id="input" placeholder="Password">
			</div>
		  </div>
		  <br/>
		  <div class="controls" style="text-align:center">
		  <input name="submit" type="submit" value=" Login " id="btn" class="btn btn-primary" align="absmiddle" />
			</div>
		</div>	
    </form>
</div>

<div id="vertical_effect">&nbsp;</div>
</div>
</body>
</html>