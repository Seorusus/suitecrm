<?php
// created: 2020-10-15 00:18:13
$dictionary["User"]["fields"]["custo_user_users"] = array (
  'name' => 'custo_user_users',
  'type' => 'link',
  'relationship' => 'custo_user_users',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_USERS_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_userscusto_user_ida',
);
$dictionary["User"]["fields"]["custo_user_users_name"] = array (
  'name' => 'custo_user_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_USERS_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_userscusto_user_ida',
  'link' => 'custo_user_users',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["User"]["fields"]["custo_user_userscusto_user_ida"] = array (
  'name' => 'custo_user_userscusto_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_USERS_FROM_USERS_TITLE',
);
