<?php
// created: 2020-10-13 22:41:44
$dictionary["custo_contact_campaigns"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'custo_contact_campaigns' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'custo_contact',
      'rhs_table' => 'custo_contact',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'custo_contact_campaigns_c',
      'join_key_lhs' => 'custo_contact_campaignscampaigns_ida',
      'join_key_rhs' => 'custo_contact_campaignscusto_contact_idb',
    ),
  ),
  'table' => 'custo_contact_campaigns_c',
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
      'name' => 'custo_contact_campaignscampaigns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'custo_contact_campaignscusto_contact_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'custo_contact_campaignsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'custo_contact_campaigns_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'custo_contact_campaignscampaigns_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'custo_contact_campaigns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'custo_contact_campaignscusto_contact_idb',
      ),
    ),
  ),
);