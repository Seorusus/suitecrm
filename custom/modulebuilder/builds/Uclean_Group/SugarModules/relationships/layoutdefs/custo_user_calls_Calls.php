<?php
 // created: 2020-10-14 23:47:42
$layout_defs["Calls"]["subpanel_setup"]['custo_user_calls'] = array (
  'order' => 100,
  'module' => 'custo_user',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_CALLS_FROM_CUSTO_USER_TITLE',
  'get_subpanel_data' => 'custo_user_calls',
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
