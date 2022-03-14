<?php require_once 'include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $COMPANY_NAME ?></title>

	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- W3css -->
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<style>
		/* Password checker */
		form .indicator {
			height: 10px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin: 10px 0;
			display: none;
		}

		form .indicator span {
			width: 100%;
			height: 100%;
			background: lightgrey;
			border-radius: 5px;
			position: relative;
		}

		form .indicator span.medium {
			margin: 0 3px;
		}

		form .indicator span:before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border-radius: 5px;
		}

		form .indicator span.active.weak:before {
			background-color: #ff4757;
		}

		form .indicator span.active.medium:before {
			background-color: orange;
		}

		form .indicator span.active.strong:before {
			background-color: #23ad5c;
		}

		form .text {
			font-size: 12px;
			font-weight: 600;
			margin-bottom: -10px;
			display: none;
		}

		form .text.weak {
			color: #ff4757;
		}

		form .text.medium {
			color: orange;
		}

		form .text.strong {
			color: #23ad5c;
		}

		/* about image style */
		#intext {
			position: absolute;
			left: 2;
			top: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			width: 900px;
			height: max-content;
			background: #FFF;
		}

		.navbar-light .navbar-nav .nav-link:focus,
		.navbar-light .navbar-nav .nav-link:hover {
			color: maroon;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="container">
			<a class="navbar-brand" href="index.php" style="color: maroon;">
				<img src="img/blood.svg" alt="" style="width: 40px;">
				<?= $COMPANY_NAME ?>
			</a>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<?php
					$out = "";
					if (isset($_SESSION["type"]) && $_SESSION["type"] == "hospital" && isset($_SESSION["id"]) && !empty($_SESSION["id"])) {
						//hospital is login 
						$username = getUsernameHospital($_SESSION["id"]);
						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="index.php">Home</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="about.php">About</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="feedback.php">Feedback</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="help.php">Help</a>';
						$out .= '</li>';
						$out .= '<li class="nav-item" id="tab_dashboard">';
						$out .= '<a class="nav-link" href="dashboard.php">Dashboard</a>';
						$out .= '</li>';
						$out .= '<li class="nav-item dropdown" id="tab_profile">';
						$out .= '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello ' . $username . '</a>';
						$out .= '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
						$out .= '<a class="dropdown-item logout" href="#">Logout</a>';
						$out .= '</div>';
						$out .= '</li>';
					} elseif (isset($_SESSION["type"]) && $_SESSION["type"] == "user" && isset($_SESSION["id"]) && !empty($_SESSION["id"])) {
						// user is login
						$username = getUsernameUser($_SESSION["id"]);

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="index.php">Home</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="about.php">About</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="feedback.php">Feedback</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="help.php">Help</a>';
						$out .= '</li>';
						$out .= '<li class="nav-item dropdown" id="tab_profile">';
						$out .= '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello ' . $username . '</a>';
						$out .= '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
						$out .= '<a class="dropdown-item logout" href="#">Logout</a>';
						$out .= '</div>';
						$out .= '</li>';
					} else {
						// no one is login
						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="index.php">Home</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="about.php">About</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="feedback.php">Feedback</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item">';
						$out .= '<a class="nav-link" href="help.php">Help</a>';
						$out .= '</li>';

						$out .= '<li class="nav-item" id="tab_login">';
						$out .= '<a class="nav-link" href="login.php">Login</a>';
						$out .= '</li>';
						$out .= '<div class="d-flex">';
						$out .= '<li class="nav-item dropdown" id="tab_register">';
						$out .= '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>';
						$out .= '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
						$out .= '<a class="dropdown-item" href="register_user.php">As Receiver/User</a>';
						$out .= '<a class="dropdown-item" href="register_hospital.php">As Hospital</a>';
						$out .= '</div>';
						$out .= '</li>';
						$out .= '</div>';
					}
					echo $out;
					?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container msg mt-4"></div>