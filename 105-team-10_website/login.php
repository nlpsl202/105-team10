<?
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="001.ico">
  <title >Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <style>
  	body{
		padding:0;
		margin:0;
		Font-family:Microsoft YaHei;
  	}
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	.bd{
		border-bottom:1px solid #999;
		padding-bottom:50px;
	}
	h3 img
	{
		margin-top:15px;
	}
	.body
	{
		width:1024px;
		margin:0 auto;
		box-shadow:2px 2px 2px rgba(20%,20%,40%,0.6),4px 4px 6px rgba(20%,20%,40%,0.4),6px 6px 12px rgba(20%,20%,40%,0.4);
		border-left:1px solid #CCC;
		border-right:1px solid #CCC;
	}
  </style>
</head>

<body>
<div class="body">

<div class="jumbotron">
  <div class="container text-center">
    <a href="index.html"><img src="title.jpg" alt="title.jpg" style="height:100%;"></a>
  </div>
</div>

<div class="content">
<div class="container">    
<div id="loginbox"  style="margin:80px 0 100px 215px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
<div class="panel panel-info" >
<div class="panel-heading">
<div class="panel-title">登入</div>
<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">忘記密碼?</a></div>
</div>
<div style="padding-top:30px" class="panel-body" >
<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
<form id="loginform" class="form-horizontal" role="form">

<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
</div>

<div style="margin-bottom: 25px" class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
</div>



<div class="input-group">
<div class="checkbox">
<label>
<input id="login-remember" type="checkbox" name="remember" value="1"> 記住我
</label>
</div>
</div>


<div style="margin-top:10px" class="form-group">
<!-- Button -->

<div class="col-sm-12 controls">
<a id="btn-login" href="#" class="btn btn-success">登入  </a>
<a id="btn-fblogin" href="#" class="btn btn-primary">使用Facebook登入</a>

</div>
</div>


<div class="form-group">
<div class="col-md-12 control">
<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
還沒有帳號? 
<a onClick="$('#loginbox').hide(); $('#signupbox').show()">
點擊註冊
</a>
</div>
</div>
</div>    
</form>     



</div>                     
</div>  
</div>
<div id="signupbox" style="display:none;margin:80px 0 100px 215px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info">
<div class="panel-heading">
<div class="panel-title">註冊</div>
<div style="float:right; font-size: 85%; position: relative; top:-10px">
	<a id="signinlink" onclick="$('#signupbox').hide(); $('#loginbox').show()">登入</a>
</div>
</div>  
<div class="panel-body" >
<form id="signupform" class="form-horizontal" role="form">

<div id="signupalert" style="display:none" class="alert alert-danger">
<p>Error:</p>
<span></span>
</div>
<div class="form-group">
<label for="email" class="col-md-3 control-label">Email</label>
<div class="col-md-9">
<input type="text" class="form-control" name="email" placeholder="Email Address">
</div>
</div>

<div class="form-group">
<label for="firstname" class="col-md-3 control-label">姓名</label>
<div class="col-md-9">
<input type="text" class="form-control" name="firstname" placeholder="姓名">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-md-3 control-label">學號</label>
<div class="col-md-9">
<input type="text" class="form-control" name="lastname" placeholder="學號">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-md-3 control-label">電話</label>
<div class="col-md-9">
<input type="text" class="form-control" name="lastname" placeholder="電話">
</div>
</div>
<div class="form-group">
<label for="lastname" class="col-md-3 control-label">生日</label>
<div class="col-md-9">
<input type="text" class="form-control" name="lastname" placeholder="生日">
</div>
</div>
<div class="form-group">
<label for="password" class="col-md-3 control-label">密碼</label>
<div class="col-md-9">
<input type="password" class="form-control" name="passwd" placeholder="Password">
</div>
</div>


<div class="form-group">
<!-- Button -->                                        
<div class="col-md-offset-3 col-md-9">
<button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp 註冊</button>
<span style="margin-left:8px;">or</span>  
</div>
</div>

<div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

<div class="col-md-offset-3 col-md-9">
<button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   使用Facebook註冊</button>
</div>
</div>
</form>
</div>
</div>
</div> 
</div>
</div>

<div class="container-fluid bg-3 text-center" style="background-color:#333; color:#CCC; height:50px;">
	<p style="margin-top:15px;">
		Power by WebDesign
	</p>
</div>

</div>
</body>
</html>