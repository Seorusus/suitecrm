<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_tasks"] = array (
  'name' => 'custo_company_tasks',
  'type' => 'link',
  'relationship' => 'custo_company_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_TASKS_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_calls"] = array (
  'name' => 'custo_company_calls',
  'type' => 'link',
  'relationship' => 'custo_company_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CALLS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_company"]["fields"]["custo_user_custo_company"] = array (
  'name' => 'custo_user_custo_company',
  'type' => 'link',
  'relationship' => 'custo_user_custo_company',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CUSTO_COMPANY_FROM_CUSTO_USER_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_jjwg_maps"] = array (
  'name' => 'custo_company_jjwg_maps',
  'type' => 'link',
  'relationship' => 'custo_company_jjwg_maps',
  'source' => 'non-db',
  'module' => 'jjwg_Maps',
  'bean_name' => 'jjwg_Maps',
  'vname' => 'LBL_CUSTO_COMPANY_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'id_name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_jjwg_maps_name"] = array (
  'name' => 'custo_company_jjwg_maps_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'save' => true,
  'id_name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
  'link' => 'custo_company_jjwg_maps',
  'table' => 'jjwg_maps',
  'module' => 'jjwg_Maps',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_jjwg_mapsjjwg_maps_ida"] = array (
  'name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
  'type' => 'link',
  'relationship' => 'custo_company_jjwg_maps',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_JJWG_MAPS_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_custo_company"]=array (
  'name' => 'custo_company_custo_company',
  'type' => 'link',
  'relationship' => 'custo_company_custo_company',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_COMPANY_FROM_CUSTO_COMPANY_L_TITLE',
  'id_name' => 'custo_company_custo_companycusto_company_ida',
  'side' => 'left',
);
$dictionary["custo_company"]["fields"]["custo_company_custo_company_name"] = array (
  'name' => 'custo_company_custo_company_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_COMPANY_FROM_CUSTO_COMPANY_L_TITLE',
  'save' => true,
  'id_name' => 'custo_company_custo_companycusto_company_ida',
  'link' => 'custo_company_custo_company',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_custo_companycusto_company_ida"] = array (
  'name' => 'custo_company_custo_companycusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_custo_company',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_COMPANY_FROM_CUSTO_COMPANY_R_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_users"] = array (
  'name' => 'custo_company_users',
  'type' => 'link',
  'relationship' => 'custo_company_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_USERS_TITLE',
  'id_name' => 'custo_company_usersusers_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_users_name"] = array (
  'name' => 'custo_company_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'custo_company_usersusers_ida',
  'link' => 'custo_company_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_usersusers_ida"] = array (
  'name' => 'custo_company_usersusers_ida',
  'type' => 'link',
  'relationship' => 'custo_company_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_USERS_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_campaigns"] = array (
  'name' => 'custo_company_campaigns',
  'type' => 'link',
  'relationship' => 'custo_company_campaigns',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'custo_company_campaignscampaigns_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_campaigns_name"] = array (
  'name' => 'custo_company_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'custo_company_campaignscampaigns_ida',
  'link' => 'custo_company_campaigns',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_campaignscampaigns_ida"] = array (
  'name' => 'custo_company_campaignscampaigns_ida',
  'type' => 'link',
  'relationship' => 'custo_company_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_prospectlists"] = array (
  'name' => 'custo_company_prospectlists',
  'type' => 'link',
  'relationship' => 'custo_company_prospectlists',
  'source' => 'non-db',
  'module' => 'ProspectLists',
  'bean_name' => 'ProspectList',
  'vname' => 'LBL_CUSTO_COMPANY_PROSPECTLISTS_FROM_PROSPECTLISTS_TITLE',
);


// created: 2020-10-16 14:18:17
$dictionary["custo_company"]["fields"]["custo_contact_custo_company_1"] = array (
  'name' => 'custo_contact_custo_company_1',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_CONTACT_TITLE',
  'id_name' => 'custo_contact_custo_company_1custo_contact_ida',
);
$dictionary["custo_company"]["fields"]["custo_contact_custo_company_1_name"] = array (
  'name' => 'custo_contact_custo_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_custo_company_1custo_contact_ida',
  'link' => 'custo_contact_custo_company_1',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_company"]["fields"]["custo_contact_custo_company_1custo_contact_ida"] = array (
  'name' => 'custo_contact_custo_company_1custo_contact_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_meetings"] = array (
  'name' => 'custo_company_meetings',
  'type' => 'link',
  'relationship' => 'custo_company_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_securitygroups"] = array (
  'name' => 'custo_company_securitygroups',
  'type' => 'link',
  'relationship' => 'custo_company_securitygroups',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_CUSTO_COMPANY_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_emails_1"] = array (
  'name' => 'custo_company_emails_1',
  'type' => 'link',
  'relationship' => 'custo_company_emails_1',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_1_FROM_EMAILS_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_custo_contact"] = array (
  'name' => 'custo_company_custo_contact',
  'type' => 'link',
  'relationship' => 'custo_company_custo_contact',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_CONTACT_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_company"]["fields"]["custo_contact_custo_company"] = array (
  'name' => 'custo_contact_custo_company',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_company"]["fields"]["custo_user_custo_company_1"] = array (
  'name' => 'custo_user_custo_company_1',
  'type' => 'link',
  'relationship' => 'custo_user_custo_company_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CUSTO_COMPANY_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_custo_company_1custo_user_ida',
);
$dictionary["custo_company"]["fields"]["custo_user_custo_company_1_name"] = array (
  'name' => 'custo_user_custo_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_CUSTO_COMPANY_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_custo_company_1custo_user_ida',
  'link' => 'custo_user_custo_company_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_company"]["fields"]["custo_user_custo_company_1custo_user_ida"] = array (
  'name' => 'custo_user_custo_company_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_custo_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_emails"] = array (
  'name' => 'custo_company_emails',
  'type' => 'link',
  'relationship' => 'custo_company_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_EMAILS_FROM_EMAILS_TITLE',
);

?>