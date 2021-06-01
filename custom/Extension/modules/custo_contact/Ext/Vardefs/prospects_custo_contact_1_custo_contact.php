<?php
// created: 2020-11-02 12:34:31
$dictionary["custo_contact"]["fields"]["prospects_custo_contact_1"] = array (
  'name' => 'prospects_custo_contact_1',
  'type' => 'link',
  'relationship' => 'prospects_custo_contact_1',
  'source' => 'non-db',
  'module' => 'Prospects',
  'bean_name' => 'Prospect',
  'vname' => 'LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_PROSPECTS_TITLE',
  'id_name' => 'prospects_custo_contact_1prospects_ida',
);
$dictionary["custo_contact"]["fields"]["prospects_custo_contact_1_name"] = array (
  'name' => 'prospects_custo_contact_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospects_custo_contact_1prospects_ida',
  'link' => 'prospects_custo_contact_1',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["custo_contact"]["fields"]["prospects_custo_contact_1prospects_ida"] = array (
  'name' => 'prospects_custo_contact_1prospects_ida',
  'type' => 'link',
  'relationship' => 'prospects_custo_contact_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
);
