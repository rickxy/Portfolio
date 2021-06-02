<!doctype html>
<html lang="en" dir="ltr">
  <head >

  
 
<!-- Site Title -->
<title >Erick Omundi Portfolio</title>
	
	<meta name="description" content="ePortfolio">
    <meta name="keywords" content="erick,portfolio,resume">
	
	<!-- To ensure proper rendering on mobile devices and disable zooming capabilities -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	 <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Open+Sans|Tangerine:700" rel="stylesheet">


	<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

    <script src="js/font.js"></script>

	
<script src="js/jquery.easing.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.easypiechart.min.js"></script>

	<script src="js/jquery.nicescroll.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap/animate.min.css">

    <link rel="stylesheet" href="css/main.css">
	
	<script type='text/javascript'>

/* nicescroll customization */
var nice = function (){
	  $('body').niceScroll({
    cursorcolor: '#148914',
    cursorwidth: '8px',
    cursorborder: '1px solid #115111',                
    scrollspeed: 100,
    autohidemode: false,
    horizrailenabled: false,
    cursorborderradius: 3,
    zindex: 1060
  });
  };
  $(document).ready(function(){
      nice();
});

/* close navbar collapse after click in mobile */
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});

/* Strengths section chart */
	$(document).ready(function(){
    columnChart();
    
    function columnChart(){
        var item = $('.chart', '.column-chart').find('.item'),
        itemWidth = 100 / item.length;
        item.css('width', itemWidth + '%');
        
        $('.column-chart').find('.item-progress').each(function(){
            var itemProgress = $(this),
            itemProgressHeight = $(this).parent().height() * ($(this).data('percent') / 100);
            itemProgress.css('height', itemProgressHeight);
        });
    };
});

