<?php
 // created: 2020-07-31 14:00:12
$layout_defs["incom_incoming_marketing"]["subpanel_setup"]['incom_incoming_marketing_calls_1'] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_INCOM_INCOMING_MARKETING_CALLS_1_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'incom_incoming_marketing_calls_1',
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
