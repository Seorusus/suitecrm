<?php
// created: 2020-10-14 23:47:42
$dictionary["custo_contact"]["fields"]["custo_user_custo_contact"] = array (
  'name' => 'custo_user_custo_contact',
  'type' => 'link',
  'relationship' => 'custo_user_custo_contact',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => false,
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_custo_contactcusto_user_ida',
);
$dictionary["custo_contact"]["fields"]["custo_user_custo_contact_name"] = array (
  'name' => 'custo_user_custo_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_custo_contactcusto_user_ida',
  'link' => 'custo_user_custo_contact',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_contact"]["fields"]["custo_user_custo_contactcusto_user_ida"] = array (
  'name' => 'custo_user_custo_contactcusto_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_custo_contact',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_CONTACT_TITLE',
);
