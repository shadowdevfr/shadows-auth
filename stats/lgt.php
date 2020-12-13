<?php
if(isset($_POST["auto"])) {
	if($_POST["auto"]==1) {
		$current = file_get_contents("lgt.txt");
		$now = $current+ 1;
		$file = 'lgt.txt';
		file_put_contents($file, $now);
	}
} else if(isset($_GET["reset"])) {
	if($_GET["reset"]==1) {
		$current = file_get_contents("lgt.txt");
		$now = 0;
		$file = 'lgt.txt';
		file_put_contents($file, $now);
		$webhookurl = "https://discordapp.com/api/webhooks/678361194494558242/yyumQ2mkq9jivifXlhtGsQvJAyfajvi0_IhSQyYEE4-gSA2YJkyhVTnX9YPmNRuTLodM";
		$msg = "LGT remis à 0. http://wolfer.ml/stats/lgt.php";
		
		$json_data = array ('content'=>"$msg");
		$make_json = json_encode($json_data);
		
		$ch = curl_init( $webhookurl );
		curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
		
		$response = curl_exec( $ch );
	}
} else {
	echo file_get_contents("lgt.txt") . " parties lancées aujourd'hui!";
}

?>