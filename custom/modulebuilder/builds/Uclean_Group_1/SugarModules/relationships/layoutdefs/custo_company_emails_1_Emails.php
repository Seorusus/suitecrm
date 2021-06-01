<?php
 // created: 2020-10-15 00:18:14
$layout_defs["Emails"]["subpanel_setup"]['custo_company_emails_1'] = array (
  'order' => 100,
  'module' => 'custo_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_COMPANY_EMAILS_1_FROM_CUSTO_COMPANY_TITLE',
  'get_subpanel_data' => 'custo_company_emails_1',
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
