<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_user_custo_contact_1"] = array (
  'name' => 'custo_user_custo_contact_1',
  'type' => 'link',
  'relationship' => 'custo_user_custo_contact_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_1_FROM_CUSTO_USER_TITLE',
);


// created: 2020-11-02 12:34:31
$dictionary["custo_contact"]["fields"]["prospects_custo_contact_1"] = array (
  'name' => 'prospects_custo_contact_1',
  'type' => 'link',
  'relationship' => 'prospects_custo_contact_1',
  'source' => 'non-db',
  'module' => 'Prospects',
  'bean_name' => 'Prospect',
  'vname' => 'LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_PROSPECTS_TITLE',
  'id_name' => 'prospects_custo_contact_1prospects_ida',
);
$dictionary["custo_contact"]["fields"]["prospects_custo_contact_1_name"] = array (
  'name' => 'prospects_custo_contact_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospects_custo_contact_1prospects_ida',
  'link' => 'prospects_custo_contact_1',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["custo_contact"]["fields"]["prospects_custo_contact_1prospects_ida"] = array (
  'name' => 'prospects_custo_contact_1prospects_ida',
  'type' => 'link',
  'relationship' => 'prospects_custo_contact_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_campaigns"] = array (
  'name' => 'custo_contact_campaigns',
  'type' => 'link',
  'relationship' => 'custo_contact_campaigns',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'custo_contact_campaignscampaigns_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_campaigns_name"] = array (
  'name' => 'custo_contact_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_campaignscampaigns_ida',
  'link' => 'custo_contact_campaigns',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_campaignscampaigns_ida"] = array (
  'name' => 'custo_contact_campaignscampaigns_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_prospectlists"] = array (
  'name' => 'custo_contact_prospectlists',
  'type' => 'link',
  'relationship' => 'custo_contact_prospectlists',
  'source' => 'non-db',
  'module' => 'ProspectLists',
  'bean_name' => 'ProspectList',
  'vname' => 'LBL_CUSTO_CONTACT_PROSPECTLISTS_FROM_PROSPECTLISTS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_securitygroups"] = array (
  'name' => 'custo_contact_securitygroups',
  'type' => 'link',
  'relationship' => 'custo_contact_securitygroups',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_CUSTO_CONTACT_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_users_1"] = array (
  'name' => 'custo_contact_users_1',
  'type' => 'link',
  'relationship' => 'custo_contact_users_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_1_FROM_USERS_TITLE',
);


// created: 2020-10-15 00:18:13
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


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_jjwg_maps"] = array (
  'name' => 'custo_contact_jjwg_maps',
  'type' => 'link',
  'relationship' => 'custo_contact_jjwg_maps',
  'source' => 'non-db',
  'module' => 'jjwg_Maps',
  'bean_name' => 'jjwg_Maps',
  'vname' => 'LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'id_name' => 'custo_contact_jjwg_mapsjjwg_maps_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_jjwg_maps_name"] = array (
  'name' => 'custo_contact_jjwg_maps_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_jjwg_mapsjjwg_maps_ida',
  'link' => 'custo_contact_jjwg_maps',
  'table' => 'jjwg_maps',
  'module' => 'jjwg_Maps',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_jjwg_mapsjjwg_maps_ida"] = array (
  'name' => 'custo_contact_jjwg_mapsjjwg_maps_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_jjwg_maps',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["custo_contact"]["fields"]["custo_company_custo_contact"] = array (
  'name' => 'custo_company_custo_contact',
  'type' => 'link',
  'relationship' => 'custo_company_custo_contact',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_CUSTO_CONTACT_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_tasks"] = array (
  'name' => 'custo_contact_tasks',
  'type' => 'link',
  'relationship' => 'custo_contact_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_TASKS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_emails"] = array (
  'name' => 'custo_contact_emails',
  'type' => 'link',
  'relationship' => 'custo_contact_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_CUSTO_CONTACT_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company"] = array (
  'name' => 'custo_contact_custo_company',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-30 16:11:48
$dictionary["custo_contact"]["fields"]["calls_custo_contact_1"] = array (
  'name' => 'calls_custo_contact_1',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE',
  'id_name' => 'calls_custo_contact_1calls_ida',
);
$dictionary["custo_contact"]["fields"]["calls_custo_contact_1_name"] = array (
  'name' => 'calls_custo_contact_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'calls_custo_contact_1calls_ida',
  'link' => 'calls_custo_contact_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["calls_custo_contact_1calls_ida"] = array (
  'name' => 'calls_custo_contact_1calls_ida',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CALLS_TITLE',
);


// created: 2020-10-15 00:18:12
$dictionary["custo_contact"]["fields"]["custo_contact_users"] = array (
  'name' => 'custo_contact_users',
  'type' => 'link',
  'relationship' => 'custo_contact_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_USERS_TITLE',
  'id_name' => 'custo_contact_usersusers_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_users_name"] = array (
  'name' => 'custo_contact_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_usersusers_ida',
  'link' => 'custo_contact_users',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_usersusers_ida"] = array (
  'name' => 'custo_contact_usersusers_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_USERS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-16 14:18:17
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company_1"] = array (
  'name' => 'custo_contact_custo_company_1',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_contact_custo_company_1custo_company_idb',
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company_1_name"] = array (
  'name' => 'custo_contact_custo_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_custo_company_1custo_company_idb',
  'link' => 'custo_contact_custo_company_1',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_company_1custo_company_idb"] = array (
  'name' => 'custo_contact_custo_company_1custo_company_idb',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_calls"] = array (
  'name' => 'custo_contact_calls',
  'type' => 'link',
  'relationship' => 'custo_contact_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_CUSTO_CONTACT_CALLS_FROM_CALLS_TITLE',
);


// created: 2020-10-15 00:18:12
$dictionary["custo_contact"]["fields"]["custo_contact_custo_contact"]=array (
  'name' => 'custo_contact_custo_contact',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_contact',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_L_TITLE',
  'id_name' => 'custo_contact_custo_contactcusto_contact_ida',
  'side' => 'left',
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_contact_name"] = array (
  'name' => 'custo_contact_custo_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_L_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_custo_contactcusto_contact_ida',
  'link' => 'custo_contact_custo_contact',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_contact"]["fields"]["custo_contact_custo_contactcusto_contact_ida"] = array (
  'name' => 'custo_contact_custo_contactcusto_contact_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_custo_contact',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_CUSTO_CONTACT_FROM_CUSTO_CONTACT_R_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_user_custo_contact"] = array (
  'name' => 'custo_user_custo_contact',
  'type' => 'link',
  'relationship' => 'custo_user_custo_contact',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_custo_contactcusto_user_ida',
);
$dictionary["custo_contact"]["fields"]["custo_user_custo_contact_name"] = array (
  'name' => 'custo_user_custo_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_custo_contactcusto_user_ida',
  'link' => 'custo_user_custo_contact',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["custo_contact"]["fields"]["custo_user_custo_contactcusto_user_ida"] = array (
  'name' => 'custo_user_custo_contactcusto_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_custo_contact',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_meetings"] = array (
  'name' => 'custo_contact_meetings',
  'type' => 'link',
  'relationship' => 'custo_contact_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_CUSTO_CONTACT_MEETINGS_FROM_MEETINGS_TITLE',
);


 // created: 2020-10-30 17:01:47
$dictionary['custo_contact']['fields']['custo_user_id_c']['inline_edit']=1;

 

 // created: 2020-11-25 09:52:16
$dictionary['custo_contact']['fields']['get_order_z_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['get_order_z_c']['options']='date_range_search_dom';
$dictionary['custo_contact']['fields']['get_order_z_c']['labelValue']='Прийнято замовлення, дата:';
$dictionary['custo_contact']['fields']['get_order_z_c']['enable_range_search']='1';

 

 // created: 2020-10-28 22:33:20
$dictionary['custo_contact']['fields']['status_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['status_c']['labelValue']='Статус контакта';

 

 // created: 2020-11-02 14:05:17
$dictionary['custo_contact']['fields']['email1']['audited']=true;
$dictionary['custo_contact']['fields']['email1']['inline_edit']=true;
$dictionary['custo_contact']['fields']['email1']['merge_filter']='disabled';

 

 // created: 2020-10-29 15:55:14
$dictionary['custo_contact']['fields']['ur_face_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['ur_face_c']['labelValue']='Юридическое лицо или нет';

 

 // created: 2020-11-25 09:51:27
$dictionary['custo_contact']['fields']['order_date_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['order_date_c']['options']='date_range_search_dom';
$dictionary['custo_contact']['fields']['order_date_c']['labelValue']='Дата замовлення';
$dictionary['custo_contact']['fields']['order_date_c']['enable_range_search']='1';

 

 // created: 2020-10-16 14:05:28
$dictionary['custo_contact']['fields']['suurce_contact_uclean_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['suurce_contact_uclean_c']['labelValue']='Источник Контакта Uclean_Group';

 

 // created: 2020-10-16 12:00:00
$dictionary['custo_contact']['fields']['tel_lpr_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['tel_lpr_c']['labelValue']='телефон ЛПР';

 

 // created: 2020-10-30 17:01:47
$dictionary['custo_contact']['fields']['partner_uclean_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['partner_uclean_c']['labelValue']='	Компания-партнер Uclean Group';

 

 // created: 2020-10-16 13:45:42
$dictionary['custo_contact']['fields']['sourse_contactuclean_group_c']['inline_edit']='1';
$dictionary['custo_contact']['fields']['sourse_contactuclean_group_c']['labelValue']='Источник Контакта Uclean_Group';

 
?>