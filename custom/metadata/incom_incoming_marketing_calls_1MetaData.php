<?php
// created: 2020-07-31 14:00:12
$dictionary["incom_incoming_marketing_calls_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'incom_incoming_marketing_calls_1' => 
    array (
      'lhs_module' => 'incom_incoming_marketing',
      'lhs_table' => 'incom_incoming_marketing',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'incom_incoming_marketing_calls_1_c',
      'join_key_lhs' => 'incom_incoming_marketing_calls_1incom_incoming_marketing_ida',
      'join_key_rhs' => 'incom_incoming_marketing_calls_1calls_idb',
    ),
  ),
  'table' => 'incom_incoming_marketing_calls_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'incom_incoming_marketing_calls_1incom_incoming_marketing_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'incom_incoming_marketing_calls_1calls_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'incom_incoming_marketing_calls_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'incom_incoming_marketing_calls_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'incom_incoming_marketing_calls_1incom_incoming_marketing_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'incom_incoming_marketing_calls_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'incom_incoming_marketing_calls_1calls_idb',
      ),
    ),
  ),
);