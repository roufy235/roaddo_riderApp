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
   <title>Activity</title>
    <?php
    require_once 'layouts/header.php';
    ?>
</head>
<body>
<?php
require_once 'layouts/nav.php';
?>
<div class="container">
    <div class="grid_container">
        <h1 class="grid_item overviewTxt">
            Activity Status
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
    <div class="box marginTop boxPadding">
        <h6 class="marginTopOnly overviewTxt">
            18 Nov. 2021
        </h6>
        <div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    10:00PM - 02:00PM
                </h4>
                <h6 class="forH6">
                    01:00PM - 02:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    02:00PM - 03:00PM
                </h4>
                <h6 class="forH6">
                    02:00PM - 03:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    03:00PM - 04:00PM
                </h4>
                <h6 class="forH6">
                    03:00PM - 04:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    04:00PM - 05:00PM
                </h4>
                <h6 class="forH6">
                    04:00PM - 05:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftRed">
                <h4 class="marginZero colorOnly">
                    05:00PM - 12:00PM
                </h4>
                <h6 class="forH6">
                    05:00PM - 12:00PM
                </h6>
            </div>
        </div>

        <h6 class="marginTopOnly overviewTxt">
            19 Nov. 2021
        </h6>
        <div>
            <div class="marginTop borderLeftRed">
                <h4 class="marginZero colorOnly">
                    10:00PM - 02:00PM
                </h4>
                <h6 class="forH6">
                    01:00PM - 02:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    02:00PM - 03:00PM
                </h4>
                <h6 class="forH6">
                    02:00PM - 03:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    03:00PM - 04:00PM
                </h4>
                <h6 class="forH6">
                    03:00PM - 04:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftGreen">
                <h4 class="marginZero colorOnly">
                    04:00PM - 05:00PM
                </h4>
                <h6 class="forH6">
                    04:00PM - 05:00PM
                </h6>
            </div>
            <div class="marginTop borderLeftRed">
                <h4 class="marginZero colorOnly">
                    05:00PM - 12:00PM
                </h4>
                <h6 class="forH6">
                    05:00PM - 12:00PM
                </h6>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'layouts/footer.php';
?>
</body>
</html>
