<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\js\magic.js"></script>
    <script type="text/javascript" src="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\js\jquery.min.js"></script>
    <script type="text/javascript" src="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\js\bootstrap.min.js"></script>
    <link href="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\css\font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\css\bootstrap.css"
    rel="stylesheet" type="text/css">
    <link href="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\css\w3.css"
    rel="stylesheet" type="text/css">
    <link href="C:\Program Files (x86)\Ampps\www\pedagofss\web\includes\css\style.css"
    rel="stylesheet" type="text/css">
    <title>Pedago</title>
  </head>
  
  <body data-spy="scroll">
    <div class="">
      <div class="navbar navbar-default w3-top w3-blue-grey">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Accueil"><img height="20" alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC" class="center-block"></a>
            <a class="navbar-brand" href="Accueil"><span>Pedago</span></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav nav-pills navbar-right pull-right">
              <li class="" style="height:90px;">
                <a href="Accueil" class="w3-btn w3-white w3-round w3-ripple btn btn-default navbar-btn"> Accueil <i class="glyphicon glyphicon-home"></i></a>
              </li>
              <li class="" style="height:90px;">
                <a class="w3-btn w3-white  w3-round w3-ripple btn btn-default navbar-btn"
                href="User">  Mon Espace <span class="caret"></span>
                </a>
              </li>
              <li class="" style="height:90px;">
                <a href="Authentification?type=login" class="w3-btn w3-white  w3-round w3-ripple btn btn-default navbar-btn">Se Connecter 	<i class="glyphicon glyphicon-log-in"></i></a>
              </li>
              <li class="" style="height:90px;">
                <a href="Authentification?type=signin" class="w3-btn w3-white  w3-round w3-ripple btn btn-default navbar-btn"> S'Inscrire 	<i class="glyphicon glyphicon-user"></i></a>
              </li>
              <li class="" style="height:90px;">
                <a href="Deconnexion" class="w3-btn w3-white  w3-round w3-ripple btn btn-default navbar-btn"> Se Déconnecter <i class="glyphicon glyphicon-log-out"></i></a>
              </li>
              <li>
                <div class="w3-dropdown-hover pull-right navbar-btn">
                  <button class="w3-btn w3-blue">Français</button>
                  <div id="Demo" class="w3-dropdown-content w3-animate-zoom">
                    <a href="Accueil?lng=fr">Français</a>
                    <a href="Accueil?lng=en">English</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div id="infouser" class="alert alert-dismissable alert-success col-xs-3 col-xs-offset-4"
          onclick="" style="display:none;">
            <strong>Succes de l'operation</strong>.</div>
        </div>
      </div>
    </div>
	<?php


	echo ' <div style="background: #e9ffed; border: 1px solid #b0dab7; padding: 15px;" align="center" >
	<font size="5" color="#182e7a">Symfony is installed successfully.</font><br /><br />
	<font size="4">Symfony is a Framework, so doesn\'t have an index page.<br /><br />
	Symfony aims to speed up the creation and maintenance of web applications, and to replace the repetitive coding tasks by power, control and pleasure.

Symfony is aimed at building robust applications in an enterprise context. This means that you have full control over the configuration: from the directory structure to the foreign libraries, almost everything can be customized. </font></div>
<a href="/pedagofss/web/app_dev.php/TestBundle/bachbouch" > Lien vers Test </a>';

?>
  </body>

</html>
