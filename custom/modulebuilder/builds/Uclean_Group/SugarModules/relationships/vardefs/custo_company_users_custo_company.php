<?php
// created: 2020-10-14 23:47:44
$dictionary["custo_company"]["fields"]["custo_company_users"] = array (
  'name' => 'custo_company_users',
  'type' => 'link',
  'relationship' => 'custo_company_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_USERS_TITLE',
  'id_name' => 'custo_company_usersusers_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_users_name"] = array (
  'name' => 'custo_company_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'custo_company_usersusers_ida',
  'link' => 'custo_company_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_usersusers_ida"] = array (
  'name' => 'custo_company_usersusers_ida',
  'type' => 'link',
  'relationship' => 'custo_company_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_CUSTO_COMPANY_TITLE',
);
