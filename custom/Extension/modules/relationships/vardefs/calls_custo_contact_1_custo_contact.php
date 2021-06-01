<?php
// created: 2020-10-30 16:11:48
$dictionary["custo_contact"]["fields"]["calls_custo_contact_1"] = array (
  'name' => 'calls_custo_contact_1',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE',
  'id_name' => 'calls_custo_contact_1calls_ida',
);
$dictionary["custo_contact"]["fields"]["calls_custo_contact_1_name"] = array (
  'name' => 'calls_custo_contact_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'calls_custo_contact_1calls_ida',
  'link' => 'calls_custo_contact_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["calls_custo_contact_1calls_ida"] = array (
  'name' => 'calls_custo_contact_1calls_ida',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE',
);
