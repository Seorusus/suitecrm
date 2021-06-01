<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2020-07-31 10:37:42
$dictionary["Lead"]["fields"]["leads_campaigns_1"] = array (
  'name' => 'leads_campaigns_1',
  'type' => 'link',
  'relationship' => 'leads_campaigns_1',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'side' => 'right',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
);


// created: 2020-07-31 09:52:23
$dictionary["Lead"]["fields"]["leads_calls_1"] = array (
  'name' => 'leads_calls_1',
  'type' => 'link',
  'relationship' => 'leads_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_LEADS_CALLS_1_FROM_CALLS_TITLE',
);


 // created: 2020-07-31 09:01:27
$dictionary['Lead']['fields']['first_call_c']['inline_edit']='1';
$dictionary['Lead']['fields']['first_call_c']['labelValue']='Обращение';

 

 // created: 2020-06-30 18:15:04
$dictionary['Lead']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2020-09-19 10:59:20
$dictionary['Lead']['fields']['email_4_c']['inline_edit']='1';
$dictionary['Lead']['fields']['email_4_c']['labelValue']='Email 4';

 

 // created: 2020-07-31 09:14:06
$dictionary['Lead']['fields']['last_name']['required']=true;
$dictionary['Lead']['fields']['last_name']['comments']='Заполняется при первом обращении';

 

 // created: 2020-07-31 11:43:15
$dictionary['Lead']['fields']['market_comp_c']['inline_edit']='1';
$dictionary['Lead']['fields']['market_comp_c']['labelValue']='Маркетинговая кампания';

 

 // created: 2020-07-31 11:43:15
$dictionary['Lead']['fields']['campaign_id_c']['inline_edit']=1;

 

 // created: 2020-07-31 09:35:37
$dictionary['Lead']['fields']['phone_work']['default']='';

 

 // created: 2020-06-30 18:15:04
$dictionary['Lead']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2020-07-03 15:31:15
$dictionary['Lead']['fields']['lead_source']['default']='Self Generated';
$dictionary['Lead']['fields']['lead_source']['inline_edit']=true;
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';

 

 // created: 2020-08-17 19:22:56
$dictionary['Lead']['fields']['first_name']['inline_edit']=true;
$dictionary['Lead']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Lead']['fields']['first_name']['merge_filter']='disabled';

 

 // created: 2020-06-30 18:15:04
$dictionary['Lead']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2020-06-30 18:15:04
$dictionary['Lead']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2020-09-19 10:59:49
$dictionary['Lead']['fields']['email_5_c']['inline_edit']='1';
$dictionary['Lead']['fields']['email_5_c']['labelValue']='Email 5';

 

 // created: 2020-09-19 10:58:07
$dictionary['Lead']['fields']['email_2_c']['inline_edit']='1';
$dictionary['Lead']['fields']['email_2_c']['labelValue']='Email 2';

 

 // created: 2020-09-19 10:58:51
$dictionary['Lead']['fields']['email_3_c']['inline_edit']='1';
$dictionary['Lead']['fields']['email_3_c']['labelValue']='Email 3';

 
?>