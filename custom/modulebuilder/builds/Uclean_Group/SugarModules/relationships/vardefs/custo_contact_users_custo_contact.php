<?php
// created: 2020-10-14 23:47:42
$dictionary["custo_contact"]["fields"]["custo_contact_users"] = array (
  'name' => 'custo_contact_users',
  'type' => 'link',
  'relationship' => 'custo_contact_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_USERS_TITLE',
  'id_name' => 'custo_contact_usersusers_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_users_name"] = array (
  'name' => 'custo_contact_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_usersusers_ida',
  'link' => 'custo_contact_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_usersusers_ida"] = array (
  'name' => 'custo_contact_usersusers_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_CUSTO_CONTACT_TITLE',
);
