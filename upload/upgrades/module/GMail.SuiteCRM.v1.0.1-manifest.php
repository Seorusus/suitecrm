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
  'key' => 'GMail',
  'author' => 'CRMHosting.ru',
  'description' => 'Поддержка расширения, дающего удобную работу с почтой в GMail',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'GMail',
  'published_date' => '2017-12-24 21:51:00',
  'type' => 'module',
  'version' => '1.0.1',
  'remove_tables' => 'prompt',
  'copy_files' => 
  array (
    'from_dir' => 'SugarModules',
  ),
);

$installdefs = array (
  'id' => 'GMail',
  'beans' => array (),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
      0 =>
          array (
              'from' => '<basepath>/SugarModules/custom/',
              'to' => 'custom',
          ),
  ),
  'language' => array (),
  'logic_hooks' => array (),
);
