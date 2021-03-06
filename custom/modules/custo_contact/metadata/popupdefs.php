<?php
$popupMeta = array (
    'moduleMain' => 'custo_contact',
    'varName' => 'custo_contact',
    'orderBy' => 'custo_contact.first_name, custo_contact.last_name',
    'whereClauses' => array (
  'first_name' => 'custo_contact.first_name',
  'last_name' => 'custo_contact.last_name',
  'created_by_name' => 'custo_contact.created_by_name',
  'email' => 'custo_contact.email',
  'sity_c' => 'custo_contact_cstm.sity_c',
  'suurce_contact_uclean_c' => 'custo_contact_cstm.suurce_contact_uclean_c',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  4 => 'created_by_name',
  5 => 'email',
  6 => 'sity_c',
  7 => 'suurce_contact_uclean_c',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'sity_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SITY',
    'width' => '10%',
    'name' => 'sity_c',
  ),
  'suurce_contact_uclean_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SUURCE_CONTACT_UCLEAN',
    'width' => '10%',
    'name' => 'suurce_contact_uclean_c',
  ),
  'created_by_name' => 
  array (
    'name' => 'created_by_name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'link' => true,
    'orderBy' => 'last_name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
    ),
    'name' => 'name',
  ),
  'SITY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SITY',
    'width' => '10%',
    'name' => 'sity_c',
  ),
  'CUSTO_CONTACT_CUSTO_COMPANY_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
    'id' => 'CUSTO_CONTACT_CUSTO_COMPANY_1CUSTO_COMPANY_IDB',
    'width' => '15%',
    'default' => true,
    'name' => 'custo_contact_custo_company_1_name',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => true,
    'name' => 'phone_work',
  ),
  'EMAIL1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
    'name' => 'email1',
  ),
  'CUSTO_USER_CUSTO_CONTACT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE',
    'id' => 'CUSTO_USER_CUSTO_CONTACTCUSTO_USER_IDA',
    'width' => '15%',
    'default' => true,
    'name' => 'custo_user_custo_contact_name',
  ),
  'SOURSE_CONTACTUCLEAN_GROUP_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SOURSE_CONTACTUCLEAN_GROUP',
    'width' => '15%',
    'name' => 'sourse_contactuclean_group_c',
  ),
),
);
