<?php error_reporting( E_ALL ); ?>
<?
$db_config = array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'mention',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		);
	$db =	mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['database']);
	if (mysqli_connect_errno($db)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    echo "Connected";
}

	$query = "CREATE DATABASE mention";
	$query = "CREATE TABLE users ( id int AUTO_INCREMENT PRIMARY KEY , name VARCHAR(200) ) ";

$data = array(
	array("int"=>101,"name"=>"Quinn Austin"),
	array("int"=>102,"name"=>"Teegan Montgomery"),
	array("int"=>103,"name"=>"Deanna Rush"),
	array("int"=>104,"name"=>"Isadora Mcintyre"),
	array("int"=>105,"name"=>"Jorden Bennett"),
	array("int"=>106,"name"=>"Simone Atkinson"),
	array("int"=>107,"name"=>"Willa King"),
	array("int"=>108,"name"=>"Claudia Bean"),
	array("int"=>109,"name"=>"Indigo Benjamin"),
	array("int"=>110,"name"=>"Cheryl Rosa"),
	array("int"=>111,"name"=>"Risa Richardson"),
	array("int"=>112,"name"=>"Rhiannon Allison"),
	array("int"=>113,"name"=>"Chantale Carey"),
	array("int"=>114,"name"=>"Shaine Jarvis"),
	array("int"=>115,"name"=>"Kylan Cameron"),
	array("int"=>116,"name"=>"Audra Finch"),
	array("int"=>117,"name"=>"Cassady Wooten"),
	array("int"=>118,"name"=>"Ursa Hart"),
	array("int"=>119,"name"=>"Rhonda Gay"),
	array("int"=>120,"name"=>"Zephr Drake"),
	array("int"=>121,"name"=>"India Small"),
	array("int"=>122,"name"=>"Emma Gilmore"),
	array("int"=>123,"name"=>"Hedwig Jennings"),
	array("int"=>124,"name"=>"Indira Randall"),
	array("int"=>125,"name"=>"Kylynn Mcclain"),
	array("int"=>126,"name"=>"Lael Gentry"),
	array("int"=>127,"name"=>"Hayley Garrett"),
	array("int"=>128,"name"=>"Harriet Lawrence"),
	array("int"=>129,"name"=>"Justine Coffey"),
	array("int"=>130,"name"=>"Zia Acevedo"),
	array("int"=>131,"name"=>"Ginger Bishop"),
	array("int"=>132,"name"=>"Farrah Joseph"),
	array("int"=>133,"name"=>"Anne Craft"),
	array("int"=>134,"name"=>"Stephanie Sloan"),
	array("int"=>135,"name"=>"Lacy Stark"),
	array("int"=>136,"name"=>"Blaine Walker"),
	array("int"=>137,"name"=>"Ori Hammond"),
	array("int"=>138,"name"=>"Erin Blankenship"),
	array("int"=>139,"name"=>"Shelly Noel"),
	array("int"=>140,"name"=>"Scarlet Harmon"),
	array("int"=>141,"name"=>"Dorothy Guerrero"),
	array("int"=>142,"name"=>"Ora Mcleod"),
	array("int"=>143,"name"=>"Nina Bernard"),
	array("int"=>144,"name"=>"Brynn Chen"),
	array("int"=>145,"name"=>"Donna Burt"),
	array("int"=>146,"name"=>"Chanda May"),
	array("int"=>147,"name"=>"Ciara Hunt"),
	array("int"=>148,"name"=>"Anika Duke"),
	array("int"=>149,"name"=>"Miranda Wagner"),
	array("int"=>150,"name"=>"Blythe Cox"),
	array("int"=>151,"name"=>"Roary Cross"),
	array("int"=>152,"name"=>"Cameran Le"),
	array("int"=>153,"name"=>"MacKenzie Hess"),
	array("int"=>154,"name"=>"Maggie Horton"),
	array("int"=>155,"name"=>"Barbara Holden"),
	array("int"=>156,"name"=>"Serina Glover"),
	array("int"=>157,"name"=>"Roanna Maddox"),
	array("int"=>158,"name"=>"Willow Kidd"),
	array("int"=>159,"name"=>"Mariko Bolton"),
	array("int"=>160,"name"=>"Moana Stokes"),
	array("int"=>161,"name"=>"Clio Shepherd"),
	array("int"=>162,"name"=>"Jillian Hayden"),
	array("int"=>163,"name"=>"Florence Kline"),
	array("int"=>164,"name"=>"Mercedes Whitley"),
	array("int"=>165,"name"=>"Jemima Rice"),
	array("int"=>166,"name"=>"Chantale Dillon"),
	array("int"=>167,"name"=>"Yoko Freeman"),
	array("int"=>168,"name"=>"Rama Massey"),
	array("int"=>169,"name"=>"Paloma Gutierrez"),
	array("int"=>170,"name"=>"Aimee Saunders"),
	array("int"=>171,"name"=>"Roary Sims"),
	array("int"=>172,"name"=>"Catherine Mckinney"),
	array("int"=>173,"name"=>"Irene Bullock"),
	array("int"=>174,"name"=>"Beverly Baker"),
	array("int"=>175,"name"=>"Claire Riddle"),
	array("int"=>176,"name"=>"Tatyana Haynes"),
	array("int"=>177,"name"=>"Maile Graves"),
	array("int"=>178,"name"=>"Roanna Tucker"),
	array("int"=>179,"name"=>"Sloane Hughes"),
	array("int"=>180,"name"=>"Stacy Fowler"),
	array("int"=>181,"name"=>"Dana Bartlett"),
	array("int"=>182,"name"=>"Lani Conway"),
	array("int"=>183,"name"=>"Heidi Freeman"),
	array("int"=>184,"name"=>"Rae Bowers"),
	array("int"=>185,"name"=>"Natalie Robertson"),
	array("int"=>186,"name"=>"Tatum Justice"),
	array("int"=>187,"name"=>"Martena Bird"),
	array("int"=>188,"name"=>"Azalia Banks"),
	array("int"=>189,"name"=>"Cheryl Colon"),
	array("int"=>190,"name"=>"Aretha Hansen"),
	array("int"=>191,"name"=>"Wynter Wilkins"),
	array("int"=>192,"name"=>"Renee Massey"),
	array("int"=>193,"name"=>"Guinevere Mccormick"),
	array("int"=>194,"name"=>"Kaitlin Conrad"),
	array("int"=>195,"name"=>"Amela Gonzalez"),
	array("int"=>196,"name"=>"Kellie Eaton"),
	array("int"=>197,"name"=>"Indigo Barry"),
	array("int"=>198,"name"=>"Jordan Ray"),
	array("int"=>199,"name"=>"Hedy Davis"),
	array("int"=>200,"name"=>"Shana Barr")
);

foreach ($data as $val) {
    $query = " INSERT INTO users(id,name) VALUES ('".$val['int']."','".$val['name']."');";
    $res = mysqli_query($db,$query);
}
    //$res = mysqli_query($db, $query);
    //$row = mysqli_fetch_assoc($res);
    echo $row;