<?php
 // created: 2020-10-14 23:47:43
$layout_defs["Campaigns"]["subpanel_setup"]['custo_company_campaigns'] = array (
  'order' => 100,
  'module' => 'custo_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CUSTO_COMPANY_TITLE',
  'get_subpanel_data' => 'custo_company_campaigns',
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
