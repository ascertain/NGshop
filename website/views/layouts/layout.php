<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<?php
    // get root node if there is no document defined (for pages which are routed directly through static route)
   
?>
<head>
   
 
    <meta charset="utf-8">

    <script type="text/javascript">
        var language = '<?= $this->language ?>';
    </script>
<title>Nge Shop</title>
    <link rel="stylesheet" href="/static/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
    <link rel="stylesheet" href="/static/addons/superfish_responsive/superfish.css" type="text/css"/>
    <link rel="stylesheet" href="/static/css/template.css" type="text/css"/>
    <link rel="stylesheet" href="/static/css/updates.css" type="text/css"/>
	<link rel="stylesheet" href="/static/css/component.css" type="text/css"/>
    <link rel="stylesheet" href="/static/css/custom.css" type="text/css"/>

    <link rel="stylesheet" href="/static/addons/gritter/jquery.gritter.css" type="text/css"/>
    <link rel="stylesheet" href="/static/addons/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>


    <!-- This stylesheet only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/static/css/responsive-devices.css" type="text/css"/>

    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext"
          type="text/css" media="screen" id="google_font"/>
    <link rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext"
          type="text/css" media="screen" id="google_font_body"/>

    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/jquery.noconflict.js" type="text/javascript"></script>
    <script src="/static/js/modernizr.js" type="text/javascript"></script>
	<script src="/static/js/component.js" type="text/javascript"></script>

    <script src="/static/addons/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
   <link
	href="http://www.lego.com/globalnavigationservices/api/v1/global/styles/en-us/LEGO.Global.Full/TestPage"
	rel="stylesheet" />
                    <script
	src="http://www.lego.com/globalnavigationservices/api/v1/global/scripts/en-us/LEGO.Global.Full/TestPage"
	type="text/javascript"></script>
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="/static/css/fixes.css"/>
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="/static/js/respond.js"></script>
    <script type="text/javascript">
        var $buoop = {vs:{i:8, f:6, o:10.6, s:4, n:9}}
        $buoop.ol = window.onload;
        window.onload = function () {
            try {
                if ($buoop.ol) $buoop.ol();
            } catch (e) {
            }
            var e = document.createElement("script");
            e.setAttribute("type", "text/javascript");
            e.setAttribute("src", "http://browser-update.org/update.js");
            document.body.appendChild(e);
        }
    </script>
    <![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/static/js/html5.js"></script>
    <![endif]-->

    <!-- Custom page stylesheets -->
    <link rel="stylesheet" href="/static/sliders/iosslider/style.css" type="text/css"/>
    <!-- end custom page stylesheets -->

    <?php if($this->editmode) { ?>
        <link rel="stylesheet" href="/static/css/editmode.css" type="text/css"/>
    <?php } ?>

    <?=$this->placeholder('canonical')?>
<link rel="stylesheet" href="/static/css/style.css" type="text/css"/>
 <script type="text/javascript" src="/static/js/website.js"></script>
 <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
  <script src="/static/js/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>






        


        

        <script type="text/javascript">
            // THIS SCRIPT DETECTS THE ACTIVE ELEMENT AND ADDS ACTIVE CLASS
            (function ($) {
                $(document).ready(function () {
                    var pathname = window.location.pathname,
                            page = pathname.split(/[/ ]+/).pop(),
                            menuItems = $('#main_menu a');
                    menuItems.each(function () {
                        var mi = $(this),
                                miHrefs = mi.attr("href"),
                                miParents = mi.parents('li');
                        if (page == miHrefs) {
                            miParents.addClass("active").siblings().removeClass('active');
                        }
                    });
                });
            })(jQuery);
        </script>


       






<div class="container background-color">

<nav class="navbar navbar-default"><!--navbar-fixed-top-->
			  
			  
				  <div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>				
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li><a href="#">Link One</a></li>
				<li><a href="#about">Link Two</a></li>
				<li><a href="#contact">Link Three</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Link Four <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Action</a></li>
					<li><a href="#">Another action</a></li>
					<li><a href="#">Something else here</a></li>
					<li class="divider"></li>
					<li class="dropdown-header">Nav header</li>
					<li><a href="#">Separated link</a></li>
					<li><a href="#">One more separated link</a></li>
				  </ul>
				</li>
			  </ul>
			  
			  <button class="btn btn-warning pull-right shopping-btn" type="button">
				  <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				  Shopping Cart <span class="badge">42</span>
				</button>
				  
			</div><!--/.nav-collapse -->
		  
		</nav> 
		
		
		<div class="header clearfix">
			<form class="navbar-form navbar-right col-lg-6" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-primary">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					Submit
				</button>
				
          </form>
			
			<img src="/static/images/header/logo.png"/>
		</div>
		  
		  
		  
		<nav class="navbar navbar-inverse clearfix">
			
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				  <ul class="nav navbar-nav">
					<li class="active"><a href="#">Menu Link 1</a></li>
					<li><a href="#about">Menu Link 2</a></li>
					<li><a href="#contact">Menu Link 3</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown 4<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					  </ul>
					</li>
					<li><a href="#contact">Menu Link 5</a></li>
					<li><a href="#contact">Menu Link 6</a></li>
					<li><a href="#contact">Menu Link 7</a></li>
					<li><a href="#contact">Menu Link 8</a></li>
					<li><a href="#contact">Menu Link 9</a></li>
				  </ul>
				</div><!--/.nav-collapse -->
			
		</nav>
	

</div>


<section id="content">
	<div class="container background-color">
		
      <?= $this->layout()->content ?>
	
	</div>
</section>
<!-- end #content -->


<footer>
                        <div id="legofooter"></div>
  </footer>



<a href="#" id="totop"><?= $this->translate("TOP") ?></a>


<!--////////////////// Load JS Files -->

 <script>




var xmlhttp1;

if (window.XDomainRequest) 
{
xmlhttp1 = new XDomainRequest();
}

else if (window.XMLHttpRequest)
  
{ 
xmlhttp1=new XMLHttpRequest();
  
}

else
  
{ 
xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  
}


xmlhttp1.onload=function()
  {
 
   
$("#legoheader").html(xmlhttp1.responseText);  


}



xmlhttp1.open("GET","http://www.lego.com/globalnavigationservices/api/v1/global/header/en-us/TestPage",false);

xmlhttp1.send();




var xmlhttp;
if (window.XDomainRequest) 
{
xmlhttp = new XDomainRequest();
}

else if (window.XMLHttpRequest)
  
{ 
xmlhttp=new XMLHttpRequest();
  
}

else
  
{ 
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  
}


xmlhttp.onload=function()
  {
 

    
$("#legofooter").html(xmlhttp.responseText);  


}

xmlhttp.open("GET","http://www.lego.com/globalnavigationservices/api/v1/global/footer/en-us/TestPage",false);

xmlhttp.send();



$(window).load(function(){

$("a.logo").toggle(
function()
{

$(this).attr("data-state","open");
$("div.shroud").attr("data-state","open");
$("div.collapse-wrapper").attr("data-state","open");

},
function()
{
$(this).attr("data-state","closed");
$("div.shroud").attr("data-state","closed");
$("div.collapse-wrapper").attr("data-state","closed");



}

);

});



</script>


<script src="/static/sliders/iosslider/jquery.iosslider.min.js"></script>
<script src="/static/sliders/iosslider/jquery.iosslider.kalypso.js"></script>
<!-- some extended functionalities -->
<script type="text/javascript">
    ;
    (function ($) {
        $(document).ready(function () {

            $('.iosSlider').iosSlider({
                snapToChildren:true,
                desktopClickDrag:true,
                keyboardControls:true,
                navNextSelector:$('.next'),
                navPrevSelector:$('.prev'),
                navSlideSelector:$('.selectors .item'),
                scrollbar:true,
                scrollbarContainer:'#slideshow .scrollbarContainer',
                scrollbarMargin:'0',
                scrollbarBorderRadius:'4px',
                onSlideComplete:slideComplete,
                onSliderLoaded:function (args) {
                    var otherSettings = {
                        hideControls:true, // Bool, if true, the NAVIGATION ARROWS will be hidden and shown only on mouseover the slider
                        hideCaptions:false  // Bool, if true, the CAPTIONS will be hidden and shown only on mouseover the slider
                    }
                    sliderLoaded(args, otherSettings);
                },
                onSlideChange:slideChange,
                infiniteSlider:true,
                autoSlide:true
            });

        }); // end doc ready
    })(jQuery);
</script>

<!-- Carousels (by CarouFredSel) -->
<script src="/static/js/jquery.carouFredSel.js" type="text/javascript"></script>
<script type="text/javascript">
    ;
    (function ($) {
        // ** partners carousel
        $('#partners_carousel').carouFredSel({
            responsive:true,
            scroll:1,
            auto:false,
            items:{
                width:250,
                visible:{
                    min:3,
                    max:10
                }
            },
            prev:{
                button:".partners_carousel .prev",
                key:"left"
            },
            next:{
                button:".partners_carousel .next",
                key:"right"
            }
        });
        // *** end partners carousel
        $(window).load(function () {
            // ** recent works
            $('#recent_works1').carouFredSel({
                responsive:true,
                scroll:1,
                auto:false,
                items:{
                    width:300,
                    visible:{
                        min:3,
                        max:10
                    }
                },
                prev:{
                    button:".recentwork_carousel .prev",
                    key:"left"
                },
                next:{
                    button:".recentwork_carousel .next",
                    key:"right"
                }
            });
            // *** end recent works carousel
        });
    })(jQuery);
</script>
<!-- end Carousels (by CarouFredSel) -->


<!-- JavaScript at the bottom for fast page loading -->


<!-- Bootstrap Framework -->




<script type="text/javascript" src="/static/js/plugins.js"></script>
<!-- jQuery Plugins -->
<script type="text/javascript" src="/static/addons/superfish_responsive/superfish_menu.js"></script>
<!-- Superfish Menu -->

<script type="text/javascript" src="/static/addons/gritter/jquery.gritter.min.js"></script>
<script type="text/javascript" src="/static/addons/jquery-infinitescroll-master/jquery.infinitescroll.min.js"></script>

<!-- custom scripts file -->

<!-- prettyphoto scripts & styles -->
<link rel="stylesheet" href="/static/addons/prettyphoto/prettyPhoto.css" type="text/css"/>
<script type="text/javascript" src="/static/addons/prettyphoto/jquery.prettyPhoto.js"></script>


<script type="text/javascript">

    function ppOpen(panel, width) {
        jQuery.prettyPhoto.close();
        setTimeout(function () {
            jQuery.fn.prettyPhoto({social_tools:false, deeplinking:false, show_title:false, default_width:width, theme:'pp_kalypso'});
            jQuery.prettyPhoto.open(panel);
        }, 300);
    } // function to open different panel within the panel


    jQuery(document).ready(function ($) {
        jQuery("a[data-rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({theme:'pp_kalypso', social_tools:false, deeplinking:false});
        jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_kalypso'});
        jQuery("a[data-rel^='prettyPhoto[login_panel]']").prettyPhoto({theme:'pp_kalypso', default_width:800, social_tools:false, deeplinking:true});

        jQuery(".prettyPhoto_transparent").click(function (e) {
            e.preventDefault();
            jQuery.fn.prettyPhoto({social_tools:false, deeplinking:false, show_title:false, default_width:980, theme:'pp_kalypso transparent', opacity:0.95});
            jQuery.prettyPhoto.open($(this).attr('href'), '', '');
        });

    });

</script>
<!--end prettyphoto -->

<?= $this->headScript() ?>

<!-- website scripts -->
<script type="text/javascript" src="/static/js/website.js"></script>

</body>
</html>