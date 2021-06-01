<?php
// created: 2020-10-15 00:18:13
$dictionary["Campaign"]["fields"]["custo_user_campaigns"] = array (
  'name' => 'custo_user_campaigns',
  'type' => 'link',
  'relationship' => 'custo_user_campaigns',
  'source' => 'non-db',
  'module' => 'custo_user',
  'bean_name' => 'custo_user',
  'vname' => 'LBL_CUSTO_USER_CAMPAIGNS_FROM_CUSTO_USER_TITLE',
  'id_name' => 'custo_user_campaignscusto_user_ida',
);
$dictionary["Campaign"]["fields"]["custo_user_campaigns_name"] = array (
  'name' => 'custo_user_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_USER_CAMPAIGNS_FROM_CUSTO_USER_TITLE',
  'save' => true,
  'id_name' => 'custo_user_campaignscusto_user_ida',
  'link' => 'custo_user_campaigns',
  'table' => 'custo_user',
  'module' => 'custo_user',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Campaign"]["fields"]["custo_user_campaignscusto_user_ida"] = array (
  'name' => 'custo_user_campaignscusto_user_ida',
  'type' => 'link',
  'relationship' => 'custo_user_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_USER_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
);
