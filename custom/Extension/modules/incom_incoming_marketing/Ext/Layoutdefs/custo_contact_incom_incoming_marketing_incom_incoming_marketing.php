<?php
 // created: 2020-10-15 00:18:12
$layout_defs["incom_incoming_marketing"]["subpanel_setup"]['custo_contact_incom_incoming_marketing'] = array (
  'order' => 100,
  'module' => 'custo_contact',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_CONTACT_INCOM_INCOMING_MARKETING_FROM_CUSTO_CONTACT_TITLE',
  'get_subpanel_data' => 'custo_contact_incom_incoming_marketing',
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
