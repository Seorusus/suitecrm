<?php
// created: 2020-10-15 00:18:13
$dictionary["custo_contact"]["fields"]["custo_contact_jjwg_maps"] = array (
  'name' => 'custo_contact_jjwg_maps',
  'type' => 'link',
  'relationship' => 'custo_contact_jjwg_maps',
  'source' => 'non-db',
  'module' => 'jjwg_Maps',
  'bean_name' => 'jjwg_Maps',
  'vname' => 'LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'id_name' => 'custo_contact_jjwg_mapsjjwg_maps_ida',
);
$dictionary["custo_contact"]["fields"]["custo_contact_jjwg_maps_name"] = array (
  'name' => 'custo_contact_jjwg_maps_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_JJWG_MAPS_TITLE',
  'save' => true,
  'id_name' => 'custo_contact_jjwg_mapsjjwg_maps_ida',
  'link' => 'custo_contact_jjwg_maps',
  'table' => 'jjwg_maps',
  'module' => 'jjwg_Maps',
  'rname' => 'name',
);
$dictionary["custo_contact"]["fields"]["custo_contact_jjwg_mapsjjwg_maps_ida"] = array (
  'name' => 'custo_contact_jjwg_mapsjjwg_maps_ida',
  'type' => 'link',
  'relationship' => 'custo_contact_jjwg_maps',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUSTO_CONTACT_JJWG_MAPS_FROM_CUSTO_CONTACT_TITLE',
);
