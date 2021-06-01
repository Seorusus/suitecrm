<?php
class StickyNoteJavascript {
    var $restricted_action = array('StickySave',
                                   'ajaxui',
                                   'Quickcreate',
                                   'favorites',
                                   'modulelistmenu',
                                   'Quickedit',
                                   'Login',
                                   'Popup'
                                   );
    function add_javascript($event=null,$arguments=null){
       if(isset($_REQUEST['action']) && !in_array($_REQUEST['action'], $this->restricted_action) && !isset($_REQUEST['sugar_body_only']) && !isset($_REQUEST['to_pdf'])) {
           require_once('modules/StickyNote/sticky_utils.php');
           getstickyJS();
       }
    }
}