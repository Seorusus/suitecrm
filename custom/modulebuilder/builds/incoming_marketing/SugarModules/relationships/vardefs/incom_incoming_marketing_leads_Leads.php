<?php
// created: 2020-07-31 12:25:15
$dictionary["Lead"]["fields"]["incom_incoming_marketing_leads"] = array (
  'name' => 'incom_incoming_marketing_leads',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_leads',
  'source' => 'non-db',
  'module' => 'incom_incoming_marketing',
  'bean_name' => false,
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_LEADS_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'id_name' => 'incom_incoming_marketing_leadsincom_incoming_marketing_ida',
);
$dictionary["Lead"]["fields"]["incom_incoming_marketing_leads_name"] = array (
  'name' => 'incom_incoming_marketing_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_LEADS_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'save' => true,
  'id_name' => 'incom_incoming_marketing_leadsincom_incoming_marketing_ida',
  'link' => 'incom_incoming_marketing_leads',
  'table' => 'incom_incoming_marketing',
  'module' => 'incom_incoming_marketing',
  'rname' => 'name',
);
$dictionary["Lead"]["fields"]["incom_incoming_marketing_leadsincom_incoming_marketing_ida"] = array (
  'name' => 'incom_incoming_marketing_leadsincom_incoming_marketing_ida',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_LEADS_FROM_LEADS_TITLE',
);
