<?php
 // created: 2020-10-14 23:47:42
$layout_defs["SecurityGroups"]["subpanel_setup"]['custo_contact_securitygroups'] = array (
  'order' => 100,
  'module' => 'custo_contact',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUSTO_CONTACT_SECURITYGROUPS_FROM_CUSTO_CONTACT_TITLE',
  'get_subpanel_data' => 'custo_contact_securitygroups',
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
