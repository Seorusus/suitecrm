<?php
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
