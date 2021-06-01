<?php
// created: 2020-10-13 22:41:44
$dictionary["Email"]["fields"]["custo_company_emails"] = array (
  'name' => 'custo_company_emails',
  'type' => 'link',
  'relationship' => 'custo_company_emails',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => false,
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_emailscusto_company_ida',
);
$dictionary["Email"]["fields"]["custo_company_emails_name"] = array (
  'name' => 'custo_company_emails_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_emailscusto_company_ida',
  'link' => 'custo_company_emails',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Email"]["fields"]["custo_company_emailscusto_company_ida"] = array (
  'name' => 'custo_company_emailscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_emails',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_EMAILS_TITLE',
);
