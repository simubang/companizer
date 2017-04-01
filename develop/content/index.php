<?php
error_reporting(E_ALL);

$path = "../";

require_once ($path . 'template/header.php');
require_once ($path . 'view/Database.php');
require_once ($path . 'controller/UserController.php');
require_once ($path . 'model/UserModel.php');
require_once ($path . 'view/UserView.php');

$main = $path . 'template/main.php';
$model = new UserModel();
$controller = new UserController($model);
$view = new UserView($controller, $model);
// $output=$view->output();
// while($single=$output->fetch_assoc()){
// echo $single["user_vorname"];
// }

?>
<div
	class="col-sm-12 col-xs-12 nopadding-left nopadding-right padding-bot-20 ">
	<div class="col-sm-8 col-xs-8 pull-left">

		<select id="categorie-drop" class="col-sm-12 col-xs-12 "
			style="width: 100%" placeholder="asdf">
			<option></option>
			<option value="ActionScript">ActionScript</option>
			<option value="AppleScript">AppleScript</option>
			<option value="Asp">Asp</option>
			<option value="BASIC">BASIC</option>
			<option value="C">C</option>
			<option value="C++">C++</option>
			<option value="Clojure">Clojure</option>
			<option value="COBOL">COBOL</option>
			<option value="ColdFusion">ColdFusion</option>
			<option value="Erlang">Erlang</option>
			<option value="Fortran">Fortran</option>
			<option value="Groovy">Groovy</option>
			<option value="Haskell">Haskell</option>
			<option value="Java">Java</option>
			<option value="JavaScript">JavaScript</option>
			<option value="Lisp">Lisp</option>
			<option value="Perl">Perl</option>
			<option value="PHP">PHP</option>
			<option value="Python">Python</option>
			<option value="Ruby">Ruby</option>
			<option value="Scala">Scala</option>
			<option value="Scheme">Scheme</option>
			<option value="C">C</option>
			<option value="C++">C++</option>
			<option value="Clojure">Clojure</option>
			<option value="COBOL">COBOL</option>
			<option value="ColdFusion">ColdFusion</option>
			<option value="Erlang">Erlang</option>
			<option value="Fortran">Fortran</option>
			<option value="Groovy">Groovy</option>
			<option value="Haskell">Haskell</option>
			<option value="Java">Java</option>
			<option value="JavaScript">JavaScript</option>
			<option value="Lisp">Lisp</option>
			<option value="Perl">Perl</option>
			<option value="PHP">PHP</option>
			<option value="Python">Python</option>
			<option value="Ruby">Ruby</option>
			<option value="Scala">Scala</option>
			<option value="Scheme">Scheme</option>
			<option value="C">C</option>
			<option value="C++">C++</option>
			<option value="Clojure">Clojure</option>
			<option value="COBOL">COBOL</option>
			<option value="ColdFusion">ColdFusion</option>
			<option value="Erlang">Erlang</option>
			<option value="Fortran">Fortran</option>
			<option value="Groovy">Groovy</option>
			<option value="Haskell">Haskell</option>
			<option value="Java">Java</option>
			<option value="JavaScript">JavaScript</option>
			<option value="Lisp">Lisp</option>
			<option value="Perl">Perl</option>
			<option value="PHP">PHP</option>
			<option value="Python">Python</option>
			<option value="Ruby">Ruby</option>
			<option value="Scala">Scala</option>
			<option value="Scheme">Scheme</option>
			<option value="C">C</option>
			<option value="C++">C++</option>
			<option value="Clojure">Clojure</option>
			<option value="COBOL">COBOL</option>
			<option value="ColdFusion">ColdFusion</option>
			<option value="Erlang">Erlang</option>
			<option value="Fortran">Fortran</option>
			<option value="Groovy">Groovy</option>
			<option value="Haskell">Haskell</option>
			<option value="Java">Java</option>

		</select>
	</div>
	<div class="col-xs-3 col-sm-3"><button>Suchen</button></div>
</div>
<div class="col-xs-12 col-sm-12">
<div class="content-wrapper">
	<h3>Top Inserate</h3>
	<div class="col-xs-12 nopadding-left nopadding-right inserat-wrapper">
	<a class="inseratlink" href="/inserat?id=1234">
	<div class="col-xs-12"><h4>Inserat</h4></div>

	<div class="col-xs-4 col-sm-2 "><img class="img-rounded img-responsive" src="++path++image/user.png" alt="Inserat logo" /></div>
	<div class="col-xs-8 col-sm-3 inserat-details" style="padding-top: 0px; margin-bottom: -40px;">
		<p>asdfawe faewfafa faf </p>
		</div>
	<div class="col-xs-12 col-sm-7 inserat-content">
	<p>asdfas af aefafaew faef awfa wfaf awef awf awf awf awef aweaw fweafawfafa ef awfeawef awef</p>
	</div>
	
	</div>
	</a>
		<div class="col-xs-12 nopadding-left nopadding-right inserat-wrapper">
	
	<div class="col-xs-12"><h4>Inserat</h4></div>
	<div class="col-xs-4 col-sm-2 "><img class="img-rounded img-responsive" src="++path++image/user.png" alt="Inserat logo" /></div>
	<div class="col-xs-8 col-sm-3 inserat-details">
		<p>asdfawe faewfafa faf </p>
		</div>
	<div class="col-xs-12 col-sm-7 inserat-content">
	<p>asdfas af aefafaew faef awfa wfaf awef awf awf awf awef aweaw fweafawfafa ef awfeawef awef</p>
	</div>
	
	</div>
</div>
<?php

include ($path . 'template/footer.php');
?>
