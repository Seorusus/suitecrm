<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:14
$dictionary["Call"]["fields"]["custo_company_calls"] = array (
  'name' => 'custo_company_calls',
  'type' => 'link',
  'relationship' => 'custo_company_calls',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_callscusto_company_ida',
);
$dictionary["Call"]["fields"]["custo_company_calls_name"] = array (
  'name' => 'custo_company_calls_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_callscusto_company_ida',
  'link' => 'custo_company_calls',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["custo_company_callscusto_company_ida"] = array (
  'name' => 'custo_company_callscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_calls',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CALLS_FROM_CALLS_TITLE',
);


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


// created: 2020-10-30 16:11:48
$dictionary["Call"]["fields"]["calls_custo_contact_1"] = array (
  'name' => 'calls_custo_contact_1',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
  'id_name' => 'calls_custo_contact_1custo_contact_idb',
);
$dictionary["Call"]["fields"]["calls_custo_contact_1_name"] = array (
  'name' => 'calls_custo_contact_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'calls_custo_contact_1custo_contact_idb',
  'link' => 'calls_custo_contact_1',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Call"]["fields"]["calls_custo_contact_1custo_contact_idb"] = array (
  'name' => 'calls_custo_contact_1custo_contact_idb',
  'type' => 'link',
  'relationship' => 'calls_custo_contact_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CALLS_CUSTO_CONTACT_1_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Call"]["fields"]["custo_contact_calls"] = array (
  'name' => 'custo_contact_calls',
  'type' => 'link',
  'relationship' => 'custo_contact_calls',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_CALLS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Call"]["fields"]["custo_user_calls_1"] = array (
  'name' => 'custo_user_calls_1',
  'type' => 'link',
  'relationship' => 'custo_user_calls_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CALLS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_calls_1custo_user_ida',
);
$dictionary["Call"]["fields"]["custo_user_calls_1_name"] = array (
  'name' => 'custo_user_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_CALLS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_calls_1custo_user_ida',
  'link' => 'custo_user_calls_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Call"]["fields"]["custo_user_calls_1custo_user_ida"] = array (
  'name' => 'custo_user_calls_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2020-07-31 09:52:23
$dictionary["Call"]["fields"]["leads_calls_1"] = array (
  'name' => 'leads_calls_1',
  'type' => 'link',
  'relationship' => 'leads_calls_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_CALLS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_calls_1leads_ida',
);
$dictionary["Call"]["fields"]["leads_calls_1_name"] = array (
  'name' => 'leads_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CALLS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_calls_1leads_ida',
  'link' => 'leads_calls_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Call"]["fields"]["leads_calls_1leads_ida"] = array (
  'name' => 'leads_calls_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CALLS_1_FROM_CALLS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Call"]["fields"]["custo_user_calls"] = array (
  'name' => 'custo_user_calls',
  'type' => 'link',
  'relationship' => 'custo_user_calls',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CALLS_FROM_CUSTO_USER_TITLE',
);


 // created: 2020-07-28 22:33:14
$dictionary['Call']['fields']['asterisk_user_ext_c']['inline_edit']=1;

 

 // created: 2020-07-28 22:33:14
$dictionary['Call']['fields']['asterisk_inbound_ext_c']['inline_edit']=1;

 

 // created: 2020-07-31 16:52:33
$dictionary['Call']['fields']['status']['default']='Held';
$dictionary['Call']['fields']['status']['inline_edit']=true;
$dictionary['Call']['fields']['status']['comments']='The status of the call (Held, Not Held, etc.)';
$dictionary['Call']['fields']['status']['merge_filter']='disabled';

 

 // created: 2020-07-30 16:10:16
$dictionary['Call']['fields']['aok_knowledgebase_id_c']['inline_edit']=1;

 

 // created: 2020-07-30 16:10:16
$dictionary['Call']['fields']['call_script_c']['inline_edit']='1';
$dictionary['Call']['fields']['call_script_c']['labelValue']='Скрипт звонка';

 

 // created: 2020-07-30 15:35:31
$dictionary['Call']['fields']['campaign_id_c']['inline_edit']=1;

 

 // created: 2020-07-28 22:33:14
$dictionary['Call']['fields']['asterisk_caller_id_c']['inline_edit']=1;

 

 // created: 2020-07-30 15:35:31
$dictionary['Call']['fields']['company_c']['inline_edit']='1';
$dictionary['Call']['fields']['company_c']['labelValue']='Компания';

 

 // created: 2020-10-28 22:29:09
$dictionary['Call']['fields']['type_call_list_c']['inline_edit']='1';
$dictionary['Call']['fields']['type_call_list_c']['labelValue']='Тип входящего звонка';

 

 // created: 2020-07-28 22:33:14
$dictionary['Call']['fields']['asterisk_call_id_c']['inline_edit']=1;

 

 // created: 2020-07-31 17:01:58
$dictionary['Call']['fields']['name']['inline_edit']=true;
$dictionary['Call']['fields']['name']['comments']='Brief description of the call';
$dictionary['Call']['fields']['name']['merge_filter']='disabled';
$dictionary['Call']['fields']['name']['full_text_search']=array (
);

 

 // created: 2020-07-31 16:30:59
$dictionary['Call']['fields']['duration_minutes']['inline_edit']=true;
$dictionary['Call']['fields']['duration_minutes']['comments']='Call duration, minutes portion';
$dictionary['Call']['fields']['duration_minutes']['merge_filter']='disabled';
$dictionary['Call']['fields']['duration_minutes']['enable_range_search']=false;
$dictionary['Call']['fields']['duration_minutes']['min']=1;
$dictionary['Call']['fields']['duration_minutes']['max']=false;
$dictionary['Call']['fields']['duration_minutes']['disable_num_format']='';

 
?>