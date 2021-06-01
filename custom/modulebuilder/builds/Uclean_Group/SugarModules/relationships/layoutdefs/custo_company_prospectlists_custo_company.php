<?php
 // created: 2020-10-14 23:47:43
$layout_defs["custo_company"]["subpanel_setup"]['custo_company_prospectlists'] = array (
  'order' => 100,
  'module' => 'ProspectLists',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_COMPANY_PROSPECTLISTS_FROM_PROSPECTLISTS_TITLE',
  'get_subpanel_data' => 'custo_company_prospectlists',
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
