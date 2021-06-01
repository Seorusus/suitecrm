<?php
 // created: 2020-07-31 17:32:19
$layout_defs["incom_incoming_marketing"]["subpanel_setup"]['incom_incoming_marketing_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_INCOM_INCOMING_MARKETING_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'incom_incoming_marketing_contacts_1',
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
