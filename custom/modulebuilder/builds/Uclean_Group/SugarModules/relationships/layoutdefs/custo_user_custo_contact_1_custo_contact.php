<?php
 // created: 2020-10-14 23:47:42
$layout_defs["custo_contact"]["subpanel_setup"]['custo_user_custo_contact_1'] = array (
  'order' => 100,
  'module' => 'custo_user',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_CUSTO_CONTACT_1_FROM_CUSTO_USER_TITLE',
  'get_subpanel_data' => 'custo_user_custo_contact_1',
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