<?php
/**
 * Fullstory - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
 * 
 * FullStory is your digital experience analytics platform for on-the-fly funnels, pixel-perfect replay, custom events, heat maps, advanced search
 * 
 * @copyright 2020 Beplas Studio
 *
 * @license MIT
 *
 * @package fullstory
 * @version 1.0.3
 * @author  Beplas Studio <alip@beplasstudio.com>
 * @link    https://beplasstudio.com/
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($enable_fullstory): ?>
    <?php if ($fullstory_id): ?>
        <script>
        window['_fs_debug'] = false;
        window['_fs_host'] = 'fullstory.com';
        window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
        window['_fs_org'] = '<?= ___h($fullstory_id)?>';
        window['_fs_namespace'] = 'FS';
        (function(m,n,e,t,l,o,g,y){
            if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
            g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
            o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
            y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
            g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
            g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
            g.log = function(a,b) { g("log", [a,b]) };
            g.consent=function(a){g("consent",!arguments.length||a)};
            g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
            g.clearUserCookie=function(){};
        })(window,document,window['_fs_namespace'],'script','user');
        </script>
    <?php else: ?>
        <!-- NOTE - fullstory was not set up correctly - please add code snippet -->
        <script>console.error("fullstory has not been set from configuration");</script>
    <?php endif ?>
<?php endif ?>