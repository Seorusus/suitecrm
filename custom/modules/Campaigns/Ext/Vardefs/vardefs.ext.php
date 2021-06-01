<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-07-31 10:37:42
$dictionary["Campaign"]["fields"]["leads_campaigns_1"] = array (
  'name' => 'leads_campaigns_1',
  'type' => 'link',
  'relationship' => 'leads_campaigns_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_campaigns_1leads_ida',
);
$dictionary["Campaign"]["fields"]["leads_campaigns_1_name"] = array (
  'name' => 'leads_campaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_campaigns_1leads_ida',
  'link' => 'leads_campaigns_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Campaign"]["fields"]["leads_campaigns_1leads_ida"] = array (
  'name' => 'leads_campaigns_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_campaigns_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
);


// created: 2020-07-28 11:17:08
$dictionary["Campaign"]["fields"]["aok_knowledgebase_campaigns_1"] = array (
  'name' => 'aok_knowledgebase_campaigns_1',
  'type' => 'link',
  'relationship' => 'aok_knowledgebase_campaigns_1',
  'source' => 'non-db',
  'module' => 'AOK_KnowledgeBase',
  'bean_name' => 'AOK_KnowledgeBase',
  'vname' => 'LBL_AOK_KNOWLEDGEBASE_CAMPAIGNS_1_FROM_AOK_KNOWLEDGEBASE_TITLE',
  'id_name' => 'aok_knowledgebase_campaigns_1aok_knowledgebase_ida',
);
$dictionary["Campaign"]["fields"]["aok_knowledgebase_campaigns_1_name"] = array (
  'name' => 'aok_knowledgebase_campaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOK_KNOWLEDGEBASE_CAMPAIGNS_1_FROM_AOK_KNOWLEDGEBASE_TITLE',
  'save' => true,
  'id_name' => 'aok_knowledgebase_campaigns_1aok_knowledgebase_ida',
  'link' => 'aok_knowledgebase_campaigns_1',
  'table' => 'aok_knowledgebase',
  'module' => 'AOK_KnowledgeBase',
  'rname' => 'name',
);
$dictionary["Campaign"]["fields"]["aok_knowledgebase_campaigns_1aok_knowledgebase_ida"] = array (
  'name' => 'aok_knowledgebase_campaigns_1aok_knowledgebase_ida',
  'type' => 'link',
  'relationship' => 'aok_knowledgebase_campaigns_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOK_KNOWLEDGEBASE_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
);


// created: 2020-10-15 00:18:13
$dictionary["Campaign"]["fields"]["custo_contact_campaigns"] = array (
  'name' => 'custo_contact_campaigns',
  'type' => 'link',
  'relationship' => 'custo_contact_campaigns',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => 'custo_contact',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_CAMPAIGNS_FROM_CUSTO_CONTACT_TITLE',
);


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


// created: 2020-10-15 00:18:14
$dictionary["Campaign"]["fields"]["custo_company_campaigns"] = array (
  'name' => 'custo_company_campaigns',
  'type' => 'link',
  'relationship' => 'custo_company_campaigns',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_CAMPAIGNS_FROM_CUSTO_COMPANY_TITLE',
);

?>