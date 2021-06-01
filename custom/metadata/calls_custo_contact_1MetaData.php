<?php
// created: 2020-10-30 16:11:47
$dictionary["calls_custo_contact_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'calls_custo_contact_1' => 
    array (
      'lhs_module' => 'Calls',
      'lhs_table' => 'calls',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_contact',
      'rhs_table' => 'custo_contact',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'calls_custo_contact_1_c',
      'join_key_lhs' => 'calls_custo_contact_1calls_ida',
      'join_key_rhs' => 'calls_custo_contact_1custo_contact_idb',
    ),
  ),
  'table' => 'calls_custo_contact_1_c',
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
      'name' => 'calls_custo_contact_1calls_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'calls_custo_contact_1custo_contact_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'calls_custo_contact_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'calls_custo_contact_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'calls_custo_contact_1calls_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'calls_custo_contact_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'calls_custo_contact_1custo_contact_idb',
      ),
    ),
  ),
);