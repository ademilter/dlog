<?php $page = $_GET["page"]; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adem ilter</title>
    <link rel="stylesheet" href="main.min.css">
</head>
<body>
<?php include_once "helper/svg-icons.php"; ?>


<main class="SiteContent" role="main">
    <?php

    // ABOUT
    if ($page == 'about') {
        include_once "page/about.php";
    } // POST
    elseif ($page == 'post-code') {
        include_once "page/post-code.php"; // ok
    } elseif ($page == 'post-photo') {
        include_once "page/post-photo.php"; // ok
    } elseif ($page == 'post-typography') {
        include_once "page/post-typography.php";
    } elseif ($page == 'post-video') {
        include_once "page/post-video.php";
    } // HOME
    else {
        include_once "page/home.php";
    }
    ?>
</main>
<!-- /.SiteContent -->


<script>
    // Google Analytics
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-71927510-1', 'auto');
    ga('send', 'pageview');


    // Twitter
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');
</script>


<script src='plugin.min.js'></script>
<script src='main.min.js'></script>


</body>
</html>
