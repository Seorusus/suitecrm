<?php
// created: 2020-10-14 23:47:43
$dictionary["Task"]["fields"]["custo_company_tasks"] = array (
  'name' => 'custo_company_tasks',
  'type' => 'link',
  'relationship' => 'custo_company_tasks',
  'source' => 'non-db',
  'module' => 'custo_company',
  'bean_name' => 'custo_company',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_CUSTO_COMPANY_TITLE',
  'id_name' => 'custo_company_taskscusto_company_ida',
);
$dictionary["Task"]["fields"]["custo_company_tasks_name"] = array (
  'name' => 'custo_company_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_CUSTO_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'custo_company_taskscusto_company_ida',
  'link' => 'custo_company_tasks',
  'table' => 'custo_company',
  'module' => 'custo_company',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["custo_company_taskscusto_company_ida"] = array (
  'name' => 'custo_company_taskscusto_company_ida',
  'type' => 'link',
  'relationship' => 'custo_company_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_TASKS_FROM_TASKS_TITLE',
);
