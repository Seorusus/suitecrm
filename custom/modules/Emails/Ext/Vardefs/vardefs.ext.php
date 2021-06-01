<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:13
$dictionary["Email"]["fields"]["custo_user_emails_1"] = array (
  'name' => 'custo_user_emails_1',
  'type' => 'link',
  'relationship' => 'custo_user_emails_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_EMAILS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_emails_1custo_user_ida',
);
$dictionary["Email"]["fields"]["custo_user_emails_1_name"] = array (
  'name' => 'custo_user_emails_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_EMAILS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_emails_1custo_user_ida',
  'link' => 'custo_user_emails_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Email"]["fields"]["custo_user_emails_1custo_user_ida"] = array (
  'name' => 'custo_user_emails_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_emails_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_EMAILS_1_FROM_EMAILS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Email"]["fields"]["custo_contact_emails"] = array (
  'name' => 'custo_contact_emails',
  'type' => 'link',
  'relationship' => 'custo_contact_emails',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_EMAILS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Email"]["fields"]["custo_user_emails"] = array (
  'name' => 'custo_user_emails',
  'type' => 'link',
  'relationship' => 'custo_user_emails',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_EMAILS_FROM_CUSTO_USER_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["Email"]["fields"]["custo_company_emails"] = array (
  'name' => 'custo_company_emails',
  'type' => 'link',
  'relationship' => 'custo_company_emails',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_emailscusto_company_ida',
);
$dictionary["Email"]["fields"]["custo_company_emails_name"] = array (
  'name' => 'custo_company_emails_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_emailscusto_company_ida',
  'link' => 'custo_company_emails',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Email"]["fields"]["custo_company_emailscusto_company_ida"] = array (
  'name' => 'custo_company_emailscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_emails',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["Email"]["fields"]["custo_company_emails_1"] = array (
  'name' => 'custo_company_emails_1',
  'type' => 'link',
  'relationship' => 'custo_company_emails_1',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_1_FROM_CUSTO_COMPANY_TITLE',
);

?>