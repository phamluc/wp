<?php

/* THESE ARE OUR OPTIONS / CONFIGURATION SETTINGS */
define('MONGODB_HOST','localhost');
define('MONGODB_NAME', 'testwp' );
define('SITE_NAME', 'MongoPress' );
define('SITE_DESCRIPTION', 'The High-Performance, PHP MongoDB CMS' );
define('BASE_URL_DIRECTORY', 'newsangular/wp/mongopress.0.2.3' );
define('DB_PORT', '27017' );
define('COLLECTION_PREFIX','');

/* END OF OPTIONS */

/* AT PRESENT - THIS IS THE ONLY WAY TO SWITCH THEMES */
define('MONGOPRESS_THEME','default');

// RESERVED NAMESPACES FOR PERMA QUERIES AND SEARCHES
define('QUERY_PERMA','');
define('SEARCH_PERMA','');

/* TO DEBUG OR NOT TOP DEBUG - THAT IS THE QUESTION */
define('MP_DEBUG',false);

// MISC OPTIONS THAT WILL SOON HAVE AN INTERFACE
define('SKIP_HT',false);
define('OBJS_PP',25);
define('MONGODB_REPLICAS',false);
define('COOKIE_TTL','session'); // session/permanent or use a integer in seconds for inactivity, 7200 = 2hrs

// CUSTOM SLUGS
define('ADMIN_SLUG','admin');
define('MEDIA_SLUG','media');

?>
