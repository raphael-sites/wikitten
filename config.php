<?php
// Example configuration file for Wikitten. To use it,
// first rename it to `config.php`.

// Custom name for your wiki:
define('APP_NAME', 'Raphael Shu');

// Custom path to your wiki's library:
define('LIBRARY', '/var/lib/openshift/542e51e95973caf795000d17/php/wiki');

// Enable editing files through the interface?
// NOTE: There's currently no authentication built into Wikitten, controlling
// who does what is your responsibility.
define('ENABLE_EDITING', false);

// Enable JSON page data?
// define('USE_PAGE_METADATA', true);
define('USE_WIKITTEN_LOGO', false);
// 
// Enable PasteBin plugin ?
// define('ENABLE_PASTEBIN', true);
// define('PASTEBIN_API_KEY', '');
