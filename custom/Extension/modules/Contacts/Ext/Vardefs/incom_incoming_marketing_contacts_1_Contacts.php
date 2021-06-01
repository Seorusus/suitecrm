<?php
// created: 2020-07-31 17:32:19
$dictionary["Contact"]["fields"]["incom_incoming_marketing_contacts_1"] = array (
  'name' => 'incom_incoming_marketing_contacts_1',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_contacts_1',
  'source' => 'non-db',
  'module' => 'incom_incoming_marketing',
  'bean_name' => 'incom_incoming_marketing',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CONTACTS_1_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'id_name' => 'incom_incoming_marketing_contacts_1incom_incoming_marketing_ida',
);
$dictionary["Contact"]["fields"]["incom_incoming_marketing_contacts_1_name"] = array (
  'name' => 'incom_incoming_marketing_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CONTACTS_1_FROM_INCOM_INCOMING_MARKETING_TITLE',
  'save' => true,
  'id_name' => 'incom_incoming_marketing_contacts_1incom_incoming_marketing_ida',
  'link' => 'incom_incoming_marketing_contacts_1',
  'table' => 'incom_incoming_marketing',
  'module' => 'incom_incoming_marketing',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["incom_incoming_marketing_contacts_1incom_incoming_marketing_ida"] = array (
  'name' => 'incom_incoming_marketing_contacts_1incom_incoming_marketing_ida',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CONTACTS_1_FROM_CONTACTS_TITLE',
);
