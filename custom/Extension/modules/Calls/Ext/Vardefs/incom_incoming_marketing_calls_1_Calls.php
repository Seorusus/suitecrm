<?php
// created: 2020-07-31 14:00:12
$dictionary["Call"]["fields"]["incom_incoming_marketing_calls_1"] = array (
  'name' => 'incom_incoming_marketing_calls_1',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_calls_1',
  'source' => 'non-db',
  'module' => 'incom_incoming_marketing',
  'bean_name' => 'incom_incoming_marketing',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CALLS_1_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'id_name' => 'incom_incoming_marketing_calls_1incom_incoming_marketing_ida',
);
$dictionary["Call"]["fields"]["incom_incoming_marketing_calls_1_name"] = array (
  'name' => 'incom_incoming_marketing_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CALLS_1_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'save' => true,
  'id_name' => 'incom_incoming_marketing_calls_1incom_incoming_marketing_ida',
  'link' => 'incom_incoming_marketing_calls_1',
  'table' => 'incom_incoming_marketing',
  'module' => 'incom_incoming_marketing',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["incom_incoming_marketing_calls_1incom_incoming_marketing_ida"] = array (
  'name' => 'incom_incoming_marketing_calls_1incom_incoming_marketing_ida',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CALLS_1_FROM_CALLS_TITLE',
);
