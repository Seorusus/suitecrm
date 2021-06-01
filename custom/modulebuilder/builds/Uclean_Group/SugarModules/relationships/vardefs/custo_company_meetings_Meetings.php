<?php
// created: 2020-10-14 23:47:44
$dictionary["Meeting"]["fields"]["custo_company_meetings"] = array (
  'name' => 'custo_company_meetings',
  'type' => 'link',
  'relationship' => 'custo_company_meetings',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_meetingscusto_company_ida',
);
$dictionary["Meeting"]["fields"]["custo_company_meetings_name"] = array (
  'name' => 'custo_company_meetings_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_meetingscusto_company_ida',
  'link' => 'custo_company_meetings',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["custo_company_meetingscusto_company_ida"] = array (
  'name' => 'custo_company_meetingscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_meetings',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_MEETINGS_FROM_MEETINGS_TITLE',
);
