<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-10-15 00:18:13
$dictionary["Task"]["fields"]["custo_user_tasks_1"] = array (
  'name' => 'custo_user_tasks_1',
  'type' => 'link',
  'relationship' => 'custo_user_tasks_1',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_TASKS_1_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_tasks_1custo_user_ida',
);
$dictionary["Task"]["fields"]["custo_user_tasks_1_name"] = array (
  'name' => 'custo_user_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_TASKS_1_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_tasks_1custo_user_ida',
  'link' => 'custo_user_tasks_1',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Task"]["fields"]["custo_user_tasks_1custo_user_ida"] = array (
  'name' => 'custo_user_tasks_1custo_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_TASKS_1_FROM_TASKS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Task"]["fields"]["custo_contact_tasks"] = array (
  'name' => 'custo_contact_tasks',
  'type' => 'link',
  'relationship' => 'custo_contact_tasks',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_CUSTO_CONTACT_TITLE',
  'id_name' => 'custo_contact_taskscusto_contact_ida',
);
$dictionary["Task"]["fields"]["custo_contact_tasks_name"] = array (
  'name' => 'custo_contact_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_CUSTO_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_taskscusto_contact_ida',
  'link' => 'custo_contact_tasks',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Task"]["fields"]["custo_contact_taskscusto_contact_ida"] = array (
  'name' => 'custo_contact_taskscusto_contact_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_TASKS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Task"]["fields"]["custo_user_tasks"] = array (
  'name' => 'custo_user_tasks',
  'type' => 'link',
  'relationship' => 'custo_user_tasks',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_TASKS_FROM_CUSTO_USER_TITLE',
);


// created: 2020-10-15 00:18:14
$dictionary["Task"]["fields"]["custo_company_tasks"] = array (
  'name' => 'custo_company_tasks',
  'type' => 'link',
  'relationship' => 'custo_company_tasks',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_taskscusto_company_ida',
);
$dictionary["Task"]["fields"]["custo_company_tasks_name"] = array (
  'name' => 'custo_company_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_taskscusto_company_ida',
  'link' => 'custo_company_tasks',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["custo_company_taskscusto_company_ida"] = array (
  'name' => 'custo_company_taskscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_TASKS_TITLE',
);


 // created: 2020-11-03 17:32:54
$dictionary['Task']['fields']['contact_uclean_c']['inline_edit']='1';
$dictionary['Task']['fields']['contact_uclean_c']['labelValue']='Контакт Uclean';

 

 // created: 2020-11-03 17:32:54
$dictionary['Task']['fields']['custo_contact_id_c']['inline_edit']=1;

 
?>