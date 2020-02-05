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
class Fullstory
{
    constructor()
    {
        this.timeout= 1000;
        this.timer= null;
        SCHLIX.Event.onDOMReady(this.onDOMReady, this, true);
    }
    
    onDOMReady()
    {   
        SCHLIX.Event.on('code_snippet', 'input', this.onCodeSnippetChange, this, true);
    }
    
    onCodeSnippetChange(e)
    {
        clearTimeout(this.timer);
        this.timer = setTimeout(function () {
            var code_snippet = SCHLIX.Dom.get('code_snippet').value;
            var js_pattern = /window\[\'_fs_org'\]\ = '(.*?)'/;
            var fullstory_id = code_snippet.split(js_pattern)[1];
            if (fullstory_id !== undefined)
            {   
                SCHLIX.Dom.get('fullstory_id').value = fullstory_id;
                SCHLIX.Dom.get('code_snippet').value = "";
                SCHLIX.Alert.info('Fullstory ID updated'); 
            } 
            else 
            {
                SCHLIX.Alert.error('Some form field values are invalid');
            }
        }, this.timeout);
    }
    
}

var __fullstory = new Fullstory();

