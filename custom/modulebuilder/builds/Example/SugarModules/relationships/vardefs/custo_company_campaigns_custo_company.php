<?php
// created: 2020-10-13 22:41:44
$dictionary["custo_company"]["fields"]["custo_company_campaigns"] = array (
  'name' => 'custo_company_campaigns',
  'type' => 'link',
  'relationship' => 'custo_company_campaigns',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'custo_company_campaignscampaigns_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_campaigns_name"] = array (
  'name' => 'custo_company_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'custo_company_campaignscampaigns_ida',
  'link' => 'custo_company_campaigns',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_campaignscampaigns_ida"] = array (
  'name' => 'custo_company_campaignscampaigns_ida',
  'type' => 'link',
  'relationship' => 'custo_company_campaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CUSTO_COMPANY_TITLE',
);
