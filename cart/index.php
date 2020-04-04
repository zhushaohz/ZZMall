<?php
session_start();
?>

<html>

<head>
    <title>ZZMall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="shortcut icon" href="../mall.ico" />

    <link href="cart.css?v=0011" rel="stylesheet" type="text/css" />
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
                <a class="nav-link" href="../contact/">Contact</a>
            </li>
        </ul>
        <div>
            <h1>ZZMall Cart</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="dian">
                    <img id="xuan" src="选择.png">
                    

                </div>
                <span>美区小火箭</span>
                <div class="price">
                    ￥25
                </div>
                <div class="num form-inline">
                    <div class="n1">-</div>
                    <div class="n2">0</div>
                    <div class="n3">+</div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="dian">
                    <img id="xuan" src="选择.png">
                    

                </div>
                <span>美区Quan</span>
                <div class="price">
                    ￥25
                </div>
                <div class="num form-inline">
                    <div class="n1">-</div>
                    <div class="n2">0</div>
                    <div class="n3">+</div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="dian">
                    <img id="xuan" src="选择.png">
                    

                </div>
                <span>美区QuanX</span>
                <div class="price">
                    ￥25
                </div>
                <div class="num form-inline">
                    <div class="n1">-</div>
                    <div class="n2">0</div>
                    <div class="n3">+</div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="dian">
                    <img id="xuan" src="选择.png">
                    

                </div>
                <span>美区礼品卡$10</span>
                <div class="price">
                    ￥25
                </div>
                <div class="num form-inline">
                    <div class="n1">-</div>
                    <div class="n2">0</div>
                    <div class="n3">+</div>
                </div>
            </div>
        </div>
        <div class="pay form-inline">
            合计：124
        <div class="pp">结算</div>
        
        </div>    
    </div>
    <script type="text/javascript" src="cart.js"></script>
</body>

</html>