<?php
// created: 2020-10-15 00:18:13
$dictionary["custo_user"]["fields"]["custo_user_custo_user_1"] = array (
  'name' => 'custo_user_custo_user_1',
  'type' => 'link',
  'relationship' => 'custo_user_custo_user_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CUSTO_USER_1_FROM_CUSTO_USER_L_TITLE',
  'id_name' => 'custo_user_custo_user_1custo_user_ida',
);
$dictionary["custo_user"]["fields"]["custo_user_custo_user_1_name"] = array (
  'name' => 'custo_user_custo_user_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_CUSTO_USER_1_FROM_CUSTO_USER_L_TITLE',
  'save' => true,
  'id_name' => 'custo_user_custo_user_1custo_user_ida',
  'link' => 'custo_user_custo_user_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_user"]["fields"]["custo_user_custo_user_1custo_user_ida"] = array (
  'name' => 'custo_user_custo_user_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_custo_user_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_CUSTO_USER_1_FROM_CUSTO_USER_R_TITLE',
);
