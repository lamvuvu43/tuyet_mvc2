<?php
	/**
	 * Login Form
	 */
	class loginForm
	{
		
		function loginFormTemplate()
		{
			$temp = <<<EOF
			<div class="container">
			  <form class="loginform" action="controllers/index.php?action=login" method="POST">
			    <input type="text" name="username" class="form-control"><br>
			    <input type="text" name="password" class="form-control"><br>
			    <input type="submit" value="Login" class="btn btn-success"><br>

			    <a href="index.php?action=forgotpassword">
			      <input type="button" value="Forgot Password"class="btn btn-light">
			    </a>    <br>

			    <a href="index.php?temp=register">
			      <input type="button" value="member register" class="btn btn-info">
			    </a>    <br>

			  </form>
			</div>
EOF;
			return $temp;
		}

		function registerFormTemplate()
		{
			$temp = <<<EOF
			<div class="container">
			  <form class="loginform" action="controllers/index.php?action=login" method="POST">
			    <input type="text" name="username" class="form-control"><br>
			    <input type="text" name="password" class="form-control"><br>

			    <a href="index.php?action=register">
			      <input type="button" value="member register" class="btn btn-info">
			    </a>    <br>

			  </form>
			</div>
EOF;
			return $temp;
		}
	}
?>


