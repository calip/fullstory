<?php
namespace Block;
/**
 * Fullstory - Main Class
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
class Fullstory extends \SCHLIX\cmsBlock {

    public function Run() {
        global $__fullstory_loaded;
        if ($__fullstory_loaded !== 'loaded') { // prevent the built-in duplicate blocks feature 
            $enable_fullstory = $this->config['bool_enable_fullstory'];
            $fullstory_id = $this->config['str_fullstory_id'];

            $__fullstory_loaded = 'loaded';
            $this->loadTemplateFile('view.block', compact(array_keys(get_defined_vars())));
        }
    }

}
