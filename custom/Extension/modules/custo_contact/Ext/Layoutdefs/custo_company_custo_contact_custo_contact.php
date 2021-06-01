<?php
 // created: 2020-10-15 00:18:14
$layout_defs["custo_contact"]["subpanel_setup"]['custo_company_custo_contact'] = array (
  'order' => 100,
  'module' => 'custo_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_COMPANY_CUSTO_CONTACT_FROM_CUSTO_COMPANY_TITLE',
  'get_subpanel_data' => 'custo_company_custo_contact',
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
