<?php
// created: 2020-10-14 23:47:42
$dictionary["custo_contact"]["fields"]["custo_contact_incom_incoming_marketing"] = array (
  'name' => 'custo_contact_incom_incoming_marketing',
  'type' => 'link',
  'relationship' => 'custo_contact_incom_incoming_marketing',
  'source' => 'non-db',
  'module' => 'incom_incoming_marketing',
  'bean_name' => 'incom_incoming_marketing',
  'vname' => 'LBL_CUSTO_CONTACT_INCOM_INCOMING_MARKETING_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'id_name' => 'custo_contf866rketing_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_incom_incoming_marketing_name"] = array (
  'name' => 'custo_contact_incom_incoming_marketing_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_INCOM_INCOMING_MARKETING_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'save' => true,
  'id_name' => 'custo_contf866rketing_ida',
  'link' => 'custo_contact_incom_incoming_marketing',
  'table' => 'incom_incoming_marketing',
  'module' => 'incom_incoming_marketing',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contf866rketing_ida"] = array (
  'name' => 'custo_contf866rketing_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_incom_incoming_marketing',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_INCOM_INCOMING_MARKETING_FROM_CUSTO_CONTACT_TITLE',
);
