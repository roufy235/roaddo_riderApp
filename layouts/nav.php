<nav>
    <a href="<?php echo getBasePath(); ?>/home">
        <img
            class="menu_bar"
            src="assets/images/hamburger.png" alt="">
    </a>
    <?php
    if (isLoggedIn()) {
        ?>
        <ul class="menu_items">
            <li>
                <img class="notificationImage" src="<?php echo getBasePath(); ?>/assets/images/notifications.png" alt="">
            </li>
            <li>
                <div class="divider"></div>
            </li>
            <li class="profile_name">
                Bakare Emmanuel
            </li>
            <li>
                <img class="profileImage" src="<?php echo getBasePath(); ?>/assets/images/profile.png" alt="">
            </li>
        </ul>
    <?php
    }
    ?>

</nav>
