<?php
$module_name = 'custo_contact';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
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
  ),
  'SITY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SITY',
    'width' => '10%',
  ),
  'PRIMARY_ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PRIMARY_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTO_CONTACT_CUSTO_COMPANY_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTO_CONTACT_CUSTO_COMPANY_1_FROM_CUSTO_COMPANY_TITLE',
    'id' => 'CUSTO_CONTACT_CUSTO_COMPANY_1CUSTO_COMPANY_IDB',
    'width' => '15%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_WORK' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OFFICE_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'CUSTO_USER_CUSTO_CONTACT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTO_USER_CUSTO_CONTACT_FROM_CUSTO_USER_TITLE',
    'id' => 'CUSTO_USER_CUSTO_CONTACTCUSTO_USER_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'SUURCE_CONTACT_UCLEAN_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SUURCE_CONTACT_UCLEAN',
    'width' => '15%',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'UR_FACE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_UR_FACE',
    'width' => '10%',
  ),
  'DO_NOT_CALL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DO_NOT_CALL',
    'default' => false,
  ),
  'SET_PROPOSE_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SET_PROPOSE',
    'width' => '10%',
  ),
  'LPR_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_LPR',
    'width' => '10%',
  ),
  'TEL_LPR_C' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TEL_LPR',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'PHONE_HOME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_HOME_PHONE',
    'default' => false,
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => false,
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TITLE',
    'default' => false,
  ),
  'ADDRESS_STATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PRIMARY_ADDRESS_STATE',
    'default' => false,
  ),
  'ORDER_DATE_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_ORDER_DATE',
    'width' => '10%',
  ),
  'GET_ORDER_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_GET_ORDER',
    'sortable' => false,
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
);
;
?>
