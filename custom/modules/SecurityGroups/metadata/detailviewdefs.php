<?php
$module_name = 'SecurityGroups';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
        array (
          0 => 'noninheritable',
        ),
        3 => 
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
