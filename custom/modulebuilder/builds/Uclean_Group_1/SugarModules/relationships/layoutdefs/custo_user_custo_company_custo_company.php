<?php
 // created: 2020-10-15 00:18:13
$layout_defs["custo_company"]["subpanel_setup"]['custo_user_custo_company'] = array (
  'order' => 100,
  'module' => 'custo_user',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_CUSTO_COMPANY_FROM_CUSTO_USER_TITLE',
  'get_subpanel_data' => 'custo_user_custo_company',
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
