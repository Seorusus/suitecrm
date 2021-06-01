<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-07-31 17:32:19
$dictionary["incom_incoming_marketing"]["fields"]["incom_incoming_marketing_contacts_1"] = array (
  'name' => 'incom_incoming_marketing_contacts_1',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CONTACTS_1_FROM_CONTACTS_TITLE',
);


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


// created: 2020-07-31 14:00:12
$dictionary["incom_incoming_marketing"]["fields"]["incom_incoming_marketing_calls_1"] = array (
  'name' => 'incom_incoming_marketing_calls_1',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2020-07-31 12:25:15
$dictionary["incom_incoming_marketing"]["fields"]["incom_incoming_marketing_leads"] = array (
  'name' => 'incom_incoming_marketing_leads',
  'type' => 'link',
  'relationship' => 'incom_incoming_marketing_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_INCOM_INCOMING_MARKETING_LEADS_FROM_LEADS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["incom_incoming_marketing"]["fields"]["custo_contact_incom_incoming_marketing"] = array (
  'name' => 'custo_contact_incom_incoming_marketing',
  'type' => 'link',
  'relationship' => 'custo_contact_incom_incoming_marketing',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_INCOM_INCOMING_MARKETING_FROM_CUSTO_CONTACT_TITLE',
);

?>