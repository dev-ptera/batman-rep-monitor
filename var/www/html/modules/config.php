<?php

// FIRST USE
// Please copy this file as config.php

// To edit a config uncomment the line, otherwise
// defaults will be used for each variable.

// ----------- General Variables -----------

// To switch between monitoring Nano / Banano nodes,
// set $currency, $themeChoice, and $blockExplorer to
// corresponding Nano / Banano values.

// Currency 'nano' or 'banano' or 'nano-beta'
$currency = 'banano';

// Theme of your Node Monitor
// Nano Themes:   'dark' or 'light'
// Banano Themes: 'banano'
$themeChoice = 'gothem';

// Choice of block explorer
// Nano Explorers:      'ninja', 'nanocrawler'
// Nano Beta Explorers: 'nanocrawler-beta'
// Banano Explorers:    'banano'
$blockExplorer = 'banano';

// Autorefresh interval for the status webpage in seconds
// $autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
$nanoNodeName = 'batman';

// Location of your node
// If left empty, we try to get it from My Nano Ninja.
$nodeLocation = 'Pittsburgh, PA';

// A welcome message shown on top
$welcomeMsg = 'The representative Banano deserves';

// ----------- Cache Engine -----------

// The cache engine allows for caching of RPC calls to reduce load on your Nano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
// $cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "redis" (Redis cache; requires extension; fast)
//      - Options:
//        - 'host' => optional; address of the Redis host (defaults to localhost)
//        - 'port' => optional; port for the Redis host (defaults to 6379)
//        - 'redis' => optional; an instantiated Redis instance (replaces use of host/port)
//        - 'ttl' => optional; cache time in seconds

// $cache = [
//   "engine" => "files",
//   "options" => ["ttl" => $cacheTimeToLive]
// ];

// ----------- Node Variables -----------

// IP address for RPC (default: [::1])
$nanoNodeRPCIP   = '[::1]';

// Port for RPC (default: 7076)
// Nano nodes typically use port 7076.
// Nano Beta nodes typically use port 55000.
// Banano nodes typically use port 7072.
$nanoNodeRPCPort = '7072';

// Account of this node
$nanoNodeAccount = 'ban_3batmanuenphd7osrez9c45b3uqw9d9u81ne8xa6m43e1py56y9p48ap69zg';

// Donation account for maintaining this node
$nanoDonationAccount = 'ban_3batmanuenphd7osrez9c45b3uqw9d9u81ne8xa6m43e1py56y9p48ap69zg';

// Number of decimal places to display Nano balances, i.e.
// $nanoNumDecimalPlaces = 2;

// ----------- Analytics -----------

// Google Analytics Tracking ID, leave blank to disable Google Analytics.
// $googleAnalyticsId = '';

// ----------- Social -----------

// Add your social accounts
$socials['reddit'] = 'https://www.reddit.com/user/dev-ptera/';
$socials['github'] = 'https://github.com/dev-ptera';