<?php
require_once("framework/plugins/security_token/index.php");
//echo "aqui";
//exit;
$token = new token();
if(isset($msg)){
	$_msg = "<input type=\"hidden\" name=\"msg\" value=\"".$msg."\" />";
}
?>
<html>
<head>
<title>
	Redirecionando
</title>
<script type="text/javascript" src="./public/js/page.js" charset="iso-8859-1"></script>
<script type="text/javascript" src="./public/js/md5.js" charset="iso-8859-1"></script>
</head>
<body>
	<?php echo $_msg; ?>
	<input type="hidden" name="token" id="token" value="<?=$_SESSION['token']; ?>" />
	<script>
		wiOpen('login.php?d=login&a=login&f=formLogin');			
	</script>
</body>
</html>