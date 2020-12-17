<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    
<title>Shape Of Love - 爱之形</title>

<!-- Angular.js + Font Awesome + jQuery.js -->
<script src="https://cdn.bootcss.com/angular.js/1.7.0/angular.min.js"></script>
<script src="https://cdn.bootcss.com/angular.js/1.7.0/angular-route.min.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./scripts/siteRouter.js"></script>
<script src="./scripts/submitControl.js"></script>

<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="./styles/baseStyles.css">
<link rel="stylesheet" href="./styles/componentStyles.css">
<link rel="stylesheet" href="./styles/siteMenu.css">
<link rel="stylesheet" href="./styles/outBorder.css">

<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
</head>

<body ng-app="sols">
<section class="container">
    <aside class="aside">
        <?php include_once './components/logo.cpt.html'; ?>
        <?php include_once './components/intro.cpt.html'; ?>
        <?php include_once './components/menu.cpt.html'; ?>
        <?php include_once './components/copyright.cpt.html'; ?>
    </aside>
    <main class="main" ng-view></main>
</section>
</body>
</html>
