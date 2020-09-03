<?php
  //require_once('load.php');

/*--------------------------------------------------------------*/
/* Function for find all database table rows by table name
/*--------------------------------------------------------------*/
function find_all($table) {
   global $db;
   if(tableExists($table))
   {
     $sql = "SELECT * FROM ".$db->escape($table);
     return find_by_sql($sql);
   }
}
/*--------------------------------------------------------------*/
/* Function for Perform queries
/*--------------------------------------------------------------*/
function find_by_sql($sql)
{
  global $db;
  $results = $db->query($sql);
  return  $db->while_loop($results);
}
/*--------------------------------------------------------------*/
/*  Function for Find data from table by id
/*--------------------------------------------------------------*/
function find_by_id($table,$id)
{
  global $db;
  $id = (int)$id;
    if(tableExists($table)){
          $sql = $db->query("SELECT * FROM {$db->escape($table)} WHERE id='{$db->escape($id)}' LIMIT 1");
          if($result = $db->fetch_assoc($sql))
            return $result;
          else
            return null;
     }
}

/*function find_by_typo($table,$id)
{
  global $db;
  $id = (int)$id;
   if(tableExists($table))
   {
     return find_by_sql("SELECT * FROM {$db->escape($table)} WHERE tipo_p='{$db->escape($id)}'");
   }
}*/


/*--------------------------------------------------------------*/
/* Function for Delete data from table by id
/*--------------------------------------------------------------*/
function delete_by_id($table,$id)
{
  global $db;
  if(tableExists($table))
   {
    $sql = "DELETE FROM ".$db->escape($table);
    $sql .= " WHERE id=". $db->escape($id);
    $sql .= " LIMIT 1";
    $db->query($sql);
    return ($db->affected_rows() === 1) ? true : false;
   }
}

/*--------------------------------------------------------------*/
/* Determine if database table exists
/*--------------------------------------------------------------*/
function tableExists($table){
  global $db;
  $table_exit = $db->query('SHOW TABLES FROM '.DB_NAME.' LIKE "'.$db->escape($table).'"');
      if($table_exit) {
        if($db->num_rows($table_exit) > 0)
              return true;
         else
              return false;
      }
  }


/*--------------------------------------------------------------*/
/* insert
/*--------------------------------------------------------------*/

function insertbyTable($table,$obj){
  global $db;
  if(tableExists($table)){
    $sql = "INSERT INTO ".$db->escape($table);
    $sql_properties = "(";
    $sql_values = "(";
    foreach($obj as $property => $value){
      $sql_properties .= "'".$property."',";
      $sql_values .= "'".$sql_values."',";
    }
    $sql_properties = substr($sql_properties,strlen($sql_properties)-1);
    $sql_values = substr($sql_values,strlen($sql_values)-1);
    $sql = $sql.$sql_properties.") VALUES (".$sql_values.")";
    $db->query($sql);
    echo $sql;
    //return ($db->affected_rows() === 1) ? true : false;
  }
}
?>
