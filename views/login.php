<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="canonical" href="">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content=""/>
    <meta property="og:type" content="website"/>
    <!-- Twitter tags -->
    <meta name="twitter:title" content=""/>
    <meta name="twitter:card" content=""/>
    <meta name="twitter:site" content=""/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content=""/>
    <title>Login Roaddo Rider App</title>
    <?php
    require_once 'layouts/header.php';
    ?>
    <link rel="stylesheet" href="<?php echo getBasePath(); ?>/dist/modal.css?version=<?php echo $_ENV['JAVASCRIPT_VERSION_CONTROL']; ?>">
    <link rel="stylesheet" href="<?php echo getBasePath(); ?>/dist/login.css?version=<?php echo $_ENV['JAVASCRIPT_VERSION_CONTROL']; ?>">
</head>
<body>
    <?php
    require_once 'layouts/nav.php';
    ?>
    <div class="container">
        <div class="grid_container">
            <h1 class="grid_item overviewTxt">
                Login
            </h1>
        </div>

        <div class="login" id="loginApp">
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                            v-model="loginData.email"
                            class="form-control" type="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                            v-model="loginData.password"
                            class="form-control" type="password" id="password">
                </div>
                <button
                        @click="loginFunc"
                        type="button" id="myBtn" class="marginTop btn">
                    Login
                </button>
            </form>
        </div>
    </div>
    <?php
    require_once 'layouts/footer.php';
    ?>
</body>
</html>
