<?php
 // created: 2020-10-14 23:47:42
$layout_defs["Tasks"]["subpanel_setup"]['custo_user_tasks'] = array (
  'order' => 100,
  'module' => 'custo_user',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_TASKS_FROM_CUSTO_USER_TITLE',
  'get_subpanel_data' => 'custo_user_tasks',
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
