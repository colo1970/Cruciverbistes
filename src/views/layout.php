<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
        <title><?php echo $pagetitle; ?></title>
	 <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Cruciverbistes/src/web/css/style.css" rel="stylesheet">
	  <script src="/Cruciverbistes/src/web/js/jquery">
  </script> 
    </head>
    <body>
	  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
			<?php   
			  
			?>
            <li><a href="">Test</a></li>
            <li><a href="view/preferences.html">Préference</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="starter-template hauteur">
	  <div class="container">	    
		<?php	
		  require $view;
		?>
       <footer class="row">
                <div class="span12">
                    <em>
                        Copyright 2017
                    </em>
                </div>
            </footer>
    </div>
	</div>
  </body>

</html>