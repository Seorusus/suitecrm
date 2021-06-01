<?php
// created: 2020-10-13 17:18:07
$dictionary["custo_contact"]["fields"]["custo_contact_custo_contact"] = array (
  'name' => 'custo_contact_custo_contact',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_contact',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => false,
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_L_TITLE',
  'id_name' => 'custo_contact_custo_contactcusto_contact_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_contact_name"] = array (
  'name' => 'custo_contact_custo_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_L_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_custo_contactcusto_contact_ida',
  'link' => 'custo_contact_custo_contact',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_contactcusto_contact_ida"] = array (
  'name' => 'custo_contact_custo_contactcusto_contact_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_contact',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_R_TITLE',
);
