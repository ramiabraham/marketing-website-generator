<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Marketing Website Generator</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<!--[if IE 7]>

<link rel="stylesheet" type="text/css" media="all" href="css/main_ie7.css" />

<![endif]-->

<!-- JavaScript Files -->

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/twitter.js" type="text/javascript" charset="utf-8"></script>
<script src="js/tipsy.js" type="text/javascript" charset="utf-8"></script>
<script src="js/tabs.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jcarousellite.min.js"></script>

<script src="js/bs.js" type="text/javascript"></script>
        
<!-- *************************************************************************
********TWITTER FEED OF OUR FOUNDER  AND CEO IMPORTANT EXECUTIVE MAN?**********
************************************************************************** -->

<script type='text/javascript'>
    $(document).ready(function(){
        $(".tweet").tweet({
            username: "ramiabraham",
            join_text: "auto",
            avatar_size: 0,
            count: 2,
            auto_join_text_default: "It was proclaimed,", 
            auto_join_text_ed: "Our glorious founder and CEO",
            auto_join_text_ing: "Our mighty leader said",
            auto_join_text_reply: "Our mighty leader spoke to",
            auto_join_text_url: "We linked to",
            loading_text: "Contacting twitter satellite...loading...OMG LOADING..."
        });
    });
</script>

<!-- *************************************************************************
***********************  QUOTE TICKER SCRIPT   *******************************
************************************************************************** -->
<script type="text/javascript">
		$(document).ready(function(){	
            $(".ticker").jCarouselLite({
                auto: 5000,
                vertical: true,
                visible: 1
            });
		});	
</script>

<?php include_once('marketing_values.php'); ?>

</head>

<body>



<!-- start of page wrapper -->
<div id="wrapper">

<!-- *************************************************************************
*****************  TOP BANNER FOR FART LOGO AND WHATNOT   ********************
************************************************************************** -->

  <!-- start of top logo -->
  <div id="top_logo">
  		<h1 class="marketing_logo_first"><?php echo $logo_one_items[array_rand($logo_one_items)]; ?></h1>
  		<h1 class="marketing_logo_second"><?php echo $logo_two_items[array_rand($logo_two_items)]; ?></h1>&reg;
  		
  		<div id="bs_logo_second_word"></div>
</div><!-- end of top logo -->
  
  
        <script type='text/javascript'>
  $(function() {
    
    $('#example-1').tipsy();
    
    $('#north').tipsy({gravity: 'n'});
    $('#south').tipsy({gravity: 's'});
    $('#east').tipsy({gravity: 'e'});
    $('#west').tipsy({gravity: 'w'});
    
    $('#auto-gravity').tipsy({gravity: $.fn.tipsy.autoNS});
    
    $('.fade').tipsy({fade: true});
    
    $('#example-custom-attribute').tipsy({title: 'id'});
    $('#example-callback').tipsy({title: function() { return this.getAttribute('original-title').toUpperCase(); } });
    $('#example-fallback').tipsy({fallback: "?" });
    
    $('#example-html').tipsy({html: true });
    
  });
</script>


  
  <!-- start of top social -->
  <div id="top_social">
  
  		   <ul class="social">
           
            	<li><a href="http://catfacts.org" title="facebook" class='fade'><img src="img/facebook.jpg" width="23" height="22" alt="FART" /></a></li>
  				<li><a href="http://www.halloweenexpress.com/clown-costumes-c-512.html" title="Delicious" class='fade'><img src="img/delicious.jpg" width="23" height="22" alt="FART" /></a></li>
  				<li><a href="http://catfacts.org" title="Digg" class='fade'><img src="img/digg.jpg" width="23" height="22" alt="Digg" /></a></li>
  				<li><a href="http://www.halloweenexpress.com/clown-costumes-c-512.html" title="Twitter" class='fade'><img src="img/twitter.jpg" width="23" height="22" alt="Twitter" /></a></li>
  				<li><a href="http://www.dollardays.com/wholesale-laxatives.html" title="Stumbleupon" class='fade'><img src="img/stumbleupon.jpg" width="23" height="22" alt="Stumbleupon" /></a></li>
                
    </ul>
    
  </div><!-- end of top social -->
  
  
  
