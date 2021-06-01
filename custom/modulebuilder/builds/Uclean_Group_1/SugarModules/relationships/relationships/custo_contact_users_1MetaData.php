<?php
// created: 2020-10-15 00:18:12
$dictionary["custo_contact_users_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'custo_contact_users_1' => 
    array (
      'lhs_module' => 'custo_contact',
      'lhs_table' => 'custo_contact',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_contact_users_1_c',
      'join_key_lhs' => 'custo_contact_users_1custo_contact_ida',
      'join_key_rhs' => 'custo_contact_users_1users_idb',
    ),
  ),
  'table' => 'custo_contact_users_1_c',
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
      'name' => 'custo_contact_users_1custo_contact_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_contact_users_1users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_contact_users_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_contact_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_contact_users_1custo_contact_ida',
        1 => 'custo_contact_users_1users_idb',
      ),
    ),
  ),
);