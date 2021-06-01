<?php
// created: 2020-10-15 00:18:13
$dictionary["custo_user_emails_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'custo_user_emails_1' => 
    array (
      'lhs_module' => 'custo_user',
      'lhs_table' => 'custo_user',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_user_emails_1_c',
      'join_key_lhs' => 'custo_user_emails_1custo_user_ida',
      'join_key_rhs' => 'custo_user_emails_1emails_idb',
    ),
  ),
  'table' => 'custo_user_emails_1_c',
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
      'name' => 'custo_user_emails_1custo_user_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_user_emails_1emails_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_user_emails_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_user_emails_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'custo_user_emails_1custo_user_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'custo_user_emails_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_user_emails_1emails_idb',
      ),
    ),
  ),
);