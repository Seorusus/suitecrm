<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2020-10-15 00:18:12
$layout_defs["Campaigns"]["subpanel_setup"]['custo_contact_campaigns'] = array (
  'order' => 100,
  'module' => 'custo_contact',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CUSTO_CONTACT_TITLE',
  'get_subpanel_data' => 'custo_contact_campaigns',
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


 // created: 2020-10-15 00:18:14
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


//auto-generated file DO NOT EDIT
$layout_defs['Campaigns']['subpanel_setup']['leads']['override_subpanel_name'] = 'Campaign_subpanel_leads';

?>