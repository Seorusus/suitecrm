<?php
// created: 2020-10-14 23:47:43
$dictionary["custo_company_calls"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'custo_company_calls' => 
    array (
      'lhs_module' => 'custo_company',
      'lhs_table' => 'custo_company',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_company_calls_c',
      'join_key_lhs' => 'custo_company_callscusto_company_ida',
      'join_key_rhs' => 'custo_company_callscalls_idb',
    ),
  ),
  'table' => 'custo_company_calls_c',
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
      'name' => 'custo_company_callscusto_company_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_company_callscalls_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_company_callsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_company_calls_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'custo_company_callscusto_company_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'custo_company_calls_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_company_callscalls_idb',
      ),
    ),
  ),
);