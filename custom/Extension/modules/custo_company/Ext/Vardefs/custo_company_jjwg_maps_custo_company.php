<?php
// created: 2020-10-15 00:18:14
$dictionary["custo_company"]["fields"]["custo_company_jjwg_maps"] = array (
  'name' => 'custo_company_jjwg_maps',
  'type' => 'link',
  'relationship' => 'custo_company_jjwg_maps',
  'source' => 'non-db',
  'module' => 'jjwg_Maps',
  'bean_name' => 'jjwg_Maps',
  'vname' => 'LBL_CUSTO_COMPANY_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'id_name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
);
$dictionary["custo_company"]["fields"]["custo_company_jjwg_maps_name"] = array (
  'name' => 'custo_company_jjwg_maps_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_COMPANY_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'save' => true,
  'id_name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
  'link' => 'custo_company_jjwg_maps',
  'table' => 'jjwg_maps',
  'module' => 'jjwg_Maps',
  'rname' => 'name',
);
$dictionary["custo_company"]["fields"]["custo_company_jjwg_mapsjjwg_maps_ida"] = array (
  'name' => 'custo_company_jjwg_mapsjjwg_maps_ida',
  'type' => 'link',
  'relationship' => 'custo_company_jjwg_maps',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_COMPANY_JJWG_MAPS_FROM_CUSTO_COMPANY_TITLE',
);
