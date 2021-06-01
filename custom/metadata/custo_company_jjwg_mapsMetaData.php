<?php
// created: 2020-10-15 00:18:14
$dictionary["custo_company_jjwg_maps"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'custo_company_jjwg_maps' => 
    array (
      'lhs_module' => 'jjwg_Maps',
      'lhs_table' => 'jjwg_maps',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_company',
      'rhs_table' => 'custo_company',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_company_jjwg_maps_c',
      'join_key_lhs' => 'custo_company_jjwg_mapsjjwg_maps_ida',
      'join_key_rhs' => 'custo_company_jjwg_mapscusto_company_idb',
    ),
  ),
  'table' => 'custo_company_jjwg_maps_c',
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
      'name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_company_jjwg_mapscusto_company_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_company_jjwg_mapsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_company_jjwg_maps_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'custo_company_jjwg_mapsjjwg_maps_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'custo_company_jjwg_maps_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_company_jjwg_mapscusto_company_idb',
      ),
    ),
  ),
);