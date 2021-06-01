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
  'author' => 'CRMHosting.ru',
  'description' => 'Компактные выпадающие списки в фильтрах модулей',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'multiSelect',
  'published_date' => '2016-11-05 10:24:54',
  'type' => 'module',
  'version' => '1.0.0',
  'remove_tables' => 'prompt',
  'copy_files' => 
  array (
    'from_dir' => 'SugarModules',
  ),
);

$installdefs = array (
  'id' => 'multiSelect',
  'beans' => array (),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/include/javascript/jquery/jquery.multiSelect.js',
      'to' => 'custom/include/javascript/jquery/jquery.multiSelect.js',
    ),
    1 =>
    array (
      'from' => '<basepath>/SugarModules/custom/themes/Suite7/tpls/_head.tpl',
      'to' => 'custom/themes/Suite7/tpls/_head.tpl',
    ),
    2 =>
    array (
      'from' => '<basepath>/SugarModules/custom/themes/SuiteP/tpls/_head.tpl',
      'to' => 'custom/themes/SuiteP/tpls/_head.tpl',
    ),
    3 =>
    array (
      'from' => '<basepath>/SugarModules/custom/themes/SuiteR/tpls/_head.tpl',
      'to' => 'custom/themes/SuiteR/tpls/_head.tpl',
    ),
    4 =>
    array (
      'from' => '<basepath>/SugarModules/custom/include/SugarFields/Fields',
      'to' => 'custom/include/SugarFields/Fields',
    ),
  ),
  'language' => array (),
  'logic_hooks' => array (),
);
