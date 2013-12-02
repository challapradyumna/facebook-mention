<?php error_reporting( E_ALL ); ?>
<?
$db_config = array(
			'host'      => 'localhost',
			'database'  => 'mention',
			'username'  => 'root',
			'password'  => '',
		);
if(isset($_POST)){ 
    $db =	mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database']);
    if (mysqli_connect_errno($db)) 
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        $query = "SELECT name FROM users WHERE name LIKE '".substr($_POST['name'],1)."%'";
        $res = mysqli_query($db,$query);
        $result = array();
        while($row = mysqli_fetch_assoc($res)){
            $result[] = $row['name'];
        }
        echo json_encode($result);
    }
}