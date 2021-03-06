<?php
error_reporting ( E_ALL );
$path = "../";

require_once ($path . 'template/header.php');
require_once ($path . 'view/Database.php');
require_once ($path . 'controller/UserController.php');
require_once ($path . 'model/UserModel.php');
require_once ($path . 'view/UserView.php');

$main = $path . 'template/main.php';
$model = new UserModel ();
$controller = new UserController ( $model );
$view = new UserView ( $controller, $model );
// $output=$view->output();
// while($single=$output->fetch_assoc()){
// echo $single["user_vorname"];
// }

?>

<div class="col-xs-12 col-sm-12">
	<div class="content-wrapper">
		<h3>Registrieren</h3>
		<div class="col-xs-12 nopadding-left nopadding-right ">


			<div class="col-xs-4 col-sm-2 ">
				<img class="img-rounded img-responsive" src="++path++image/user.png"
					alt="Inserat logo" />
			</div>
			<div class="padding-top col-xs-12 col-sm-12">
			<h4>Kontaktdaten</h4>
				<form class="form-horizontal" role="form">
				<div class="form-group">
						<label class="control-label col-sm-3" for="email">Benutzernamen</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="name">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="email">Adresse</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="adress">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="email">PLZ</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="plz">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="email">Email:</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Password:</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="pwd" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="pwd">Password wiederholen:</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="pwdreply" placeholder="">
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-10">
							<div class="btn-group">
								<button id="register" type="button" class="btn btn-default">Registrieren</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<?php

include ($path . 'template/footer.php');
?>
