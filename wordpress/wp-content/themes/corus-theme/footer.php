<?php
/**
 * The Footer File.
 *
 */
 wp_footer(); 
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?=get_template_directory_uri()?>/components/slick-slider/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/components/slick-slider/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/components/slick-slider/slick-theme.css"/>
<script type="text/javascript">
    $(document).ready(function(){
        $(".myslick-slider").slick({
            dots: false,
		  infinite: true,
		  arrows: false,
		  speed: 2000,
		  autoplay: true,
		  autoplaySpeed: 2000,
		  slidesToShow: 1,
		  slidesToScroll: 1,		  		 
		  adaptiveHeight: false,  
		  variableWidth:false,
		  pauseOnFocus: true,
		  pauseOnHover:true,
		  swipeToSlide:true,
        });
    }); 
</script>
</body>
</html>