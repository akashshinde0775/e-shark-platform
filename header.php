<nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.php">
                        <span>E</span>Sharks</a>
                </h1>
                <!-- if logo is image enable this
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
						
						<?php
								if(!isset($_SESSION['current_login_admin']))
								{
							?>
							<li class="nav-item">
                            <a class="nav-link" href="register.php">Create Account</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
						<?php
								}
								
						?>
					    <li class="nav-item">
                            <a class="nav-link" href="contact-us.php">Contact Us</a>
                        </li>
						
						<li class="nav-item" style="width:200px; text-align:center;">
							
							<?php
								if(isset($_SESSION['current_login_admin']))
								{
							?>
						<li class="nav-item">
                            <a class="nav-link" href="dashboard.php" style="color:purple; margin-right:50px;">Dashboard</a>
                        </li>
						
									<span style="color:orange; font-weight:bold; text-shadow:1px 1px #333;">
									<?php
									echo $_SESSION['current_login_admin'];
									?>
									</span>
									<a class="nav-link" href="login.php?logout" style="color:yellow;">Logout</a>
							<?php
								}
							?>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position mt-lg-2">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>