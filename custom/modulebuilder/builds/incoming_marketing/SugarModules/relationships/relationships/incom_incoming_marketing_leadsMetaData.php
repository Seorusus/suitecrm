<?php
// created: 2020-07-31 12:25:15
$dictionary["incom_incoming_marketing_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'incom_incoming_marketing_leads' => 
    array (
      'lhs_module' => 'incom_incoming_marketing',
      'lhs_table' => 'incom_incoming_marketing',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'incom_incoming_marketing_leads_c',
      'join_key_lhs' => 'incom_incoming_marketing_leadsincom_incoming_marketing_ida',
      'join_key_rhs' => 'incom_incoming_marketing_leadsleads_idb',
    ),
  ),
  'table' => 'incom_incoming_marketing_leads_c',
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
      'name' => 'incom_incoming_marketing_leadsincom_incoming_marketing_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'incom_incoming_marketing_leadsleads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'incom_incoming_marketing_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'incom_incoming_marketing_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'incom_incoming_marketing_leadsincom_incoming_marketing_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'incom_incoming_marketing_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'incom_incoming_marketing_leadsleads_idb',
      ),
    ),
  ),
);