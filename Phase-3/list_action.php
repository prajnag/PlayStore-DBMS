<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>Playstore</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="fonts/Bebas/stylesheet.css">
		<link rel="stylesheet" href="fonts/HelveticaNeue/font.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Important Owl stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<!-- Color box-->
		<link rel="stylesheet" href="css/colorbox.css" />
		<!-- responsive tabs -->
		<link type="text/css" rel="stylesheet" href="css/responsive-tabs.css" />
		<!-- home slider-->
		<link href="css/pgwslider.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet" media="screen">	
        <link href="responsive.css" rel="stylesheet" media="screen">
        <script>
function myFunction() {
  alert("Downloading!");
}
</script>		
	</head>

	<body>
	
		<!-- facebook javascript code-->
		
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=549094108454486";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		
		<!-- facebook javascript code-->
		<div class="header_area">
			<div class="centre header">
				<div class="logo fix floatleft">
						<a href="welcome.html">
							<img src="images/logo.png" alt="logo"/>
						</a>					
				</div>
				<div class="menu_area floatright">
					<div class="fix search_site">
						<form>
							<p><input type="text" class="search" placeholder="Ask for apps"/><input type="submit" class="search_icon" value="search"/></p>
						</form>
						<div class="top_social fix">
							<ul>
								<li><a href=""><i class="fa fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fa fa-twitter-square"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus-square"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="top_menu">
						<ul id="nav">
							<li><a href="welcome.html">Home</a></li>
							<li><a href="androidnews.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> <!-- End header area-->

					<div class="fix single_home_content">
						<div class="fix single_home_content_container">
							
			
                            <?php
$host        = "host = 127.0.0.1";
$port        = "port = 5432";
$dbname      = "dbname = playstore";
$credentials = "user = postgres password=hello";
$db = pg_pconnect( "$host $port $dbname $credentials");
$sec = htmlspecialchars($_GET['genre']);
$sql =<<<EOF
  SELECT * from apps where appgen='$sec';
EOF;
  $ret2 = pg_query($db,$sql);
   if(!$ret2) {
      echo pg_last_error($db);
      exit;
   } 
   echo "<br>";

   echo "<br>";
   while($row2 = pg_fetch_array($ret2)) {
    echo('<center><div class="card">
    <div class="card-body">');
    echo "<hr>";
          echo "App ID: ". $row2[0] . "";
          echo "<br>";
          echo $row2[1];
          echo "<br>";
          echo "Price: ". $row2[2] . "";
          echo "<br>";
          echo "App Description: ". $row2[3] . "";
          echo "<br>";
          echo "App Developer: ". $row2[4] . "";
          echo "<br>";
          echo '<button onclick="myFunction()"> Download </button>';
          echo "<br>";
          echo "<hr>";
          echo "<br>";

   }

 ?>
								
								
							</div>
							
							
							
							

		 <!-- End home content-->
				
		</div> <!-- End main content-->
		
		<div>
		<div>
					<div class="fix footer_menu floatright">
					<ul>
						<li><a href="welcome.html">Home</a></li>
						<li><a href="page.html">About</a></li>
					
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</div> <!-- End footer bottom area-->
		
		
		<script src="http://code.jquery.com/jquery.js"></script>

		<script src="js/pgwslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.pgwSlider').pgwSlider();
			});
		</script>
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>	
		
		<!-- Include owl js plugin -->
		<script src="js/owl.carousel.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			 
			$("#owl-example").owlCarousel({
			
			items : 4,
			itemsCustom : false,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,2],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
			singleItem : false,
			itemsScaleUp : false,
			navigation : true,
			navigationText : ["prev","next"],
			pagination : false
			
			});
			 
			});
		</script>
		
    <!-- Responsive Tabs JS -->
    <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [4,5]
            });



        });
    </script>
	<script type="text/javascript">
		$('#report_link').click(function(){
		  $('#report').slideToggle('normal');
		});
		
		$('#report_link').click(function(){
		  $('#older_versions').hide('normal');
		});
		
		$('#older_version').click(function(){
		  $('#older_versions').slideToggle('normal');
		});
		
		$('#older_version').click(function(){
		  $('#report').hide('normal');
		});
		
	</script>
	
		<script src="js/jquery.colorbox.js"></script>
	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

	</body>
</html>
















