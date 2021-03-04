<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8"/>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0)
        }

        .box {
            width: 500px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 52%;
            background: #191919;
        ;
            text-align: center;
            transition: 0.25s;
            margin-top: 100px
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s
        }

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 300px;
            border-color: #2ecc71
        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }

        .box input[type="submit"]:hover {
            background: #2ecc71
        }

        .forgot {
            text-decoration: underline
        }

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px
        }

        .social-network a.icoFacebook:hover {
            background-color: #3B5998
        }

        .social-network a.icoTwitter:hover {
            background-color: #33ccff
        }

        .social-network a.icoGoogle:hover {
            background-color: #BD3518
        }

        .social-network a.icoFacebook:hover i,
        .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i {
            color: #fff
        }

        a.socialIcon:hover,
        .socialHoverClass {
            color: #44BCDD
        }

        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            font-size: 20px
        }

        .social-circle li i {
            margin: 0;
            line-height: 50px;
            text-align: center
        }

        .social-circle li a:hover i,
        .triggeredHover {
            transform: rotate(360deg);
            transition: all 0.2s
        }

        .social-circle i {
            color: #fff;
            transition: all 0.8s;
            transition: all 0.8s
        }



    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"
    ></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p>
                    <input type="text" name="" placeholder="Username">
                    <input type="password" name="" placeholder="Password">
                    <a class="forgot text-muted" href="#">Forgot password?</a>
                    <input type="submit" name="" value="Login" href="">
                    <div class="col-md-12">
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook">
                                    <i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter">
                                    <i class="bi bi-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle" title="Google +">
                                    <i class="bi bi-google"></i></a></li>

                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
