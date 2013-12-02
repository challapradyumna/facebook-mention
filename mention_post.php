<?php error_reporting( E_ALL ); ?>
<?
//config
$db_config = array(
			'host'      => 'localhost',
			'database'  => 'mention',
			'username'  => 'root',
			'password'  => '',
		);
$table = "users";
$column_name = "name";
$column_id = "id";

//Database Retreival 
if(isset($_POST)){ 
    $db =	mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database']);
    if (mysqli_connect_errno($db)) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        $query = "SELECT ".$column_name.",".$column_id." FROM ".$table." WHERE ".$column_name." LIKE '".substr($_POST['name'],1)."%'";
        $res = mysqli_query($db,$query);
        //$result = array();
        while($row = mysqli_fetch_assoc($res)){
            $result[$row[$column_id]] = $row[$column_name];
            
        }
        echo json_encode($result);
    }
}