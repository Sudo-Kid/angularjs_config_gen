<!DOCTYPE html>
<html lang="en" ng-app="configGen">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="The-Kid89">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="angular.min.js"></script>
    <script src="js/app.js"></script>
    <style>
      .ng-invalid.ng-dirty {
        border-color: #FA787E;
      }
      .ng-valid.ng-dirty {
        border-color: #78FA89;
      }
    </style>
  </head>
<body>
<section>
  <ul class="nav nav-pills">
    <li><a href ng-click="tab = 1">Nginx Django</a></li>
    <li><a href ng-click="tab = 2">Htaccess Redirect</a></li>
    <li><a href ng-click="tab = 3">Test</a></li>
  </ul>
</section>

<div class="container">

  <div class="panel" ng-show="tab === 1">
    <form name="settingsNginxDjango" ng-controller="NginxDjangoController as configCrtl"
          ng-submit="configCtrl.addSettings(settings)" novalidate>
      <label>Domain:</label>
      <input type="text" name="domain" ng-model="configCrtl.settings.domain" required />
      <input type="submit" value="Submit">

        <?php
          include __DIR__.'/includes/nginx-django.html';
        ?>
      </pre>
    </form>
  </div>

  <div class="panel" ng-show="tab === 2">
    <form name="settingsHtaccessRedirect" ng-controller="HtaccessRedirectController as configCrtl"
          ng-submit="configCtrl.addSettings(settings)" novalidate>
      <label>Domain: </label>
      <input type="text" name="domain" ng-model="configCrtl.settings.domain" />
      <label>TLD: </label>
      <input type="text" name="tld" ng-model="configCrtl.settings.tld" />
      <label>Redirect URI: </label>
      <input type="url" name="redirectURI" ng-model="configCrtl.settings.redirectURI" />
      <?php
        include __DIR__.'/includes/htaccess-redirect.html';
      ?>
    </form>
  </div>

  <div class="panel" ng-show="tab == 3">
    <pre>
  My Test!
  Second Test!!
    </pre>
  </div>

</div>

<footer>
  <div class="container">
    <p>This page is powered by the code on <a href="https://github.com/the-kid89/angularjs_config_gen">GitHub</a></p>
  </div>
</footer>
</body>
</html>