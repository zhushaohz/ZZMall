<?php
session_start();
?>

<html>

<head>
	<title>ZZMallUser</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="shortcut icon" href="rain.ico" />

	<link href="user.css?v=0000" rel="stylesheet" type="text/css" />
	<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<ul class="nav nav-tabs justify-content-end">
			<li class="nav-item">
				<a class="nav-link" href="../mall">Mall</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../cart/">Cart <span class="badge badge-secondary">0</span></a>
			</li>
			<?php
			if (isset($_SESSION['username'])) {
				echo '<li class="nav-item daohang"><a class="nav-link" href="../user/">' . $_SESSION['username'] . '</a></li>';
			} else {
				echo '<li class="nav-item daohang">
                            <a class="nav-link" href="../signup/">Sign up</a>
                        </li>
                        <li class="nav-item daohang">
                            <a class="nav-link" href="../login/">Log in</a>
                        </li>';
			}
			?>
			<li class="nav-item">
				<a class="nav-link" href="../contact">Contact</a>
			</li>
		</ul>
		<div>
			<h1>ZZMall</h1>
		</div>
		<div class="xuanze btn-group">
			<button class="btn1">个人中心</button>
			<button class="btn2">我的订单</button>

		</div>
		<div class="pay">
			<p>余额:</p>
			<button>充值</button>
			<p>用户名：</p>

		</div>


		<div class="out">
			<a href="logout.php?action=logout" type="btn btn-light" role="button">Log out</a>
		</div>
	</div>




	<script type="text/javascript" src="user.js"></script>
</body>

</html>