<!-- *************************************************************************
***************** MAIN HEADER AREA WITH INTRO AND IMAGE   ********************
************************************************************************** -->
  
  
  <!-- start of header area -->
  <div id="header_area">
  
  	<!-- start of header left -->
    <div id="header_left">
    
    <span class="header_title">Welcome to the global leader in <?php echo $global_leader_in[array_rand($global_leader_in)] . ', the future of ' . 
    
    $header_banner_noun_one[array_rand($header_banner_noun_one)] . '. We ' .  
    
    $header_banner_verb_one[array_rand($header_banner_verb_one)] . ' and ' . 
    
    $header_banner_verb_one[array_rand($header_banner_verb_one)] . ' ' . 
    
    $header_banner_noun_one[array_rand($header_banner_noun_one)] . ' ' . 												
    $bs_number_one[array_rand($bs_number_one)] . ' of times per ' . 											
    $bs_number_two[array_rand($bs_number_two)] .  '. It\'s what we 
    
    do. Let\'s ' . $header_banner_verb_one[array_rand($header_banner_verb_one)] . ' your business today!'; 
    ?></span>
    
    <p>Click here to see just a tiny sample of our amazing services:</p>
    
    <FORM NAME="frmTest" onsubmit="return false">
<INPUT TYPE="TEXT" NAME="txtTest" SIZE="50"><BR>
<INPUT TYPE="BUTTON" VALUE="See Services" onClick="getResult();">	
</FORM>
    
    <!-- start of cta area -->
    <div id="cta_area">
    
    	<!-- start of highlight box 1 -->
        <div class="highlight_box1">
        
        	<div id="txtTest" class="highlight_box1_title">Since our founding in 19<?php echo $header_banner_year; ?>, we've offered:</div>
            
            <!-- start of cta left container -->
            <div class="cta_left">
                
            <ul>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            </ul>
            
            </div><!-- end of cta left container -->
            
            <!-- start of cta right container -->
          <div class="cta_right">
                
            <ul>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            <li><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?></li>
            </ul>
            
          </div><!-- end of cta right container -->
		
        </div><!-- start of highlight box 1 -->
                
    </div><!-- end of cta area -->
    
    </div><!-- end of header left -->
    
    
    
    <!-- start of header right -->
    <div id="header_right">
    
    	<div class="product_box">
	    	<p>Our flagship product:</p>
	    	<h1 class="marketing_logo_first"><?php echo $logo_one_items[array_rand($logo_one_items)]; ?>-PRO</h1>
  		<h2 class="marketing_logo_second">HOW TO <?php echo $header_banner_verb_one[array_rand($header_banner_verb_one)] ?> <?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)] ?>:</h2>
  		<div class="dollar_sign">$</div>
  		<div class="edition"><?php echo $logo_one_items[array_rand($logo_one_items)]; ?> <?php echo $logo_one_items[array_rand($logo_one_items)]; ?> <?php echo $logo_one_items[array_rand($logo_one_items)]; ?> EDITION</div>
	    	
    	</div><!-- end of product box -->
        
    </div><!-- end of header right -->
    
  
  </div><!-- end of header area -->

</div><!-- end of page wrapper -->


<!-- start of footer wrapper -->
<div id="footer_wrapper">

<!-- start of footer container -->
<div id="footer_container">

<!-- start of footer left -->
<div id="footer_left">

	<div class="footer_heading">Twitter Feed</div>

	<div class="tweet"></div>

</div><!-- end of footer left -->

<!-- start of footer left 2 -->
<div id="footer_left2">

	<div class="footer_heading">Follow Us</div>

		  		   <ul class="social2">
           
            	<li><a href="#" title="facebook" class='fade'><img src="img/facebook.jpg" width="23" height="22" alt="facebook" /></a></li>
  				<li><a href="#" title="Delicious" class='fade'><img src="img/delicious.jpg" width="23" height="22" alt="Delicious" /></a></li>
  				<li><a href="#" title="Digg" class='fade'><img src="img/digg.jpg" width="23" height="22" alt="Digg" /></a></li>
  				<li><a href="http://youtu.be/PtcqXFZFiWo" title="Twitter" class='fade'><img src="img/twitter.jpg" width="23" height="22" alt="Twitter" /></a></li>
  				<li><a href="http://youtu.be/o6hXnfW36Bg" title="Stumbleupon" class='fade'><img src="img/stumbleupon.jpg" width="23" height="22" alt="Stumbleupon" /></a></li>
                
    </ul>
    
    
</div><!-- end of footer left 2 -->

	<!-- start of footer right -->
	<div id="footer_right">
	
    	<img src="img/bottom_logo.png" width="139" height="54" alt="logo" />
    
    </div><!-- end of footer right -->

<!-- start of footer bottom -->
<div id="footer_bottom">

<div class="copyright">&copy; 2013-2100 FART,  All rights reserved  |  <a href="http://www.youtube.com/watch?v=4F7rbSqpmPc&sns=em">Contact</a>  |  <a href="http://www.youtube.com/watch?v=4F7rbSqpmPc&sns=em">Help &amp; Support</a></div>


</div><!-- end of footer bottom -->

</div><!-- end of footer container -->
</div><!-- end of footer wrapper -->

</body>
</html>
