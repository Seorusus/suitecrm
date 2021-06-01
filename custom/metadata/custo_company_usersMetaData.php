<?php
// created: 2020-10-15 00:18:14
$dictionary["custo_company_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'custo_company_users' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_company',
      'rhs_table' => 'custo_company',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_company_users_c',
      'join_key_lhs' => 'custo_company_usersusers_ida',
      'join_key_rhs' => 'custo_company_userscusto_company_idb',
    ),
  ),
  'table' => 'custo_company_users_c',
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
      'name' => 'custo_company_usersusers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_company_userscusto_company_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_company_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_company_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'custo_company_usersusers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'custo_company_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_company_userscusto_company_idb',
      ),
    ),
  ),
);