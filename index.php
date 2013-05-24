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
                
            <p><a href="http://www.fart-sounds.net/fart_sound_board.htm" title="Rectal Control - Give us your money" class='fade'><img src="img/buy_now_CTA.jpg" width="220" height="178" alt="Buy Now" /></a></p> 
            <script>
$('.cta_right a').click(function(){
    alert('YOU WILL NOW BE TAKEN TO THE SECURE INTERNET ELECTRONIC PAYMENT AREA TO DOWNLOAD A PDF AND THEN PRINT OUT THE PDF AND THEN SEND IT TO THIS ADDRESS ALONG WITH CASH PAYMENT: 338 ROAD. CLICK OK TO PROCEED.');
});

$('.quote_area a').click(function(){
    alert('YOU WILL NOW BE TAKEN TO THE SECURE INTERNET ELECTRONIC PAYMENT AREA TO DOWNLOAD A PDF AND THEN PRINT OUT THE PDF AND THEN SEND IT TO THIS ADDRESS ALONG WITH CASH PAYMENT: 338 ROAD. CLICK OK TO PROCEED.');
});

</script>
          </div><!-- end of cta right container -->
		
        </div><!-- start of highlight box 1 -->
                
    </div><!-- end of cta area -->
    
    </div><!-- end of header left -->
    
    
    
    <!-- start of header right -->
    <div id="header_right">
    
    	<img src="img/software_box.png" width="284" height="418" alt="software box" />
        
    </div><!-- end of header right -->
    
  
  </div><!-- end of header area -->
  
  
<!-- *************************************************************************
***********************  START OF TABBED AREA  *******************************
************************************************************************** -->

  <!-- start of tabs -->
  <ul class="tabs">
    <li><a href="#tab1">Features</a></li>
    <li><a href="#tab2">Also Features</a></li>
    <li><a href="#tab3">Benefits</a></li>
    <li><a href="#tab4">Pepperoni Goon</a></li>
</ul><!-- end of tabs -->

		<!-- start of tab container -->
  <div class="tab_container">
        
        <!-- ************  START OF TABBED CONTENT AREA 1  ************* -->

    		<!-- start of tab content 1 -->
            <div id="tab1" class="tab_content">
            
    			<!-- start of tab content left -->
                <div class="tab_left">
    				<div class="tab_header">It's time to make a simple thing of your living</div>
        			<p>How can you know the FART advantage? Enter it with phone call. Our large reason for success to you is a specification that you know after this: proven results-driven math, science, and then tremors. Tremors you can count on.</p>
        			
                    <!-- start of blockquote -->
                    <blockquote>I tried the banana slicer and found it unacceptable. As shown in the picture, the slices is curved from left to right. All of my bananas are bent the other way.
                    <div class="quote_from">Django Reinhardt, CEO of 2013</div>
                    </blockquote><!-- end of blockquote -->
        
    			</div><!-- end of tab content left -->
    
    			<!-- start of tab content right -->
              <div class="tab_right">
                <img src="img/iphone.jpg" width="327" height="258" alt="iphone" />
                </div><!-- end of tab content right -->
    		
            </div><!-- end of tab content 1 -->
    
    	<!-- ************  START OF TABBED CONTENT AREA 2  ************* -->
        
        	<!-- start of tab content 2 -->
<div id="tab2" class="tab_content">
            
    			<!-- start of tab content left -->
                <div class="tab_left">
    				<div class="tab_header">Amazing Cosmic Assurance from Our Assurance Team</div>
        			<p>We regularly matrix synergistic vortals while targeting value-added networks. How? Don't be William, it is simple: We reintermediate e-business channels and engage one-to-one e-tailers. It's the sort of bleeding-edge synergies you can expect from FART.</p>
        			
                    <!-- start of blockquote -->
                    <blockquote>Lol what an incredible company.
