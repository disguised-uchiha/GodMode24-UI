<?php include('./includes/header.php') ?>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./public/css/email_login.css">
</head>
<body>
    <main class="d-flex flex-column justify-content-end align-items-center">
        <ul class="w-50">
            <li class="d-block mb-3 p-0">
                <form action="./dashboard/welcome.php">
                    <input type="email" class="form-control mb-3" placeholder="Enter your Email">
                    <input type="password" class="form-control mb-3" placeholder="Enter your password">
                    <input type="submit" class="btn btn-warning w-100" value="Login">
                </form>
            </li>
            <li class="btn btn-danger d-block mb-3">Forget Password</li>
            <li class="btn btn-danger d-block mb-3"><a href="./registration.php">SignUp</a></li>
        </ul>
    </main>
</body>
</html>