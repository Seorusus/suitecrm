<?php
$module_name = 'SecurityGroups';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'noninheritable',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'custo_user_securitygroups_1_name',
            'label' => 'LBL_CUSTO_USER_SECURITYGROUPS_1_FROM_CUSTO_USER_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
