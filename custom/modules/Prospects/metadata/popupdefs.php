<?php
$popupMeta = array (
    'moduleMain' => 'Prospect',
    'varName' => 'PROSPECT',
    'orderBy' => 'prospects.last_name, prospects.first_name',
    'whereClauses' => array (
  'first_name' => 'prospects.first_name',
  'last_name' => 'prospects.last_name',
  'phone' => 'prospects.phone',
  'email' => 'prospects.email',
  'assistant' => 'prospects.assistant',
  'do_not_call' => 'prospects.do_not_call',
  'address_street' => 'prospects.address_street',
  'address_state' => 'prospects.address_state',
  'address_postalcode' => 'prospects.address_postalcode',
  'primary_address_country' => 'prospects.primary_address_country',
  'sourse_contact_uclean_c' => 'prospects_cstm.sourse_contact_uclean_c',
  'assigned_user_id' => 'prospects.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'phone',
  3 => 'email',
  4 => 'assistant',
  5 => 'do_not_call',
  6 => 'address_street',
  7 => 'address_state',
  8 => 'address_postalcode',
  9 => 'primary_address_country',
  10 => 'sourse_contact_uclean_c',
  11 => 'assigned_user_id',
),
    'create' => array (
  'formBase' => 'ProspectFormBase.php',
  'formBaseClass' => 'ProspectFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ProspectSave',
  ),
  'createButton' => 'LNK_NEW_PROSPECT',
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
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
    'type' => 'name',
    'width' => '10%',
  ),
  'assistant' => 
  array (
    'name' => 'assistant',
    'width' => '10%',
  ),
  'do_not_call' => 
  array (
    'name' => 'do_not_call',
    'width' => '10%',
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_state' => 
  array (
    'name' => 'address_state',
    'label' => 'LBL_STATE',
    'type' => 'name',
    'width' => '10%',
  ),
  'address_postalcode' => 
  array (
    'name' => 'address_postalcode',
    'label' => 'LBL_POSTAL_CODE',
    'type' => 'name',
    'width' => '10%',
  ),
  'primary_address_country' => 
  array (
    'name' => 'primary_address_country',
    'label' => 'LBL_COUNTRY',
    'type' => 'name',
    'options' => 'countries_dom',
    'width' => '10%',
  ),
  'sourse_contact_uclean_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SOURSE_CONTACT_UCLEAN',
    'width' => '10%',
    'name' => 'sourse_contact_uclean_c',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
