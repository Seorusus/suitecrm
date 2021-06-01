<?php
 // created: 2020-07-31 12:25:15
$layout_defs["incom_incoming_marketing"]["subpanel_setup"]['incom_incoming_marketing_leads'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_INCOM_INCOMING_MARKETING_LEADS_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'incom_incoming_marketing_leads',
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