If you know me, you know that I love Mexican food of all kinds. Whether it is cheap burritos in west Texas, high end alta cocina, regional dishes found in small Mexican villages, or moles that I make in my own kitchen, I love Mexican food. 
                    <div class="quote_from">Gym Teacher Person
	                  </div>
                    </blockquote><!-- end of blockquote -->
        
    			</div><!-- end of tab content left -->
    
    			<!-- start of tab content right -->
                <div class="tab_right">
                <img src="img/boxes.jpg" width="327" height="258" alt="iphone" />
                </div><!-- end of tab content right -->
    		
            </div><!-- end of tab content 2 -->
            
            
        <!-- ************  START OF TABBED CONTENT AREA 3  ************* -->
            
            <!-- start of tab content 3 -->
<div id="tab3" class="tab_content">
            
    			<!-- start of tab content left -->
                <div class="tab_left">
    				<div class="tab_header">Sometimes you just need to know who you are.</div>
        			<p>Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner Boner.</p>
        			
                    <ul>
            			<li>Resets on commanding.</li>
            			<li>Batteries or not at all batteries.</li>
            			<li>Gym Culture.</li>
           		  </ul>
        
    			</div><!-- end of tab content left -->
    
    			<!-- start of tab content right -->
                <div class="tab_right">
                <img src="img/mac_box.jpg" width="327" height="258" alt="iphone" />
                </div><!-- end of tab content right -->
    		
            </div><!-- end of tab content 3 -->
            
            
            <!-- ************  START OF TABBED CONTENT AREA 4  ************* -->
            
            <!-- start of tab content 4 -->
<div id="tab4" class="tab_content">
            
    			<!-- start of tab content left -->
                <div class="tab_left">
    				<div class="tab_header">You are our partner, and we die together</div>
        			<p>I like the punch it works well for what i need it for. I use it as a card punch. Sometimes i have trouble with it sticking in the down position but the bottom opens witch works well to get it unstuck.</p>
                    
                    <p>The Card Punch is Henry, a basecourt apple-john. Henry hello</p>
                    
                    <p><a href="http://www.fart-sounds.net/fart_sound_board.htm" title="Instant Download - Get it today!" class='fade'><img src="img/large_buy_now_button.png" width="271" height="52" alt="buy now" /></a></p>
        			
                    
        
</div><!-- end of tab content left -->
    
    			<!-- start of tab content right -->
                <div class="tab_right">
                <img src="img/iphone.jpg" width="327" height="258" alt="iphone" />
                </div><!-- end of tab content right -->
    		
            </div><!-- end of tab content 4 -->
            
            
  </div><!-- end of tab container -->
    
    
    
    <!-- start of full width container -->
  <div class="full_width">
    
    	<img src="img/small_quote.png" width="71" height="42" alt="quotes" />
    	<span class="quote_header">See what our customers are audio from mouth</span>
    
    
    		<!-- start of quote area container -->
	<div class="quote_area">
    
    			<!-- start of ticker container -->
    			<div class="ticker">
    
    				<!-- start of news -->
					<div id="news_div">
      
      					<ul>
							<li>Ayo please this shit the real deal apple-scrapple. You ain't seen no shit hit a (expletive) anus from like two countries away fo real it serious lay down that bread son</li>
						<li>I concur this an absolutely delightful corporate service offered by our friends at FART. There are two things I love in life and (edited for content).</li>
                    	<li>Ok where do I write the testimonial?</li>
                    	<li>Picard and Vosh, to me, was just never believable.</li>
                    	<li>A part of me died after I watched 'All Good Things'. I knew it would never be new again. But I didn't count on the horribly deteriorating memory of humans as they age. Good stuff.</li>		
					</ul>
       
            
        			</div><!-- start of news -->
        
        	</div><!-- end of ticker container -->
        
      </div><!-- end of quote area container -->
        
    <a href="http://kidshealth.org/kid/talk/yucky/fart.html" title="Instant Download - Get it today!" class='fade'><img src="img/large_buy_now_button.png" width="271" height="52" alt="buy now" /></a>
    
    </div><!-- end of full width container -->

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