<?php
 // created: 2020-10-14 23:47:42
$layout_defs["SecurityGroups"]["subpanel_setup"]['custo_user_securitygroups'] = array (
  'order' => 100,
  'module' => 'custo_user',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_SECURITYGROUPS_FROM_CUSTO_USER_TITLE',
  'get_subpanel_data' => 'custo_user_securitygroups',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
