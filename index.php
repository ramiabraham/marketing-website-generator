<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Marketing Website Generator</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<!--[if IE 7]>

<link rel="stylesheet" type="text/css" media="all" href="css/main_ie7.css" />

<![endif]-->

<!-- js -->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/twitter.js" type="text/javascript" charset="utf-8"></script>
        
<!-- *************************************************************************
********TWITTER FEED OF OUR FOUNDER  AND CEO IMPORTANT EXECUTIVE MAN?**********
************************************************************************** -->

<script type='text/javascript'>
    $(document).ready(function(){
        $(".tweet").tweet({
            username: "ramiabraham",
            join_text: "auto",
            avatar_size: 0,
            count: 1,
            auto_join_text_default: "It was proclaimed,", 
            auto_join_text_ed: "Our glorious founder and CEO",
            auto_join_text_ing: "Our mighty leader said",
            auto_join_text_reply: "Our mighty leader spoke to",
            auto_join_text_url: "We linked to",
            loading_text: "Contacting twitter satellite...loading...OMG LOADING..."
        });
    });
</script>

<?php include_once('marketing_values.php'); ?>

</head>

<body>



<!-- start of page wrapper -->
<div class="top-bar"></div>
<div id="wrapper">

<!-- BRILLIANT MARKETING LOGO -->

  <!-- start of top logo -->
  <div id="top_logo">
  		<h1 class="marketing_logo_first"><?php echo $logo_one_items[array_rand($logo_one_items)]; ?></h1>
  		<h1 class="marketing_logo_second"><?php echo $logo_two_items[array_rand($logo_two_items)]; ?></h1>&reg;
  		
  		<div id="bs_logo_second_word"></div>
</div><!-- end of top logo -->
    
  <!-- start of top social -->
  <div id="top_bs_slogan">
  
  		   The global leader in <?php echo $global_leader_in[array_rand($global_leader_in)]; ?>.   
  </div><!-- end of top social -->
  
  
  
<!-- 'COMPANY' INFORMATION -->
  
  
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
    
    
    <div class="genuine-award-wrapper">
    <div class="genuine-award"><p>AWARD: Best Internet <br /><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)]; ?>.</p></div>
    </div>
    
    <div class="genuine-award-wrapper">
    <div class="genuine-award"><p>AWARD: Best Internet <br /><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)]; ?>.</p></div>
    </div>
    
    <div class="genuine-award-wrapper">
    <div class="genuine-award"><p>AWARD: Best Internet <br /><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)]; ?>.</p></div>
    </div>
    
    <div class="genuine-award-wrapper">
    <div class="genuine-award"><p>AWARD: Best Internet <br /><?php echo $header_banner_noun_one[array_rand($header_banner_noun_one)]; ?>.</p></div>
    </div>
       
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
  		<h2 class="marketing_logo_second">HOW TO <?php echo $header_banner_verb_one[array_rand($header_banner_verb_one)] . ' ' .  $header_banner_noun_one[array_rand($header_banner_noun_one)] ?>:</h2>
  		<div class="dollar_sign">$</div>
  		<div class="edition"><?php echo $logo_one_items[array_rand($logo_one_items)]; ?> <?php echo $logo_one_items[array_rand($logo_one_items)]; ?> <?php echo $logo_one_items[array_rand($logo_one_items)]; ?> EDITION</div>
	    	
    	</div><!-- end of product box -->
        
        <div class="cta_button embossed-link"><a href="http://ramiabraham.com/buzzword-generator-shortcode/">WP Version</a></div>
        
    </div><!-- end of header right -->
    
  
  </div><!-- end of header area -->

</div><!-- end of page wrapper -->


<!-- start of footer wrapper -->
<div id="footer_wrapper">

<!-- start of footer container -->
<div id="footer_container">

<!-- start of footer left -->
<div id="footer_left">

	<div class="footer_heading">Just add your Twitter Feed on line 31</div>

	<div class="tweet"></div>

</div><!-- end of footer left -->

<!-- start of footer left 2 -->
<div id="footer_left2">

	<div class="footer_heading">Follow Us</div>

		  		   (On the Internet)    
    
</div><!-- end of footer left 2 -->

	<!-- start of footer right -->
	<div id="footer_right">
	
    	Helping you <?php echo $header_banner_verb_one[array_rand($header_banner_verb_one)]; ?>.
    
    </div><!-- end of footer right -->

<!-- start of footer bottom -->
<div id="footer_bottom">

<div class="copyright">&copy; 19<?php echo $header_banner_year.'-' . date('Y') . ' ' . $logo_one_items[array_rand($logo_one_items)] . $logo_two_items[array_rand($logo_two_items)]; ?>,  All rights reserved.  |  <a href="http://www.youtube.com/watch?v=4F7rbSqpmPc&sns=em">Contact</a>  |  <a href="http://www.youtube.com/watch?v=4F7rbSqpmPc&sns=em">Help &amp; Support</a></div>


</div><!-- end of footer bottom -->

</div><!-- end of footer container -->
</div><!-- end of footer wrapper -->

</body>
</html>
