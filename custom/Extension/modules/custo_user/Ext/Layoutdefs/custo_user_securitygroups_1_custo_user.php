<?php
 // created: 2020-10-15 00:18:13
$layout_defs["custo_user"]["subpanel_setup"]['custo_user_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'custo_user_securitygroups_1',
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
