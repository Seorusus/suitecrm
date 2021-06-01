<?php
 // created: 2020-10-13 22:37:34
$layout_defs["SecurityGroups"]["subpanel_setup"]['custo_company_securitygroups'] = array (
  'order' => 100,
  'module' => 'custo_company',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_COMPANY_SECURITYGROUPS_FROM_CUSTO_COMPANY_TITLE',
  'get_subpanel_data' => 'custo_company_securitygroups',
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
