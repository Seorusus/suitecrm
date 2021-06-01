<?php
/*
   Created By : Urdhva Tech Pvt. Ltd.
   Created date : 07/19/2013
   Contact at : contact@urdhva-tech.com
   Skype : urdhvatech
   Module : stickyNote 1.0
*/
    function is_jquery_exist() {
        global $sugar_version;
        $main_version = (int)substr($sugar_version, 0, 1);
        $sub_version = (int)substr($sugar_version, 2, 1);
        if ($main_version >= 6 && $sub_version >= 5)
            return true;
        else
            return false;
    }
    function getstickyJS()
    {
        $current_module = $_REQUEST['module'];
        if (!is_jquery_exist()) {
          $jscript=<<<EOQ
                <script language='javascript'>
                    YAHOO.util.Get.css(["modules/StickyNote/javascript/css/style.css"]);
                    YAHOO.util.Get.script(['modules/StickyNote/javascript/jquery.js',
                                            'modules/StickyNote/javascript/jquery-ui-1.8.23.custom.min.js',
                                            'modules/StickyNote/javascript/jquery.stickynote.js']
                                         );
                </script>
EOQ;
         }
         else {
           $jscript=<<<EOQ
            <script language='javascript'>
                YAHOO.util.Get.css(["modules/StickyNote/javascript/css/style.css"]);
                if(typeof(jQuery.ui) != 'undefined')
                {
                    YAHOO.util.Get.script(['modules/StickyNote/javascript/jquery.stickynote.js']);
                }
                else
                {
                    YAHOO.util.Get.script(['modules/StickyNote/javascript/jquery-ui-1.8.23.custom.min.js',
                    'modules/StickyNote/javascript/jquery.stickynote.js']);
                }

</script>
EOQ;
        }
         echo $jscript;
    }