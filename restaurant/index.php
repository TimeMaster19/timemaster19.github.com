<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../rFinal/css/bootstrap.min.css" rel="stylesheet">
	<link href="../rFinal/css/bootstrap-theme.css" rel="stylesheet">

	<script src="../rFinal/js/jquery-3.3.1.min.js"></script>
	<script src="../rFinal/js/bootstrap.min.js"></script>
	<title>Iniciar sesión</title>
</head>
<body>

	<!--<div class="container">
		<form role="form" method="POST" action="login.php" autocomplete="off">
			<input type="text" name="usuario"><br>
			<input type="password" name="passwordd"><br>
			<button type="submit">LogIn Button</button><br>
		</form>
	</div>
-->
	<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="login.php" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="passwordd" type="password" class="form-control" name="passwordd" placeholder="password" required>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
								</div>
							</div>
							
						</form>
					</div>                     
				</div>  
			</div>
		</div>
</body>
</html>