<?php
// created: 2020-10-15 00:18:13
$dictionary["incom_incoming_marketing"]["fields"]["custo_user_incom_incoming_marketing"] = array (
  'name' => 'custo_user_incom_incoming_marketing',
  'type' => 'link',
  'relationship' => 'custo_user_incom_incoming_marketing',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_INCOM_INCOMING_MARKETING_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_incom_incoming_marketingcusto_user_ida',
);
$dictionary["incom_incoming_marketing"]["fields"]["custo_user_incom_incoming_marketing_name"] = array (
  'name' => 'custo_user_incom_incoming_marketing_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_INCOM_INCOMING_MARKETING_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_incom_incoming_marketingcusto_user_ida',
  'link' => 'custo_user_incom_incoming_marketing',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["incom_incoming_marketing"]["fields"]["custo_user_incom_incoming_marketingcusto_user_ida"] = array (
  'name' => 'custo_user_incom_incoming_marketingcusto_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_incom_incoming_marketing',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_INCOM_INCOMING_MARKETING_FROM_INCOM_INCOMING_MARKETING_TITLE',
);
