<?php
// created: 2020-10-13 22:41:44
$dictionary["custo_company"]["fields"]["custo_company_custo_company"] = array (
  'name' => 'custo_company_custo_company',
  'type' => 'link',
  'relationship' => 'custo_company_custo_company',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => false,
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_COMPANY_FROM_CUSTO_COMPANY_L_TITLE',
  'id_name' => 'custo_company_custo_companycusto_company_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_custo_company_name"] = array (
  'name' => 'custo_company_custo_company_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_COMPANY_FROM_CUSTO_COMPANY_L_TITLE',
  'save' => true,
  'id_name' => 'custo_company_custo_companycusto_company_ida',
  'link' => 'custo_company_custo_company',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_custo_companycusto_company_ida"] = array (
  'name' => 'custo_company_custo_companycusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_custo_company',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_COMPANY_FROM_CUSTO_COMPANY_R_TITLE',
);
