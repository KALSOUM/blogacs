<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head profile="http://gmpg.org/xfn/11">   
    <title>
        <?php bloginfo('name') ?>
        <?php if ( is_404() ) : ?> &raquo; 
        <?php _e('Not Found') ?>
        <?php elseif ( is_home() ) : ?> &raquo; 
        <?php bloginfo('description') ?>
        <?php else : ?><?php wp_title() ?>
        <?php endif ?>
    </title>   
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
    <!-- leave this for stats --> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> 
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> 
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/styles.css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); <?php wp_head(); ?>   
</head> 
 <body>
     
     <nav class="navbar navbar-expand-sm navbar-light bg-light">
         <a class="navbar-brand" href="#"></a>
         <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
             aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
           <?php wp_nav_menu(array('theme_location'=>'menu-principal'))?>
         </div>
     </nav>
     
    <div id="page">
    <div id="header">
    
     <div class="container">
     <p><h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('Kélumake'); ?><i> Chez <span>"KElOUMAKE"</span> </i></a></h1>  </p>
  <div id="my_carousel" class="carousel slide" data-ride="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://i.postimg.cc/rp07LFpq/IMG-2085.jpg/img/slide1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block text-right">
          <h5><a class="text-success" href="https://www.flickr.com/photos/ittfworld/collections/72157690129937915/">Source Photos:<br>2017<br>World Junior<br>Table Tennis<br>Championships</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i.postimg.cc/DZbh5PGd/IMG-1903.jpg/img/slide2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block text-left">
          <h5><a class="text-warning" href="https://www.flickr.com/photos/ittfworld/collections/72157690129937915/">Source Photos:<br>2017<br>World Junior<br>Table Tennis<br>Championships</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i.postimg.cc/1zGcFLCp/IMG-2138.jpg/img/slide3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block text-left">
          <h5><a class="text-info" href="https://www.flickr.com/photos/ittfworld/collections/72157690129937915/">Source Photos:<br>2017 World Junior<br>Table Tennis Championships</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://i.postimg.cc/cCmbcvFB/IMG-2107.jpg/slide4.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><a class="text-danger" href="https://www.flickr.com/photos/ittfworld/collections/72157690129937915/">Source Photos:<br>2017<br>World Junior<br>Table Tennis<br>Championships</a></h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#my_carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my_carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <ol class="carousel-indicators">
      <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
      <li data-target="#my_carousel" data-slide-to="1"></li>
      <li data-target="#my_carousel" data-slide-to="2"></li>
      <li data-target="#my_carousel" data-slide-to="3"></li>
    </ol>
  </div>

 </div>
 </div>
