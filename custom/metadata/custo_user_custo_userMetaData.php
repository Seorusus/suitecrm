<?php
// created: 2020-10-15 00:18:13
$dictionary["custo_user_custo_user"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'custo_user_custo_user' => 
    array (
      'lhs_module' => 'custo_user',
      'lhs_table' => 'custo_user',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_user',
      'rhs_table' => 'custo_user',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_user_custo_user_c',
      'join_key_lhs' => 'custo_user_custo_usercusto_user_ida',
      'join_key_rhs' => 'custo_user_custo_usercusto_user_idb',
    ),
  ),
  'table' => 'custo_user_custo_user_c',
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
      'name' => 'custo_user_custo_usercusto_user_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_user_custo_usercusto_user_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_user_custo_userspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_user_custo_user_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_user_custo_usercusto_user_ida',
        1 => 'custo_user_custo_usercusto_user_idb',
      ),
    ),
  ),
);