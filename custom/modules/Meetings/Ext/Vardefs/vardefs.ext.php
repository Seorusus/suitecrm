<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:13
$dictionary["Meeting"]["fields"]["custo_contact_meetings"] = array (
  'name' => 'custo_contact_meetings',
  'type' => 'link',
  'relationship' => 'custo_contact_meetings',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_MEETINGS_FROM_CUSTO_CONTACT_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["Meeting"]["fields"]["custo_company_meetings"] = array (
  'name' => 'custo_company_meetings',
  'type' => 'link',
  'relationship' => 'custo_company_meetings',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_meetingscusto_company_ida',
);
$dictionary["Meeting"]["fields"]["custo_company_meetings_name"] = array (
  'name' => 'custo_company_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_meetingscusto_company_ida',
  'link' => 'custo_company_meetings',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["custo_company_meetingscusto_company_ida"] = array (
  'name' => 'custo_company_meetingscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Meeting"]["fields"]["custo_user_meetings"] = array (
  'name' => 'custo_user_meetings',
  'type' => 'link',
  'relationship' => 'custo_user_meetings',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_MEETINGS_FROM_CUSTO_USER_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Meeting"]["fields"]["custo_user_meetings_1"] = array (
  'name' => 'custo_user_meetings_1',
  'type' => 'link',
  'relationship' => 'custo_user_meetings_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_MEETINGS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_meetings_1custo_user_ida',
);
$dictionary["Meeting"]["fields"]["custo_user_meetings_1_name"] = array (
  'name' => 'custo_user_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_MEETINGS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_meetings_1custo_user_ida',
  'link' => 'custo_user_meetings_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Meeting"]["fields"]["custo_user_meetings_1custo_user_ida"] = array (
  'name' => 'custo_user_meetings_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_MEETINGS_1_FROM_MEETINGS_TITLE',
);


 // created: 2020-06-30 18:15:04
$dictionary['Meeting']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2020-06-30 18:15:04
$dictionary['Meeting']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2020-06-30 18:15:04
$dictionary['Meeting']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2020-06-30 18:15:04
$dictionary['Meeting']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 
?>