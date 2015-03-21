<html>
	<head>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/mainstyle.css">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</head>

	<body>
    	<div class='navbar navbar-default'>
			<div class='container'>
            	<div class="navbar-header">
					<a class='navbar-brand' href='/'>Home page</a>
                    <button class="navbar-toggle" data-toggle='collapse' data-target='.navbar-collapse'>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
				<ul class='nav navbar-nav collapse navbar-collapse navbar-right'>
					<li><a href='#'>Item \33</a></li>
					<li><a href='#'>Item 2</a></li>
					<li class="dropdown"><a href='#' class="dropdown-toggle" data-toggle="dropdown">login</a>
                        <div class="dropdown-menu container-fluid dropdownSignInForm"  style="padding:17px;">
                            <form method="post" action="scripts/login.php" class="form">
                            	<div class="form-group">
                            	<label for="signInUserName" class="control-label">User Name:</label>
                                <input type="text" size="100" maxlength="16" name="signInUserName" id="signInUserName" placeholder="User Name" class="form-control" />
                                </div>
                                <div class="form-group">
                                <label for="SignInPassword" class="control-label">Password:</label>
                                <input type="password" size="10" name="signInPassword" id="signInPassword" placeholder="Password" class="form-control" />
                                </div>
                                <button type="submit" class="btn">Log In</button>
                            </form>
                        </div>
                    </li>
                    <li><a href="#" data-toggle="dropdown">My Account<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">My Polls</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                  	</li>
				</ul>
			</div>
		</div>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	</body>
</html>
