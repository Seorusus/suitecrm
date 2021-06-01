<?php
// created: 2020-07-31 10:37:42
$dictionary["Campaign"]["fields"]["leads_campaigns_1"] = array (
  'name' => 'leads_campaigns_1',
  'type' => 'link',
  'relationship' => 'leads_campaigns_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_campaigns_1leads_ida',
);
$dictionary["Campaign"]["fields"]["leads_campaigns_1_name"] = array (
  'name' => 'leads_campaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_campaigns_1leads_ida',
  'link' => 'leads_campaigns_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Campaign"]["fields"]["leads_campaigns_1leads_ida"] = array (
  'name' => 'leads_campaigns_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_campaigns_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
);
