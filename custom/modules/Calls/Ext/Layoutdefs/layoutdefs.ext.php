<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2020-10-15 00:18:12
$layout_defs["Calls"]["subpanel_setup"]['custo_contact_calls'] = array (
  'order' => 100,
  'module' => 'custo_contact',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_CONTACT_CALLS_FROM_CUSTO_CONTACT_TITLE',
  'get_subpanel_data' => 'custo_contact_calls',
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


 // created: 2020-10-15 00:18:13
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


//auto-generated file DO NOT EDIT
$layout_defs['Calls']['subpanel_setup']['contacts']['override_subpanel_name'] = 'Call_subpanel_contacts';


//auto-generated file DO NOT EDIT
$layout_defs['Calls']['subpanel_setup']['custo_contact_calls']['override_subpanel_name'] = 'Call_subpanel_custo_contact_calls';


//auto-generated file DO NOT EDIT
$layout_defs['Calls']['subpanel_setup']['calls_contacts_1']['override_subpanel_name'] = 'Call_subpanel_calls_contacts_1';

?>