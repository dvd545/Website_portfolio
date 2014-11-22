<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>David Schmidt - Portfolio </title>
    <!-- Bootstrap Core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">David Schmidt</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle page-scroll" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#portfolio" class="page-scroll">Action</a></li>
                                <li><a href="#twitterapp">Twitter Application</a></li>
                                
	
	<div class="container pt">
		<div class="row mt centered">	
			<div class="col-lg-4">
				<div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            <h1>Mentions</h1>
                          </a>
                        </div>
                            <h3>Mentions of Leonard Lance </h3>
                        <div id="collapseOne" class="accordion-body collapse in" >
                          <div class="accordion-inner">
                              <?php
                                    ini_set('display_errors', 'On');
                                    require 'autoloader.php';
                                    $url = 'search/tweets.json';
                                    $getfield = '?q=replanceNJ7';
                                    $settings = \Classes\Config::password();
                                    $object3 = \Classes\TwitterFunctions::get_field($url, $getfield, $settings);
                                    $feed = \Classes\HtmlFunctions::show_mentions($object3);
                            ?>
                            </div>
                        </div>
                      </div>
                      <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            <h1>Friends of Lifehacker</h1>
                          </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                          <div class="accordion-inner">
                              <?php
                                    $url = 'friends/list.json';
                                    $getfield = '?screen_name=lifehacker';
                                    $settings = \Classes\Config::password();
                                    $object2 = \Classes\TwitterFunctions::get_field($url, $getfield, $settings);
                                    $feed = \Classes\HtmlFunctions::show_friends($object2);
                              ?>
                          </div>
                        </div>
                      </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                            <h1>Favorite Tweets</h1>
                          </a>
                        </div>
                        <div id="collapse3" class="accordion-body collapse">
                          <div class="accordion-inner">
                              <?php
                              $url = 'statuses/user_timeline.json';
                                    $getfield = '?screen_name=gizmodo';
                                    $settings = \Classes\Config::password();
                                    $object4 = \Classes\TwitterFunctions::get_field($url, $getfield, $settings);
                                    $feed = \Classes\HtmlFunctions::print_Favoritetweet($object4);
                                   
                            ?>
                              
                          </div>
                        </div>
                      </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                            <h1>Tweet</h1>
                          </a>
                        </div>
                        <div id="collapse4" class="accordion-body collapse">
                          <div class="accordion-inner">
                              <?php
                              $url = 'statuses/update.json';
                                    $postfield = array(
                                            'status' => 'posting from another app!'
                                    );
                                    $settings = \Classes\Config::password();
                                    $object = \Classes\TwitterFunctions::post_field($url, $postfield, $settings);
                                    \Classes\HtmlFunctions::tweet_success();
                            ?>
                              
                          </div>
                        </div>
                      </div>
                    
                         
                        
                    </div>
				</div><!-- /col-lg-4 -->
			
			</div>
      </div>
    
		

	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
