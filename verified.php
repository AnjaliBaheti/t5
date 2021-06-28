<?php 
$userdata = $_POST;
		// print_r($_POST);
if ($_GET['sign']=="up" && isset($_POST['user-name']) && $_POST['user-name']!='' && isset($_POST['mobile']) && isset($_POST['mobile'])) {
		$doc = new DOMDocument();
		$doc->encoding = 'utf-8';
		$doc->xmlVersion = '1.0';
		$doc->load("userdata2.xml");
		$root = $doc->getElementsByTagName("users")->item(0);
		$user = $doc->createElement("user");
		foreach ($userdata as $key => $value) {
			$nod = $doc->createElement($key, $value);
			// $nod->appendChild($doc->createTextNode($value));
			$user->appendChild($nod);
		}
		$root->appendChild($user);
		$doc->formatOutput = true;
		$doc->save("userdata2.xml");
	}
$doc = simplexml_load_file('userdata2.xml');
$records = $doc->children();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="content">
		
		<?php
		$flag=0; 
		foreach ($records as $key => $child) {
			foreach ($child as $k => $v) {
				if (($k=="user-name" && $v==$userdata['user-name']) || $flag==0.5) {
					if ($flag==0.5 && ($k=="mobile" && $v==$userdata['mobile'])) {
						$flag = 1;
						$c = $child;
						break;

					}
					$flag = 0.5;
				}
			}
		}
		if ($flag==1) {
			echo "<h2>Your Data</h2>";
			?>
			<table class="table table-hover">
				<tbody>
					<?php
					foreach ($c as $key => $value) {
						?>
						<tr>
							<td><?=$key?></td>
							<td><?=$value?></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
			<?php
		}
		else {
			echo "<h3>Please Provide Valid Credentials.</h3>";
		}
		?>
	</div>
</body>
</html>

		<!--
// for ($i=0; $i < $xml->getElementsByTagName('user')->length; $i++) {
// 	// var_dump($xml->getElementsByTagName('user'));
// 	if (($xml->getElementsByTagName('name')->item($i)->nodeValue == $userdata['name']) && ($xml->getElementsByTagName('mobile')->item($i)->nodeValue == $userdata['mobile'])) {
// 		$u = $xml->getElementsByTagName('user')->item($i);

// echo "<h2>Your Data</h2>";
// var_dump($u);

	 	 -->