<?php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      'exact_matches' => 
      array (
      ),
      'regex_matches' => 
      array (
        0 => '6\\.5\\.*',
        1 => '6\\.6\\.*',
        2 => '6\\.7\\.*',
        3 => '6\\.8\\.*',
      ),
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
      3 => 'CORP',
      4 => 'ULT',
    ),
  ),
  'readme' => '',
  'key' => 's1',
  'author' => 'Urdhva-tech Pvt Ltd',
  'description' => 'StickyNote Developed by Urdhva-tech Pvt. Ltd.',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'StickyNote',
  'published_date' => '2013-07-19 16:02:37',
  'type' => 'module',
  'version' => '1.0.1',
  'remove_tables' => 'prompt',
  'copy_files' => 
  array (
    'from_dir' => 'SugarModules',
  ),
  'files' => 
  array (
    0 => 'modules/StickyNote/javascript/css/style.css',
    1 => 'modules/StickyNote/javascript/images/delete.png',
    2 => 'modules/StickyNote/javascript/images/ok.png',
    3 => 'modules/StickyNote/javascript/images/stickynote-large.png',
    4 => 'modules/StickyNote/javascript/images/stickynote-medium.png',
    5 => 'modules/StickyNote/javascript/jquery.js',
    6 => 'modules/StickyNote/javascript/jquery.stickynote.js',
    7 => 'modules/StickyNote/javascript/jquery-1.3.2.js',
    8 => 'modules/StickyNote/javascript/jquery-ui-1.8.23.custom.min.js',
    9 => 'modules/StickyNote/javascript/ui.core.js',
    10 => 'modules/StickyNote/javascript/ui.draggable.js',
    11 => 'modules/StickyNote/language/en_us.lang.php',
    12 => 'modules/StickyNote/language/ru_RU.lang.php',
    13 => 'modules/StickyNote/logic_hooks/addsticky.php',
    14 => 'modules/StickyNote/sticky_utils.php',
    15 => 'modules/StickyNote/StickyNote.php',
    16 => 'modules/StickyNote/StickyNote_sugar.php',
    17 => 'modules/StickyNote/StickySave.php',
    18 => 'modules/StickyNote/vardefs.php',
  ),
  'md5' => 
  array (
  ),
  'current_install_files' => 
  array (
  ),
  'install_status' => 'actual',
);

$installdefs = array (
  'id' => 'StickyNote',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'StickyNote',
      'class' => 'StickyNote',
      'path' => 'modules/StickyNote/StickyNote.php',
      'tab' => false,
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/StickyNote',
      'to' => 'modules/StickyNote',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'logic_hooks' => 
  array (
    0 => 
    array (
      'module' => '',
      'hook' => 'after_ui_footer',
      'order' => 212,
      'description' => 'sticky note',
      'file' => 'modules/StickyNote/logic_hooks/addsticky.php',
      'class' => 'StickyNoteJavascript',
      'function' => 'add_javascript',
    ),
  ),
);
