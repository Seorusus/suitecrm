<?php
// created: 2020-10-13 22:41:44
$dictionary["Task"]["fields"]["custo_contact_tasks"] = array (
  'name' => 'custo_contact_tasks',
  'type' => 'link',
  'relationship' => 'custo_contact_tasks',
  'source' => 'non-db',
  'module' => 'custo_contact',
  'bean_name' => false,
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_CUSTO_CONTACT_TITLE',
  'id_name' => 'custo_contact_taskscusto_contact_ida',
);
$dictionary["Task"]["fields"]["custo_contact_tasks_name"] = array (
  'name' => 'custo_contact_tasks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_CUSTO_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_taskscusto_contact_ida',
  'link' => 'custo_contact_tasks',
  'table' => 'custo_contact',
  'module' => 'custo_contact',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Task"]["fields"]["custo_contact_taskscusto_contact_ida"] = array (
  'name' => 'custo_contact_taskscusto_contact_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_tasks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_TASKS_FROM_TASKS_TITLE',
);
