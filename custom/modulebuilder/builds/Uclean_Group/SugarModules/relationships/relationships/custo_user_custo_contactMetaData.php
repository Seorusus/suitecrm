<?php
// created: 2020-10-14 23:47:42
$dictionary["custo_user_custo_contact"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'custo_user_custo_contact' => 
    array (
      'lhs_module' => 'custo_user',
      'lhs_table' => 'custo_user',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_contact',
      'rhs_table' => 'custo_contact',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_user_custo_contact_c',
      'join_key_lhs' => 'custo_user_custo_contactcusto_user_ida',
      'join_key_rhs' => 'custo_user_custo_contactcusto_contact_idb',
    ),
  ),
  'table' => 'custo_user_custo_contact_c',
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
      'name' => 'custo_user_custo_contactcusto_user_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_user_custo_contactcusto_contact_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_user_custo_contactspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_user_custo_contact_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'custo_user_custo_contactcusto_user_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'custo_user_custo_contact_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_user_custo_contactcusto_contact_idb',
      ),
    ),
  ),
);