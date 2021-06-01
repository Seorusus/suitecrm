<?php
// created: 2020-10-16 14:18:17
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company_1"] = array (
  'name' => 'custo_contact_custo_company_1',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_contact_custo_company_1custo_company_idb',
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company_1_name"] = array (
  'name' => 'custo_contact_custo_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_custo_company_1custo_company_idb',
  'link' => 'custo_contact_custo_company_1',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company_1custo_company_idb"] = array (
  'name' => 'custo_contact_custo_company_1custo_company_idb',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
);
