<?php
/**
 * Fullstory - Config
 * 
 * FullStory is your digital experience analytics platform for on-the-fly funnels, pixel-perfect replay, custom events, heat maps, advanced search
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php 
global $HTMLHeader;
$script_src = CURRENT_SUBSITE_URL_PATH . '/blocks/fullstory/fullstory.admin.js';
$HTMLHeader->JAVASCRIPT($script_src);
?>
<h4><?= ___('Fullstory Settings') ?></h4>
<schlix-config:checkbox config-key="bool_enable_fullstory" label="<?= ___('Enable Fullstory') ?>" />
<schlix-config:textbox id="fullstory_id" config-key="str_fullstory_id" required="required" label="<?= ___('Fullstory ID') ?>"   />
<hr />
<strong><?= ___('Code Snippet') ?></strong>
<schlix-config:textarea id="code_snippet" config-key="str_code_snippet" style="min-height:100px" placeholder="{...}" />
<p><?= ___('Enter your fullstory code snippet. you can find <a href="https://www.fullstory.com/" target="_blank">fullstory</a> here.') ?></p>
