<?php echo "
<head>
  <meta charset=\"UTF-8\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://localhost/wordpress/wp-content/themes/corus-theme/components/slick-slider/slick.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"http://localhost/wordpress/wp-content/themes/corus-theme/components/slick-slider/slick-theme.css\">
  <style type=\"text/css\">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>
<body>

<section class=\"lazy slider\" data-sizes=\"50vw\">
    <div>
      <img data-lazy=\""; ?>
	  
	  
<?php the_field('slider_image_1'); ?>
<?php echo "\" data-srcset=\""; ?>
<?php the_field('slider_image_1'); ?>
<?php echo "\" data-sizes=\"100vw\">"; ?>

<?php echo "</div>
    <div>
      <img data-lazy=\""; ?>
<?php the_field('slider_image_2'); ?>	 
<?php echo "\" data-srcset=\""; ?>
<?php the_field('slider_image_2'); ?>
<?php echo "\" data-sizes=\"100vw\">"; ?>
	  
<?php echo "</div>
    <div>
      <img data-lazy=\""; ?>
<?php the_field('slider_image_3'); ?>	 
<?php echo "\" data-srcset=\""; ?>
<?php the_field('slider_image_3'); ?>
<?php echo "\" data-sizes=\"100vw\">"; ?>
<?php echo "</div>
    
  </section>

  <script src=\"https://code.jquery.com/jquery-2.2.0.min.js\" type=\"text/javascript\"></script>
  <script src=\"http://localhost/wordpress/wp-content/themes/corus-theme/components/slick-slider/slick.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
  <script type=\"text/javascript\">
    $(document).on('ready', function() {
      $(\".vertical-center-4\").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(\".vertical-center-3\").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(\".vertical-center-2\").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(\".vertical-center\").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(\".vertical\").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(\".regular\").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(\".center\").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(\".variable\").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(\".lazy\").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>";?>

</body>
</html>;
