<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright 2014-2016 SOFTLAB24 LIMITED
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$guid = input('guid');
$album = new OssnAlbums;
if($album->deleteAlbum($guid)){
        ossn_trigger_message(ossn_print('photo:album:deleted'));
        redirect();	
} else {
        ossn_trigger_message(ossn_print('photo:album:delete:error'), 'error');
        redirect(REF);	
}
