<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> 
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
 <div> <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="Chercher" />
  </div>
   </form>
   
