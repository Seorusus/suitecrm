<?php 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
 /*
   Created By : Urdhva Tech Pvt. Ltd.
   Created date : 07/19/2013
   Contact at : contact@urdhva-tech.com
   Skype : urdhvatech
   Module : stickyNote 1.0
*/
/*
 *Used for Updation of StickyNotes 
 */
require_once("modules/StickyNote/StickyNote.php");
require_once("modules/Trackers/Tracker.php");
global $db,$current_user;
//For Deleting a record
if($_REQUEST['action'] == "StickySave" && isset($_REQUEST['delete_sug']) && $_REQUEST['delete_sug'] == "true")
{
    if(isset($_REQUEST['id']))
    {
       $stickyObj = new StickyNote(); 
       $stickyObj->mark_deleted($_REQUEST['id']);     
    }
   echo "deleted";
}//For Creating a Record
elseif(isset($_REQUEST['action']) && $_REQUEST['action']== "StickySave" && !isset($_REQUEST['id']) && $_REQUEST['value'] != "getrecords" )
{
  $stickyObj = new StickyNote(); 
  $stickyObj->description = $_REQUEST['content'];
  $stickyObj->left_pos = $_REQUEST['position_left'];
  $stickyObj->top_pos = $_REQUEST['position_top'];
  $stickyObj-> assigned_user_id = $current_user->id;
  $record = $stickyObj->save(false);
  $query = "DELETE FROM tracker WHERE item_id = '$record'";
  $db->query($query, true);
  ob_clean();
  echo $record;
}//For Retrieving a Record
elseif($_REQUEST['action'] == "StickySave" && !empty($_REQUEST['value']) && $_REQUEST['value'] == "getrecords")
{
   $query="SELECT * FROM stickynote WHERE assigned_user_id = '".$current_user->id."' AND deleted=0 ";
   $result = $db->query($query,true);
   
   $aRecords=array();
   while($row = $db->fetchByAssoc($result))
   {
      if(empty($row['description']))
        $row['description'] = "";
      
      $aRecords[] = array("id" => $row['id'],
                          "content" => from_html($row['description']),
                          "left_pos" => $row['left_pos'],
                          "top_pos" => $row['top_pos'],  
                          "user_id" => $row['assigned_user_id']
                      );
   }
   $json = getJSONobj();
   $aRecord = $json->encode($aRecords);
   ob_clean();
   echo $aRecord;
}//For Updating a Record
elseif(isset($_REQUEST['action']) && $_REQUEST['action']== "StickySave" && isset($_REQUEST['id'])) // update
{
  $stickyObj = new StickyNote(); 
  $stickyObj->retrieve($_REQUEST['id']);
  $stickyObj->description = $_REQUEST['content'];
  $stickyObj->left_pos = $_REQUEST['position_left'];
  $stickyObj-> top_pos = $_REQUEST['position_top'];
  $stickyObj-> assigned_user_id = $current_user->id;
  $record = $stickyObj->save(false);
  $query = "DELETE FROM tracker WHERE item_id = '$record'";
  $db->query($query, true);
  echo $record;
}