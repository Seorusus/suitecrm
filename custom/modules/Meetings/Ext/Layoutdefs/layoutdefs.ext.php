<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2020-10-15 00:18:12
$layout_defs["Meetings"]["subpanel_setup"]['custo_contact_meetings'] = array (
  'order' => 100,
  'module' => 'custo_contact',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_CONTACT_MEETINGS_FROM_CUSTO_CONTACT_TITLE',
  'get_subpanel_data' => 'custo_contact_meetings',
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
$layout_defs["Meetings"]["subpanel_setup"]['custo_user_meetings'] = array (
  'order' => 100,
  'module' => 'custo_user',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_MEETINGS_FROM_CUSTO_USER_TITLE',
  'get_subpanel_data' => 'custo_user_meetings',
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

?>