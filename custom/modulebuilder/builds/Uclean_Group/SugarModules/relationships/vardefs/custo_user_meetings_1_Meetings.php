<?php
// created: 2020-10-14 23:47:43
$dictionary["Meeting"]["fields"]["custo_user_meetings_1"] = array (
  'name' => 'custo_user_meetings_1',
  'type' => 'link',
  'relationship' => 'custo_user_meetings_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => false,
  'vname' => 'LBL_CUSTO_USER_MEETINGS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_meetings_1custo_user_ida',
);
$dictionary["Meeting"]["fields"]["custo_user_meetings_1_name"] = array (
  'name' => 'custo_user_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_MEETINGS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_meetings_1custo_user_ida',
  'link' => 'custo_user_meetings_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Meeting"]["fields"]["custo_user_meetings_1custo_user_ida"] = array (
  'name' => 'custo_user_meetings_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_MEETINGS_1_FROM_MEETINGS_TITLE',
);
