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
		<h3>Inserat</h3>
		<div class="col-xs-12 nopadding-left nopadding-right ">


			<div class="col-xs-4 col-sm-2 ">
				<img class="img-rounded img-responsive" src="++path++image/user.png"
					alt="Inserat logo" />
			</div>
			<div class="padding-top col-xs-12 col-sm-12">
				<form class="form-horizontal">
					<fieldset>

						<!-- Form Name -->
						<legend>Inserat</legend>

						<!-- File Button -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="filebutton">File
								Button</label>
							<div class="col-md-4">
								<input id="filebutton" name="filebutton" class="input-file"
									type="file">
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-md-4 control-label" for="Titel">Titel</label>
							<div class="col-md-4">
								<input id="Titel" name="Titel" placeholder=""
									class="form-control input-md" type="text">

							</div>
						</div>

						<!-- Textarea -->
						<div class="form-group">
							<label class="col-md-4 control-label" for="textarea">Text Area</label>
							<div class="col-md-4">
								<textarea class="form-control" id="textarea" name="textarea">default text</textarea>
							</div>
						</div>

					</fieldset>
				</form>
			</div>
		</div>

	</div>
</div>
<?php

include ($path . 'template/footer.php');
?>
