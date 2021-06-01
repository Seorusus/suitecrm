<?php
// created: 2020-10-13 22:41:44
$dictionary["custo_contact"]["fields"]["custo_contact_campaigns"] = array (
  'name' => 'custo_contact_campaigns',
  'type' => 'link',
  'relationship' => 'custo_contact_campaigns',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'custo_contact_campaignscampaigns_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_campaigns_name"] = array (
  'name' => 'custo_contact_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_campaignscampaigns_ida',
  'link' => 'custo_contact_campaigns',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_campaignscampaigns_ida"] = array (
  'name' => 'custo_contact_campaignscampaigns_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CUSTO_CONTACT_TITLE',
);
