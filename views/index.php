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
    <title>Roaddo Rider App</title>
    <?php
    require_once 'layouts/header.php';
    ?>
    <link rel="stylesheet" href="<?php echo getBasePath(); ?>/dist/modal.css?version=<?php echo $_ENV['JAVASCRIPT_VERSION_CONTROL']; ?>">
</head>
<body>
    <?php
    require_once 'layouts/nav.php';
    ?>
    <div class="container">
        <div class="grid_container">
            <h1 class="grid_item overviewTxt">
                Overview
            </h1>
            <div class="grid_item">
                <div class="dropDownContainer">
                    <select name="" id="">
                        <option value="">Current Week</option>
                        <option value="">Previous Week</option>
                        <option value="">Current Month</option>
                        <option value="">Previous Month</option>
                        <option value="">Current Year</option>
                        <option value="">Previous Year</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="grid_containerBox">
            <a href="<?php echo getBasePath(); ?>/rideCompleted">
                <div class="grid_itemBox box">
                 <span class="iconContainer">
                    <i class="fas fa-cart-plus"></i>
                </span>
                    <h6>
                        Rides Completed
                    </h6>
                    <h3>
                        23
                    </h3>
                </div>
            </a>
            <div class="grid_itemBox box">
                <span class="iconContainer">
                    <i class="fas fa-chart-bar"></i>
                </span>
                <h6>
                    Commission
                </h6>
                <h3>
                    NGN4,600
                </h3>
            </div>
            <div class="grid_itemBox box">
                 <span class="iconContainer">
                    <i class="fas fa-wallet"></i>
                </span>
                <h6>
                    Wallet
                </h6>
                <h3>
                    0
                </h3>
            </div>
            <div class="grid_itemBox box">
                 <span class="iconContainer">
                    <i class="fas fa-users"></i>
                </span>
                <h6>
                    Feedbacks
                </h6>
                <ul class="feedbacks">
                    <li>
                        <span class="iconContainerFeedbacks">
                            <i class="fas fa-smile smileFas"></i>
                        </span>
                    </li>
                    <li>
                        <span class="feedbacksCounter">
                            2
                        </span>
                    </li>
                    <li>
                        <span class="iconContainerFeedbacks">
                            <i class="fas fa-thumbs-up thumbUpFas"></i>
                        </span>
                    </li>
                    <li>
                        <span class="feedbacksCounter">
                            14
                        </span>
                    </li>
                    <li>
                        <span class="iconContainerFeedbacks">
                            <i class="fas fa-handshake handshakeFas"></i>
                        </span>
                    </li>
                    <li>
                        <span class="feedbacksCounter">
                            10
                        </span>
                    </li>
                </ul>
            </div>

        </div>
        <a href="<?php echo getBasePath(); ?>/goals">
            <div class="box marginTop">
                <div class="grid_containerNoSpaceBetween">
                    <div>
                        <i class="fas fa-chart-bar chartSize"></i>
                    </div>
                    <div class="grid_containerNoSpaceBetween2">
                        <h6>
                            Targets and Goals
                        </h6>
                        <h3>
                            500 rides
                        </h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo getBasePath(); ?>/targets">
            <div class="box marginTop">
                <div class="grid_containerNoSpaceBetween">
                    <div>
                        <i class="fas fa-wave-square chartSize"></i>
                    </div>
                    <div class="grid_containerNoSpaceBetween2">
                        <h6>
                            Monthly Targets
                        </h6>
                        <h3>
                            23/50 rides
                        </h3>
                    </div>
                </div>
            </div>
        </a>
        <div class="grid_containerBox">
            <div class="grid_itemBoxTwo box">
                <h6>
                    Training Required
                </h6>
                <h3>
                    4
                </h3>
            </div>
            <a href="<?php echo getBasePath(); ?>/activity">
                <div class="grid_itemBoxTwo box">
                    <h6>
                        Activity Status
                    </h6>
                    <div class="grid_container">
                        <div class="">
                        <span class="iconContainerFeedbacks">
                            <i class="fas fa-wifi handshakeFas"></i>
                        </span>
                        </div>
                        <div class="viewAll">
                            View all <i class="fas fa-long-arrow-alt-right"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-body">
                    <span class="close">&times;</span>
                    <p class="dropOffTxt">Drop off confirmation code is</p>
                    <h4 class="generatedCode">
                        rF6726roaddo
                    </h4>
                    <button type="button" class="modalBtnConfirmed">
                        Confirmed
                    </button>
                </div>
            </div>

        </div>
        <button type="button" id="myBtn" class="marginTop btn">
            Request Drop Off Code
        </button>
    </div>
    <?php
    require_once 'layouts/footer.php';
    ?>
    <script src="<?php echo getBasePath(); ?>/assets/modal.js"></script>

</body>
</html>
