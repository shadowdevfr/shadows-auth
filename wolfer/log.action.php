<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
require("../bar.php");
$email = $_POST['email'];
$code = $_SESSION["code"];
$mm_path = "https://wolfer.ml/srv/users/" . $email . "_ID.txt";
$ch = curl_init($mm_path);
curl_setopt($ch, CURLOPT_NOBODY, true);
curl_exec($ch);
$retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
$ID = file_get_contents("https://wolfer.ml/api/users/get.php?tag=" . $email . "_ID");
if($retcode=="404"){
?>
        <script>
            window.location.replace("/wolfer/logon?err=L'Adresse E-Mail n'est pas valide. Essayez d'ajouter un espace après l'adresse.");
        </script>
    <?php
} else {
	$mdp = file_get_contents("https://wolfer.ml/api/users/get.php?tag=" . $email . "_password");
	if ($_POST["mdp"]==$mdp) {
		$uuid = file_get_contents("https://wolfer.ml/api/users/get.php?tag=" . $email . "_ID");
		$name = file_get_contents("https://wolfer.ml/api/users/get.php?tag=" . $email . "_name");
		$pic = file_get_contents("https://wolfer.ml/api/users/get.php?tag=" . $name . "_pic");
		$_SESSION["wol_pic"] = $pic;
		$_SESSION["wol_uuid"] = $uuid;
		$_SESSION["wol_name"] = $name;
		$current = file_get_contents("../stats/lgt.txt");
		$now = $current + 1;
		$file = '../stats/lgt.txt';
		file_put_contents($file, $now);
		?>
		<script>
            window.location.replace("/wolfer/success");
        </script>
		<?php
	} else {
		?>
		<script>
            window.location.replace("/wolfer/logon?err=Le mot de passe est invalide.");
        </script>
		<?php
	}
	
}
?>
	<div class="progress">
		  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	</div>