<?php
// created: 2020-10-16 14:18:17
$dictionary["custo_company"]["fields"]["custo_contact_custo_company_1"] = array (
  'name' => 'custo_contact_custo_company_1',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_CONTACT_TITLE',
  'id_name' => 'custo_contact_custo_company_1custo_contact_ida',
);
$dictionary["custo_company"]["fields"]["custo_contact_custo_company_1_name"] = array (
  'name' => 'custo_contact_custo_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_custo_company_1custo_contact_ida',
  'link' => 'custo_contact_custo_company_1',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_company"]["fields"]["custo_contact_custo_company_1custo_contact_ida"] = array (
  'name' => 'custo_contact_custo_company_1custo_contact_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_CONTACT_TITLE',
);
