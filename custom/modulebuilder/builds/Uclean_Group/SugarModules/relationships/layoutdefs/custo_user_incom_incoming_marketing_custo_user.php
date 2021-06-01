<?php
 // created: 2020-10-14 23:47:42
$layout_defs["custo_user"]["subpanel_setup"]['custo_user_incom_incoming_marketing'] = array (
  'order' => 100,
  'module' => 'incom_incoming_marketing',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_USER_INCOM_INCOMING_MARKETING_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'get_subpanel_data' => 'custo_user_incom_incoming_marketing',
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
