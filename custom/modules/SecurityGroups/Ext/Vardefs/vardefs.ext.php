<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:13
$dictionary["SecurityGroup"]["fields"]["custo_user_securitygroups"] = array (
  'name' => 'custo_user_securitygroups',
  'type' => 'link',
  'relationship' => 'custo_user_securitygroups',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_SECURITYGROUPS_FROM_CUSTO_USER_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["SecurityGroup"]["fields"]["custo_user_securitygroups_1"] = array (
  'name' => 'custo_user_securitygroups_1',
  'type' => 'link',
  'relationship' => 'custo_user_securitygroups_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_SECURITYGROUPS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_securitygroups_1custo_user_ida',
);
$dictionary["SecurityGroup"]["fields"]["custo_user_securitygroups_1_name"] = array (
  'name' => 'custo_user_securitygroups_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_SECURITYGROUPS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_securitygroups_1custo_user_ida',
  'link' => 'custo_user_securitygroups_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["SecurityGroup"]["fields"]["custo_user_securitygroups_1custo_user_ida"] = array (
  'name' => 'custo_user_securitygroups_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_securitygroups_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["SecurityGroup"]["fields"]["custo_company_securitygroups"] = array (
  'name' => 'custo_company_securitygroups',
  'type' => 'link',
  'relationship' => 'custo_company_securitygroups',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_SECURITYGROUPS_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["SecurityGroup"]["fields"]["custo_contact_securitygroups"] = array (
  'name' => 'custo_contact_securitygroups',
  'type' => 'link',
  'relationship' => 'custo_contact_securitygroups',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_SECURITYGROUPS_FROM_CUSTO_CONTACT_TITLE',
);

?>