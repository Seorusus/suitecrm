<?php
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
