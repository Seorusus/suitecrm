<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2020-07-31 10:37:42
$layout_defs["Leads"]["subpanel_setup"]['leads_campaigns_1'] = array (
  'order' => 100,
  'module' => 'Campaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
  'get_subpanel_data' => 'leads_campaigns_1',
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


 // created: 2020-07-31 09:52:23
$layout_defs["Leads"]["subpanel_setup"]['leads_calls_1'] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_CALLS_1_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'leads_calls_1',
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


 // created: 2020-07-31 09:52:23
 $layout_defs['Leads']['subpanel_setup']['leads_calls_1']['flat'] = 1;


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['campaigns']['override_subpanel_name'] = 'Lead_subpanel_campaigns';


//auto-generated file DO NOT EDIT
$layout_defs['Leads']['subpanel_setup']['leads_calls_1']['override_subpanel_name'] = 'Lead_subpanel_leads_calls_1';

?>