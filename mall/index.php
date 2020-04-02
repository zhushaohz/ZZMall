<?php
session_start();
?>

<html>

<head>
    <title>ZZMall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="shortcut icon" href="rain.ico" />

    <link href="mall.css?v=0001" rel="stylesheet" type="text/css" />
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <ul class="nav nav-tabs justify-content-end">
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
                <a class="nav-link" href="../contact/">Contact</a>
            </li>
        </ul>
        <div>
            <h1>ZZMall</h1>
        </div>
        <div class="row">
            <div class="col-md-3">

                <div class="card">

                    <div class="card-body">
                        <p>美区小火箭</p>
                        <div class="tab">
                            <span class="badge badge-pill badge-dark">手工发货</span>
                        </div>


                        <span>销量：</span><span class="badge badge-dark">11</span>
                        <span>剩余：</span><span class="badge badge-dark">11</span>
                        <div class="price">
                            <span>￥25</span>
                        </div>
                        <div class="btn">
                            <button>加入购物车</button>
                            <button>立即购买</button>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">

                        <p>美区Quan</p>
                        <div class="tab">
                            <span class="badge badge-pill badge-dark">手工发货</span>
                        </div>


                        <span>销量：</span><span class="badge badge-dark">11</span>
                        <span>剩余：</span><span class="badge badge-dark">11</span>
                        <div class="price">
                            <span>￥45</span>
                        </div>
                        <div class="btn">
                            <button>加入购物车</button>
                            <button>立即购买</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p>美区QuanX</p>
                        <div class="tab">
                            <span class="badge badge-pill badge-dark">手工发货</span>
                        </div>


                        <span>销量：</span><span class="badge badge-dark">11</span>
                        <span>剩余：</span><span class="badge badge-dark">11</span>
                        <div class="price">
                            <span>￥65</span>
                        </div>
                        <div class="btn">
                            <button>加入购物车</button>
                            <button>立即购买</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p>美区礼品卡</p>
                        <div class="tab">
                            <span class="badge badge-pill badge-dark">手工发货</span>
                        </div>


                        <span>销量：</span><span class="badge badge-dark">11</span>
                        <span>剩余：</span><span class="badge badge-dark">11</span>
                        <div class="price">
                            <span>￥70</span>
                        </div>
                        <div class="btn">
                            <button>加入购物车</button>
                            <button>立即购买</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>
    <script type="text/javascript" src="mall.js"></script>
</body>

</html>