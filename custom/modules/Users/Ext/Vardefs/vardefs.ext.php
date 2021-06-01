<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:14
$dictionary["User"]["fields"]["custo_company_users"] = array (
  'name' => 'custo_company_users',
  'type' => 'link',
  'relationship' => 'custo_company_users',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["User"]["fields"]["custo_user_users_1"] = array (
  'name' => 'custo_user_users_1',
  'type' => 'link',
  'relationship' => 'custo_user_users_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_USERS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_users_1custo_user_ida',
);
$dictionary["User"]["fields"]["custo_user_users_1_name"] = array (
  'name' => 'custo_user_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_USERS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_users_1custo_user_ida',
  'link' => 'custo_user_users_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["User"]["fields"]["custo_user_users_1custo_user_ida"] = array (
  'name' => 'custo_user_users_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_USERS_1_FROM_USERS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["User"]["fields"]["custo_contact_users"] = array (
  'name' => 'custo_contact_users',
  'type' => 'link',
  'relationship' => 'custo_contact_users',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["User"]["fields"]["custo_contact_users_1"] = array (
  'name' => 'custo_contact_users_1',
  'type' => 'link',
  'relationship' => 'custo_contact_users_1',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_1_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["User"]["fields"]["custo_user_users"] = array (
  'name' => 'custo_user_users',
  'type' => 'link',
  'relationship' => 'custo_user_users',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_USERS_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_userscusto_user_ida',
);
$dictionary["User"]["fields"]["custo_user_users_name"] = array (
  'name' => 'custo_user_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_USERS_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_userscusto_user_ida',
  'link' => 'custo_user_users',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["User"]["fields"]["custo_user_userscusto_user_ida"] = array (
  'name' => 'custo_user_userscusto_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_USERS_FROM_USERS_TITLE',
);


 // created: 2020-10-14 22:33:45
$dictionary['User']['fields']['sity_c']['inline_edit']='1';
$dictionary['User']['fields']['sity_c']['labelValue']='Мiсто';

 

 // created: 2020-10-14 00:57:22
$dictionary['User']['fields']['company_c']['inline_edit']='1';
$dictionary['User']['fields']['company_c']['labelValue']='Контрагент Uclean Group';

 

 // created: 2020-07-28 22:33:13
$dictionary['User']['fields']['asterisk_inbound_c']['inline_edit']=1;

 

 // created: 2020-07-28 22:33:13
$dictionary['User']['fields']['asterisk_outbound_c']['inline_edit']=1;

 

 // created: 2020-07-28 22:33:14
$dictionary['User']['fields']['asterisk_ext_c']['inline_edit']=1;

 

 // created: 2020-10-14 00:57:22
$dictionary['User']['fields']['custo_company_id_c']['inline_edit']=1;

 
?>