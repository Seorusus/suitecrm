<?php
// created: 2020-10-15 00:18:13
$dictionary["custo_user_meetings"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'custo_user_meetings' => 
    array (
      'lhs_module' => 'custo_user',
      'lhs_table' => 'custo_user',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_user_meetings_c',
      'join_key_lhs' => 'custo_user_meetingscusto_user_ida',
      'join_key_rhs' => 'custo_user_meetingsmeetings_idb',
    ),
  ),
  'table' => 'custo_user_meetings_c',
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
      'name' => 'custo_user_meetingscusto_user_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_user_meetingsmeetings_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_user_meetingsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_user_meetings_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_user_meetingscusto_user_ida',
        1 => 'custo_user_meetingsmeetings_idb',
      ),
    ),
  ),
);