<?php
 // created: 2020-10-14 23:47:42
$layout_defs["custo_user"]["subpanel_setup"]['custo_user_users_1'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_USERS_1_FROM_USERS_TITLE',
  'get_subpanel_data' => 'custo_user_users_1',
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
