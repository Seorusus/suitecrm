<?php
// created: 2020-10-30 16:11:48
$dictionary["Call"]["fields"]["calls_custo_contact_1"] = array (
  'name' => 'calls_custo_contact_1',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
  'id_name' => 'calls_custo_contact_1custo_contact_idb',
);
$dictionary["Call"]["fields"]["calls_custo_contact_1_name"] = array (
  'name' => 'calls_custo_contact_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'calls_custo_contact_1custo_contact_idb',
  'link' => 'calls_custo_contact_1',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Call"]["fields"]["calls_custo_contact_1custo_contact_idb"] = array (
  'name' => 'calls_custo_contact_1custo_contact_idb',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
);
