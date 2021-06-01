<?php
// created: 2020-10-14 23:47:44
$dictionary["Call"]["fields"]["custo_company_calls"] = array (
  'name' => 'custo_company_calls',
  'type' => 'link',
  'relationship' => 'custo_company_calls',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_callscusto_company_ida',
);
$dictionary["Call"]["fields"]["custo_company_calls_name"] = array (
  'name' => 'custo_company_calls_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_callscusto_company_ida',
  'link' => 'custo_company_calls',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["custo_company_callscusto_company_ida"] = array (
  'name' => 'custo_company_callscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_calls',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CALLS_TITLE',
);
