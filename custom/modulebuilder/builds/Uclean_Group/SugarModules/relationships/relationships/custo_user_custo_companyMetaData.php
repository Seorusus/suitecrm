<?php
// created: 2020-10-14 23:47:42
$dictionary["custo_user_custo_company"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'custo_user_custo_company' => 
    array (
      'lhs_module' => 'custo_user',
      'lhs_table' => 'custo_user',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_company',
      'rhs_table' => 'custo_company',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_user_custo_company_c',
      'join_key_lhs' => 'custo_user_custo_companycusto_user_ida',
      'join_key_rhs' => 'custo_user_custo_companycusto_company_idb',
    ),
  ),
  'table' => 'custo_user_custo_company_c',
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
      'name' => 'custo_user_custo_companycusto_user_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_user_custo_companycusto_company_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_user_custo_companyspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_user_custo_company_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_user_custo_companycusto_user_ida',
        1 => 'custo_user_custo_companycusto_company_idb',
      ),
    ),
  ),
);