/* Skills section chart */
 var circleChart = function (){
  $('.chart1').easyPieChart({
    animate: 2000,
    barColor: '#148914', //Green
    trackColor: '#f6f6f6', //Gray
	scaleColor:	false, //specify '#f6f6f6' to display
	lineCap: 'square',
    size: 150,
    lineWidth: 8,
    easing: 'easeOutCirc',
    onStep: function(from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });
};
 $(document).ready(function(){
      circleChart();
});

	</script>

  </head>
  
  <body id="home" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66">
<!-- NAVBAR START -->
  	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#chandana-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand menus" href="#home">Erick.</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="chandana-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"><a href="#home"></a></li>
            <li class="page-scroll"><a href="#about">About</a></li>
            <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
			<li class="page-scroll"><a href="#skills">Skills</a></li>
			<li class="page-scroll"><a href="#resume">Resume</a></li>
			<li class="page-scroll"><a href="#whyme">Why Me</a></li>
			<li class="page-scroll"><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  	<!-- NAVBAR END -->
    
	<!-- LANDING PAGE START -->
  	<div id="landing">
      <div class="container">
        <div class="row">
          <div class="text-center">
            <div class="landing-text">
              <h1><span class="text-cursive">I'm Erick Omundi</span>.</h1>
              <h3>Python Programmer, Front End Developer & Test Engineer</h3>
              <div class="page-scroll">
                    <a href="#about" class="btn btn-lg btn-custom">Know Me Better</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  	<!-- LANDING PAGE END -->
	
	
 <!-- ABOUT SECTION START -->
    <section id="about" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
                <div class="row">          
                    <div class="match-height">

                        <!-- ABOUT TEXT START -->
                        <div class="about-text">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="sec-title text-center">HI, MY NAME IS ERICK OMUNDI</h2>

                                    <h4 class="sec-subtitle text-center">I will either find a way, or make one.</h4>

                                    <span class="separator center"></span>

                                    <p class="text-dark">I am an enthusiastic and a highly motivated software professional with strong academic background and 3+ years of working experience in front end development, java & android programming and testing. I am looking for new opportunities in the field.</p>
                                    <p class="text-dark">I have performed automation using Selenium IDE and Web Driver (Java/JUnit4) which included end to end regression testing for various applications in retail, revenue protection and credit risk spaces.</p>
									<p class="text-dark">I have successfully understood the processes from onsite and helped building the offshore team.</p>
									<p class="text-dark">I enjoy working on challenges and projects from freeCodeCamp and spend quality time crafting <a href="#" target="_blank">my blog.</a></p>
	
                                </div><!-- //.col-md-12 -->
                            </div><!-- //.row -->
                        </div> <!-- //ABOUT TEXT -->
						</div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
    <!-- //ABOUT SECTION -->
		
	<!-- STRENGTHS SECTION START -->
		<section id="strengths" class="section">
        <div class="container-fluid sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">My Strengths</h2>

                        <h4 class="sec-subtitle text-center">Facing challenges with strength, determination and confidence is what matters to me.</h4>

                        <span class="separator center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->
                
                <div class="row">
                    <div class="col-md-12">

                        <!-- COLUMN CHART START -->
                        <div class="column-chart">
                            <div class="legend legend-left hidden-xs">
                                <h3 class="legend-title">ME</h3>
                            </div>
                            <!-- //.legend -->

                            <div class="legend legend-right hidden-xs">
                                <div class="item">
                                    <h4>Best</h4>
                                </div>

                                <div class="item">
                                    <h4>Better</h4>
                                </div>

                                <div class="item">
                                    <h4>Pretty Good</h4>
                                </div>

                                <div class="item">
                                    <h4>Good</h4>
                                </div>
                            </div>
                            <!-- //.legend -->

                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">86%</span>

                                        <div class="item-progress" data-percent="86">
                                            <span class="title">Communication</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">78%</span>

                                        <div class="item-progress" data-percent="78">
                                            <span class="title">Confident</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                               <div class="item">
                                    <div class="bar">
                                        <span class="percent">90%</span>

                                        <div class="item-progress" data-percent="90">
                                            <span class="title">Commitment</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">64%</span>

                                        <div class="item-progress" data-percent="64">
                                            <span class="title">Creative</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">82%</span>

                                        <div class="item-progress" data-percent="82">
                                            <span class="title">Cooperative</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->
                            </div><!-- //.chart -->
                        </div> <!-- //COLUMN CHART END -->

                    </div><!-- //.col-md-12 -->
                </div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
	<!-- //STRENGTHS SECTION -->
	
<!-- MODAL FOR EACH PROJECT -->
<!-- proj1 start -->
	<div id="VirageCrRpModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title"><h4 style="color:black"><strong>TSL VIRAGE - CR RP</strong></h4></div>
				</div> <!-- /.modal-header -->
						
				<div class="modal-body modal-text">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Client:</strong> Everything Everywhere UK
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Role:</strong> Senior Test Engineer/Team Lead
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Team Size:</strong> 5
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Period:</strong> Mar 2014 to Apr 2015
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row2 -->
					<div class="row">
						<div class="col-md-12">
							<strong>Domain:</strong> Telecommunications (Fraud Detection 
							and Revenue Protection)
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row3 -->
					<span class="separator center"></span>
					<div class="row">
						<div class="col-md-12" style="padding-bottom:5px;">
						<strong>PROJECT DESCRIPTION</strong>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<p>Worked for critical application components for British mobile network operator and internet service provider, Everything Everywhere, on behalf of T-Systems Ltd. Project work embraced release and regression testing, Selenium automation, functional releases and other value added services.</p>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row2 -->
				</div> <!-- /.modal-body -->
						
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- //.proj1 -->

<!-- proj2 start -->
	<div id="VirageRetailModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title"><h4 style="color:black"><strong>TSL VIRAGE - RETAIL</strong></h4></div>
				</div> <!-- /.modal-header -->
						
				<div class="modal-body modal-text">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Client:</strong> Everything Everywhere UK
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Role:</strong> Test Engineer/Support Analyst
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Team Size:</strong> 7
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Period:</strong> Sep 2012 to Feb 2014
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row2 -->
					<div class="row">
						<div class="col-md-12">
							<strong>Domain:</strong> Telecommunications (Online
							Channel Applications)
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row3 -->
					<span class="separator center"></span>
					<div class="row">
						<div class="col-md-12" style="padding-bottom:5px;">
						<strong>PROJECT DESCRIPTION</strong>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<p>Project work involved dealing with online channel applications (Enable, Ishop, WSS and Kareena). Enable was used by direct and indirect dealers at the stores whereas Ishop by end customers. WSS and Kareena helped the customers (domestic, your group, small business, partnership and limited company) to view personalized information related to their mobile accounts such as options to view and pay bills, upgrade, transfer from PAYM to PAYG etc.</p> 
							<p>Coding and testing was done to add new products (phones, tablets, accessories, mobile Wi-Fi &  dongles), price plans (pay monthly, pay as you go, SIM only, sharing plans), bundles (related to roaming, data, text messages, MMS etc.), broadband plans (fixed and mobile) and certain other features such as magic numbers, clone phone, upgrading to EE network etc. Cosmetic changes were also performed.</p>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row2 -->
				</div> <!-- /.modal-body -->
						
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- //.proj2 -->

<!-- proj3 start -->
	<div id="ScopeWatchModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title"><h4 style="color:black"><strong>SCOPE WATCH</strong></h4><h5 style="color:black"> (was nominated as an Innovation Project of the year 2012)</h5></div>
				</div> <!-- /.modal-header -->
						
				<div class="modal-body modal-text">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Client:</strong> Cognizant Technology Solutions
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Role:</strong> Programmer Analyst
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Team Size:</strong> 3
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Period:</strong> Jan 2012 to Aug 2012
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row2 -->
					<span class="separator center"></span>
					<div class="row">
						<div class="col-md-12" style="padding-bottom:5px;">
						<strong>PROJECT DESCRIPTION</strong>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<p>Scope Watch is a tool designed to track requirements and various mapping details of individual projects in a single UI screen. It automates the Requirements Traceability Matrix. Export of RTM details in excel format for a specific project can be generated with a single click!</p> 
							<p>Dashboard provides complete project status stage wise using tables, pie charts and bar graphs. EXT-JS framework used to build the UI for this tool gives high performance grids, trees, menus thereby improving the usability and providing a gentle look and feel to the user. Thus saving effort and time that's usually spent in manually verifying coverage, and will help avoiding the usually expensive mistake of missed/incorrect implementation of requirements.</p>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row2 -->
				</div> <!-- /.modal-body -->
						
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- //.proj3 -->

<!-- proj4 start -->
	<div id="TributeModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title"><h4 style="color:black"><strong>A TRIBUTE PAGE</strong></h4></div>
				</div> <!-- /.modal-header -->
						
				<div class="modal-body modal-text">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Client:</strong> freeCodeCamp
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Role:</strong> Front End Developer
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Period:</strong> June 2016
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>URL:</strong> <a href="#" target="_blank"></a>
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row2 -->
					<span class="separator center"></span>
					<div class="row">
						<div class="col-md-12" style="padding-bottom:5px;">
						<strong>PROJECT DESCRIPTION</strong>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<p>The motto was to build a CodePen.io app using Bootstrap framework.</p>
							<p>User stories: I should be able to view a tribute page for Dr. A.P.J. Abdul Kalam with an image and a timeline. I should also be able to click on a link that will take me to an external website with further information on the topic.</p>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row2 -->
				</div> <!-- /.modal-body -->
						
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- //.proj4 -->

<!-- proj5 start -->
	<div id="BlogModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title"><h4 style="color:black"><strong>SELENIUM TO THE RESCUE</strong> (My Blog)</h4><h5 style="color:black">- A tutorial worth reading</h5></div>
				</div> <!-- /.modal-header -->
						
				<div class="modal-body modal-text">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Role:</strong> Author
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Period:</strong> Sep 2015 - Till Date
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<strong>URL:</strong><a href="#" target="_blank"> </a>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row3 -->
					<span class="separator center"></span>
					<div class="row">
						<div class="col-md-12" style="padding-bottom:5px;">
						<strong>DESCRIPTION</strong>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<p>I started this blog for software enthusiasts who want it all and are absolutely done with settling for less. For those who love coding, automation, testing and are greedy for more knowledge, this is the right place to be!</p> 
							<p>My mission is to make sure that learning sticks, but with the fun part kept intact. My blog targets beginners who wish to learn Selenium Tool Suite, the easy way.</p>
							<p>I also use this as a medium to showcase my creations.</p>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row2 -->
				</div> <!-- /.modal-body -->
						
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- //.proj5 -->

<!-- proj6 start -->
	<div id="SampleModal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
	
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title"><h4 style="color:black"><strong>PROJECT TITLE</strong></h4></div>
				</div> <!-- /.modal-header -->
						
				<div class="modal-body modal-text">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Client:</strong> Name
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Role:</strong> role
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<strong>Team Size:</strong> size
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 col-sm-12">
							<strong>Period:</strong> date
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row2 -->
					<div class="row">
						<div class="col-md-12">
							<strong>Domain:</strong> domain
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row3 -->
					<span class="separator center"></span>
					<div class="row">
						<div class="col-md-12" style="padding-bottom:5px;">
						<strong>PROJECT DESCRIPTION</strong>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row1 -->
					<div class="row">
						<div class="col-md-12">
							<p>Detailed description.</p>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row2 -->
				</div> <!-- /.modal-body -->
						
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- //.proj6 -->

<!-- //.MODAL -->	

 <!-- PORTFOLIO SECTION START -->
    <section id="portfolio" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
                <div class="row match-height"> 
					<div class="row">
                        <div class="col-md-12">
                            <h2 class="sec-title text-center">My Projects</h2>
							<h4 class="sec-subtitle text-center">My portfolio keeps expanding over time to better address even more challenges.</h4>
							<span class="separator center"></span>
						</div><!-- //.col-md-12 -->
					</div><!-- //.row -->

									

                    <!-- PROJECTS START -->
                    <div class="projects">                            
							
						<div class="row"> <!-- row -->
														<!-- project1 -->
							<div class="col-md-4 col-sm-6 col-xs-12">
							<figure class="figure project-holder">
								<img class="figure-img img-fluid img-responsive" src="projects/1.jpg" alt="TSL Virage-CR RP">
								<figcaption class="figure-caption">
									<h2>TSL Virage - CR RP</h2>
									<h4>Senior Test Engineer/Team Lead</h4>
									<div>
										<a data-toggle="modal" href="#VirageCrRpModal"><span class="glyphicon glyphicon-new-window align-left" aria-hidden="true"></span></a>
									</div>
								</figcaption>
							</figure>
							</div><!-- //.project1 -->
							
							<!-- project2 -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<figure class="figure project-holder">
									<img class="figure-img img-fluid img-responsive" src="projects/2.jpg" alt="TSL Virage-Retail">
									<figcaption class="figure-caption">
										<h2>TSL Virage - Retail</h2>
										<h4>Test Engineer/Support Analyst</h4>
										<div>
										<a data-toggle="modal" href="#VirageRetailModal">
										<span class="glyphicon glyphicon-new-window align-left" aria-hidden="true"></span></a>
										</div>
									</figcaption>
								</figure>
							</div><!-- //.project2 -->
							
							<!-- project3 -->
							<div class="col-md-4 col-sm-6 col-xs-12">
								<figure class="figure project-holder">
									<img class="figure-img img-fluid img-responsive" src="projects/3.jpg" alt="ScopeWatch">
									<figcaption class="figure-caption">
										<h2>Scope Watch</h2>
										<h4>Programmer Analyst</h4>
										<div>
										<a data-toggle="modal" href="#ScopeWatchModal">
										<span class="glyphicon glyphicon-new-window align-left" aria-hidden="true"></span></a>
										</div>
									</figcaption>
								</figure>
							</div><!-- //.project3 -->
							
							<!-- project4 -->
							<div class="col-md-4 col-sm-6 col-xs-12">
							<figure class="figure project-holder">
								<img class="figure-img img-fluid img-responsive" src="projects/4.jpg" alt="TributePage">
								<figcaption class="figure-caption">
									<h2>A Tribute Page</h2>
									<h4>Front End Developer</h4>
									<div>
										<a data-toggle="modal" href="#TributeModal">
										<span class="glyphicon glyphicon-new-window align-left" aria-hidden="true"></span></a>
										<a href="#" target="_blank"><span class="glyphicon glyphicon-link align-right" aria-hidden="true"></span></a>
									</div>
								</figcaption>
							</figure>
							</div><!-- //.project4 -->
							
							<!-- project5 -->
							<div class="col-md-4 col-sm-6 col-xs-12">
							<figure class="figure project-holder">
								<img class="figure-img img-fluid img-responsive" src="projects/5.jpg" alt="MyBlog">
								<figcaption class="figure-caption">
									<h2>Selenium to the Rescue (Blog)</h2>
									<h4>Author</h4>
									<div>
										<a data-toggle="modal" href="#BlogModal">
										<span class="glyphicon glyphicon-new-window align-left" aria-hidden="true"></span></a>
										<a href="#" target="_blank"><span class="glyphicon glyphicon-link align-right" aria-hidden="true"></span></a>
									</div>
								</figcaption>
							</figure>
							</div><!-- //.project5 -->
							
							<!-- project6 -->
							<div class="col-md-4 col-sm-6 col-xs-12">
							<figure class="figure project-holder">
								<img class="figure-img img-fluid img-responsive" src="projects/6.jpg" alt="">
								<figcaption class="figure-caption">
									<h2>Project Title</h2>
									<h4>Role</h4>
									<div>
										<a data-toggle="modal" href="#SampleModal">
										<span class="glyphicon glyphicon-new-window align-left" aria-hidden="true"></span></a>
										<a href="#"><span class="glyphicon glyphicon-link align-right" aria-hidden="true"></span></a>
									</div>
								</figcaption>
							</figure>
							</div><!-- //.project6 -->
							
						</div> <!-- //.row -->
					</div> <!-- //PROJECTS -->
				</div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
<!-- //PORTFOLIO SECTION -->

<!-- SKILLS SECTION START -->
	<section id="skills" class="section">
        <div class="container-fluid sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">My Skills</h2>

                        <h4 class="sec-subtitle text-center">Wisdom is knowing what to do next. Skill is knowing how to do it.</h4>

                        <span class="separator center"></span>
                    </div><!-- //.col-md-12 -->
                </div><!-- //.row1 -->
				
				<div class="row">				
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="76">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">Java</span>
					</div>	
				</div> <!-- //.col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="95">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">Selenium IDE</span>
					</div>	
				</div> <!-- //.col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="75">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">JavaScript</span>
					</div>	
				</div> <!-- //.col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="55">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">Android</span>
					</div>	
				</div> <!-- //.col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="90">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">Selenium WebDriver</span>
					</div>	
				</div> <!-- //.col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="70">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">My SQL</span>
					</div>	
				</div> <!-- //.col-md-4 -->
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="70">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">HTML5</span>
					</div>	
				</div> <!-- //.col-md-4 -->	
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="65">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">CSS3</span>
					</div>	
				</div> <!-- //.col-md-4 -->	
				<div class="col-md-4 col-sm-6">
					<div class="chartbox">
						<span class="chart1" data-percent="70">
						<span class="percent"></span>
						</span>
						<span class="chart1-title">Bootstrap</span>
					</div>	
				</div> <!-- //.col-md-4 -->					
				</div> <!-- //.row2 -->
				
			</div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
<!-- //SKILLS SECTION -->


<!-- RESUME SECTION START -->
    <section id="resume" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
                <div class="row"> 
				
					<div class="row">
                        <div class="col-md-12">
                            <h2 class="sec-title text-center">My Resume</h2>
							<h4 class="sec-subtitle text-center">I like to challenge my limits, and never miss an opportunity.</h4>
							<span class="separator center"></span>
						</div><!-- //.col-md-12 -->
					</div><!-- //.row -->
					
					<!-- EXPERIENCE -->	
					<div class="row experience" style="padding-bottom:20px;">
                    <div class="col-md-10 col-md-offset-1">
                        <h3 class="text-center" style="padding:20px 0 50px;">WORK EXPERIENCE</h3>

                        <div class="panel-group resume" id="accordion" role="tablist" aria-multiselectable="true">
							<!-- resume-item1 -->
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">Jun 2016</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="heading1">
                                        <div class="panel-title">
										<div class="resume-btn">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#work1"  aria-expanded="true" aria-controls="work1"></a>
										</div><!-- //.resume-btn -->
                                            <h4 class="resume-title">Front End Developer - Tribute Page</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                                        <div class="panel-body text-dark">
                                             <div class="subheading1">Key Responsibilities:</div>
                                             <p><ul style="list-style-type:disc">
                                             <li>Gathered information and organized as per the requirements.
											 <li>Designed the page such that all user stories were fulfilled.
											 <li>Used Bootstrap framework to obtain a responsive page.
											</ul>
                                            </p>
                                        </div><!-- //.panel-body -->
                                    </div><!-- //.panel-collapse -->
                                </div><!-- //.panel -->
                            </div><!-- //.resume-item1 -->

                            <!-- resume-item2 -->
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2014 - 2015</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="heading2">
                                        <div class="panel-title">
										<div class="resume-btn">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#work2" aria-expanded="false" aria-controls="work2"></a>
										</div><!-- //.resume-btn -->
                                            <h4 class="resume-title">Senior Test Engineer / Test Lead - TSL Virage CR RP</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                         <div class="panel-body text-dark">
                                             <div class="subheading1">Key Responsibilities:</div>
                                             <p><ul>
                                             <li>Handled end to end RRT (Release & Regression Testing) activities for Fraud Detection and Revenue Protection Systems viz., Mentis and Customer Account Information System, CAIS.</li>
											<li>Around 18 releases were delivered successfully without any escalations and in expected quality.
<li>Automated repeatedly executed test cases using Selenium IDE.</li>
<li>Automated cross browser testing related cases (Internet Explorer, Chrome, Safari and Firefox) with Selenium WebDriver using Eclipse IDE, Java programming language and JUnit4 testing framework.</li>
<li>Included direct client interactions involving principal designers, architects, release controllers, developers, PIT teams, UAT teams, L2 team, L3 team, internal project teams on a regular basis.</li>
<li>Effort estimation sheet was automated to provide a clear picture to the clients on the number of days and resources required for each release.</li>
<li>Provided client presentations and demonstration of the automations done thus far, to Senior Manager - Operational Performance Management, Senior OPM - Application Operations, CSS Governance Manager and other Cognizant project stakeholders.</li>
<li>Showed leadership by managing a team of 5 members efficiently and identified risks that ensured reduction of about 90% of escalations.</li>
<li>Provided KT and conducted micro-knowledge sessions for the team whenever a knowledge gap was identified, as a result, all members were on the same pace.</li>
                                            </ul></p>
                                        </div><!-- //.panel-body -->
                                    </div><!-- //.panel-collapse -->
                                </div><!-- //.panel -->
                            </div><!-- //.resume-item2 -->
							
							<!-- resume-item3 -->
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">2012 - 2014</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="heading3">
                                        <div class="panel-title">
										<div class="resume-btn">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#work3" aria-expanded="false" aria-controls="work3"></a>
										</div><!-- //.resume-btn -->
                                            <h4 class="resume-title">Test Engineer / Support Analyst - TSL Virage Retail</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                         <div class="panel-body text-dark">
                                             <div class="subheading1">Key Responsibilities:</div>
                                             <p><ul>
											 <li>Handled end to end RRT (Release & Regression Testing) activities for Online Channel Applications viz., Web Self Service (WSS), Kareena, Ishop and Enable</li>
<li>Around 62 releases were delivered successfully in desired quality.</li>
<li>End to end RRT process includes the following tasks,</li>
<ul style="list-style-type:circle">
<li>Requirements gathering from business/ revenue operations/ development team</li>
<li>Effort - Timeline estimation</li>
<li>Build deployments include EAR in web logic, WAR in web sphere, SQL script executions etc.</li>
<li>Creation of data sources, server restarts</li>
<li>Data setup and Environment validation</li>
<li>Test plan preparation</li>
<li>Test case execution which includes red route testing, regression and release scenarios testing, sanity checks</li>
<li>Defect logging in QC</li>
<li>Creation of tasks in TTRS for environment and technical issues</li>
<li>Discussion on issues with L3 and Dev teams</li>
<li>Status updates were given to all project stakeholders</li>
<li>Release meetings, Go/No Go meetings </li>
<li>Provide handovers to L2 teams before live deployments</li>
<li>Test Exit Report (TER) preparation</li>
<li>Updating evidences, handover documents, TER etc. in a specified format in TSLUK KMS (Knowledge Repository)</li></ul> <!-- circle bullets end -->
<li>Data Release activities are carried out and delivered on time with no slips - SQL scripting and execution, backend as well as front end validations.</li>
<li>Implemented automation using shell scripting for repeated activities which reduced manual errors and saved human effort to a great extent.</li>
<li>Involved direct client interaction including principal designers, architects, release controllers etc. on a day-to-day basis</li>
                                            </ul></p>
                                        </div><!-- //.panel-body -->
                                    </div><!-- //.panel-collapse -->
                                </div><!-- //.panel -->
                            </div><!-- //.resume-item3 -->
							
							<!-- resume-item4 -->
                            <div class="resume-item">
                                <div class="resume-year">
                                    <span class="resume-year">Jan - Aug 2012</span>
                                </div>
                                <!-- //.resume-year -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="heading4">
                                        <div class="panel-title">
										<div class="resume-btn">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#work4" aria-expanded="false" aria-controls="work4"></a>
										</div><!-- //.resume-btn -->
                                            <h4 class="resume-title">Programmer Analyst - Scope Watch Tool</h4>
                                        </div>
                                        <!-- //.panel-title -->
                                    </div>
                                    <!-- //.panel-heading -->

                                    <div id="work4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                         <div class="panel-body text-dark">
                                             <div class="subheading1">Key Responsibilities:</div>
                                             <p><ul>
											 <li>Interactions with various project leads and architects during requirement gathering phase</li>
<li>Designing wire frames, checking the feasibility and identifying possible risks</li>
<li>Developed and implemented from scratch using Ext-JS framework, core java, HTML, AJAX, JavaScript, JSP, Servlet and MySQL (SQLyog)</li>
<li>Code integration and bug fixing</li>
<li>Created test data, performed end to end testing and fixed bugs during testing phase</li>
<li>Provided support post deployment</li>
                                            </ul></p>
                                        </div><!-- //.panel-body -->
                                    </div><!-- //.panel-collapse -->
                                </div><!-- //.panel -->
                            </div><!-- //.resume-item4 -->
							
                        </div><!-- //.panel-group -->
                    </div><!-- //.col-md-10 -->
					</div>					
					<!-- //.EXPERIENCE -->
					
					<!-- EDUCATION -->
					<div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center" style="padding:20px 0 50px;">EDUCATION</h3>
						</div><!-- //.col-md-12 -->
					</div><!-- //.row1 -->
					
					<div class="row">
					<div class="col-lg-12">
					<!-- timeline -->
					<ul class="timeline">
					<li>
						<div class="timeline-image">
							<div class="timeline-content">2017 - 2021</div>
						</div> <!-- //.timeline-image -->
						<div class="timeline-panel">
							<div class="timeline-heading">
								<div class="timeline-title1">MASENO UNIVERSITY</div>
								<div class="title2">Bachelor of Computer Science and Technology</div>
							</div> <!-- //.timeline-heading -->
							<HR/>
							<div class="timeline-body">
								<p>Specialization: Software Engineer</p>
							</div> <!-- //.timeline-body -->
						</div> <!-- //.timeline-panel -->
					</li> <!-- //.item1 -->
					<li class="timeline-inverted">
						<div class="timeline-image">
							<div class="timeline-content">2012 - 2016</div>
						</div> <!-- //.timeline-image -->
						<div class="timeline-panel">
							<div class="timeline-heading">
								<div class="timeline-title1"> Kiareni Mixed Secondary School</div>
								<div class="title2"> Secondary Education (S.E)</div>
							</div> <!-- //.timeline-heading -->
							<HR/>
							<div class="timeline-body">
								<p>Specialization: Computer Science</p>
							</div> <!-- //.timeline-body -->
						</div> <!-- //.timeline-panel -->
					</li> <!-- //.item2 -->
					<li>
						<div class="timeline-image">
							<div class="timeline-content">2004 - 2011</div>
						</div> <!-- //.timeline-image -->
						<div class="timeline-panel">
							<div class="timeline-heading">
								<div class="timeline-title1">Kiareni Primary School</div>
								<div class="title2">Primary Education (P.E.)</div>
							</div> <!-- //.timeline-heading -->
							<HR/>
							<div class="timeline-body">
								<p>Major:  Science</p>
							</div> <!-- //.timeline-body -->
						</div> <!-- //.timeline-panel -->
					</li> <!-- //.item3 -->
					
					</ul> <!-- //.timeline -->
				</div><!-- //.col-lg-12 -->
				</div><!-- //.row2 -->
					
				<!-- //.EDUCATION -->
					
				</div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
<!-- //PORTFOLIO SECTION -->

<!-- WHY ME SECTION -->
	<section id="whyme" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
            <div class="row"> 
								
				<div class="row">
                    <div class="col-md-12">
                        <h2 class="sec-title text-center">Why Me?</h2>
						<h4 class="sec-subtitle text-center">Throw me to the wolves and I will return leading the pack.</h4>
						<span class="separator center"></span>
					</div><!-- //.col-md-12 -->
				</div><!-- //.row-header -->
				
				<!-- MILESTONES -->
				<div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center" style="padding:30px 0 30px;">MILESTONES</h3>
					</div><!-- //.col-md-12 -->
				</div><!-- //.row1 -->
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="achievement-box"> <i class="fa fa-clock-o"></i> 
							<span class="count">4800</span>
							<div class="milestone-text">Hours Worked</div>
						</div>
					</div> <!-- col-md-3 -->
					<div class="col-md-3 col-sm-3">
						<div class="achievement-box"> <i class="fa fa-check-square-o"></i> 
							<span class="count">132</span>
							<div class="milestone-text">Successful Projects</div>
						</div>
					</div> <!-- col-md-3 -->
					<div class="col-md-3 col-sm-3">
						<div class="achievement-box"> <i class="fa fa-trophy"></i> 
							<span class="count">16</span>
							<div class="milestone-text">Awards won</div>
						</div>
					</div> <!-- col-md-3 -->
					<div class="col-md-3 col-sm-3">
						<div class="achievement-box"> <i class="fa fa-pencil"></i> 
							<span class="count">36</span>
							<div class="milestone-text">Blog Posts</div>
						</div>
					</div> <!-- col-md-3 -->
				</div> <!-- row2-milestones -->
				<!-- //MILESTONES -->
				
				<!-- CERTIFICATIONS -->
				<div class="caa">
				<div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center" style="padding-bottom:20px;">CERTIFICATIONS</h3>
					</div><!-- //.col-md-12 -->
				</div><!-- //.row1 -->
				<div class="row">
                    <div class="col-md-6 col-sm-12">
                    <div class="whyme-text">
						<ul>
						<li>Oracle Certified Professional, Java SE6 Programmer</li>
						<li>Brainbench Certified in Java 5 fundamentals, Oracle PL/SQL and Business Communication</li>						
						<li>Cognizant Certified Level 0: Telecommunications Professional</li>
						<li>Cognizant Certified Level 1: Telecom - Wireless</li>
						</ul>
						</div> <!-- //.whyme-text --> 	
					</div><!-- //.col-md-12 -->
					<div class="col-md-6 col-sm-12">
                    <div class="whyme-text">
						<ul>
						<li>Cognizant ComEx (Communication Excellence) Certified</li>
						<li>BULATS (Business Language Testing Service) Certified</li>
						<li>ISTQB Foundation Level Certified</li>
						<li>Honor Code Certified in Introduction to Linux (offered by LinuxFoundationX)</li>
						</ul>
					</div> <!-- //.whyme-text --> 	
					</div> <!-- //.col-md-12 -->
				</div> <!-- //.row2-certifications -->
				</div> <!-- //.caa -->
				<!-- //CERTIFICATIONS -->
				
				<!-- AWARDS -->
				<div style="padding-bottom:30px;">
				<div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center" style="padding:30px 0 30px;">AWARDS</h3>
					</div><!-- //.col-md-12 -->
				</div><!-- //.row1 -->
				<div class="row">
                    <div class="col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 awards">
						<div class="item">
                            <i class="fa fa-gift"></i>
							<div class="award-text">
                                <h4>KUDOS Awards(Jul and Nov 2014)</h4>
								<p class="text-dark">Quality Interaction with Clients</p>
                            </div> <!-- //.award-text -->
                        </div> <!-- //.item1 -->
						<div class="item">
                            <i class="fa fa-star"></i>
							<div class="award-text">
                                <h4>SHINING STAR Award (Q1 2014)</h4>
								<p class="text-dark">Efficiency in leading the Team</p>
                            </div> <!-- //.award-text -->
                        </div> <!-- //.item2 -->
						<div class="item">
                            <i class="fa fa-certificate"></i>
							<div class="award-text">
                                <h4>ACE Award (Nov 2013)</h4>
								<p class="text-dark">Developing an Effort Estimation Model</p>
                            </div> <!-- //.award-text -->
                        </div> <!-- //.item3 -->
					</div> <!-- //.col-md-4 -->
					<div class="col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 awards">
						<div class="item">
                            <i class="fa fa-trophy"></i>
							<div class="award-text">
                                <h4>KUDOS Award (May 10, 2013)</h4>
								<p class="text-dark">Single handedly delivering critical Releases</p>
                            </div> <!-- //.award-text -->
                        </div> <!-- //.item1 -->
						<div class="item">
                            <i class="fa fa-certificate"></i>
							<div class="award-text">
                                <h4>ACE Award (Dec 2012)</h4>
								<p class="text-dark">Exemplary performance in project Virage</p>
                            </div> <!-- //.award-text -->
                        </div> <!-- //.item2 -->
						<div class="item">
                            <i class="fa fa-bookmark"></i>
							<div class="award-text">
                                <h4>FLASH and DEXTER Awards</h4>
								<p class="text-dark">Most Enthusiastic in ComEx Program</p>
                            </div> <!-- //.award-text -->
                        </div> <!-- //.item3 -->				
					</div> <!-- //.col-md-4 -->
				</div> <!-- //.row2-certifications -->
				</div> <!-- //.style -->
				<!-- //AWARDS -->
				
				<!-- ACHIEVEMENTS -->
				<div class="caa">
				<div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center" style="padding-bottom:20px;">ACHIEVEMENTS</h3>
					</div><!-- //.col-md-12 -->
				</div><!-- //.row1 -->
				<div class="row">
                    <div class="col-md-6 col-sm-12">
                    <div class="whyme-text">
						<ul>
						<li>Performed at Cognizant TED event 2015, as part of ComEx event.</li>
						<li>"STAR OF THE MONTH" - most interactive in ComEx - Praxis journey (Jan 2014).</li>
						<li>"STAR OF THE DAY" - Received appreciation for resolving an outstanding issue in Enable application for code release (Nov 22, 2013).</li>
						</ul>
						</div> <!-- //.whyme-text --> 	
					</div><!-- //.col-md-12 -->
					<div class="col-md-6 col-sm-12">
                    <div class="whyme-text">
						<ul>
						<li>"WAY TO GO" card - most enthusiastic participant for Cognorators session (Nov 12, 2013).</li>
						<li>Entered "HALL OF FAME" for the innovation made as part of the "Data release automation for Domain J" innovation campaign (Oct 31, 2013).</li>
						<li>Was recognized in TSL-Virage Newsletter for spear heading a crucial RRT (Jun 12, 2013).</li>
						</ul>
					</div> <!-- //.whyme-text --> 	
					</div> <!-- //.col-md-12 -->
				</div> <!-- //.row2-achievements -->
				</div> <!-- //.caa -->
				<!-- //ACHIEVEMENTS -->
				
			</div><!-- //.row-sec-content -->
				
			</div><!-- //.section-content -->
        </div><!-- //.container -->
	</section>
<!-- //WHY ME SECTION -->

<!-- CONTACT SECTION START -->
	<section id="contact" class="section">
        <div class="container-fluid sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">Contact Me</h2>
                        <h4 class="sec-subtitle text-center">Have a project to discuss?</h4>
                        <span class="separator center"></span>
                    </div><!-- //.col-md-12 -->
                </div><!-- //.row1 -->
				
				<div class="row">	
				<div class="col-md-12 text-center">
				<ul class="list-inline social-icon">
				<li><a href="#" target="_top" title="servanterick@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                <li><a href="#" target="_blank" title="freeCodeCamp"><i class="fa fa-code"></i></a></li>
                <li><a href="#" target="_blank" title="codepen"><i class="fa fa-codepen"></i></a></li>
                <li><a href="#" target="_blank" title="github"><i class="fa fa-github"></i></a></li>
                <li><a href="#" target="_blank" title="linkedIn"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
				</ul>
				</div> <!-- //.col-md-12 -->
				</div><!-- //.row2 -->
				
			</div><!-- //.section-content -->
        </div><!-- //.container -->
	</section>
<!-- //CONTACT SECTION -->

<!-- //FOOTER SECTION -->
	<footer class="text-center">
		<div class="to-top">
			<a class="btn btn-custom" href="#home"><i class="fa fa-angle-up"></i></a>
				
			<div class="text-center" style="padding-top:5px;">   <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p></div>
		</div> <!-- //.to-top -->
	</div> <!-- //.footer -->
<!-- //FOOTER SECTION -->			
</body>