<?php
class dbh{

	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $charset;
	public $pdo = "";

	public function query($query){
		

		$data = $this->pdo->prepare($query);
		$data->execute();
		$data = $data->fetchAll();
		return $data;
	}

	public function connect(){
		$this->servername = 'bj7rm8nfleevkxibibb0';
		$this->username = 'uxwnkdkgjatcr3g9';
		$this->password = 'nyMDhnNPtXofHsvX5dm5';
		$this->dbname = 'uxwnkdkgjatcr3g9';
		$this->charset = 'utf8mb4';


		try {
			$dsn = 'mysql:host='.$this->servername.';dbname='.$this->dbname.';charset='.$this->charset;
			$this->pdo = new PDO($dsn, $this->username, $this->password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "goed"
			return $this->pdo;
		} catch (PDOException $e) {
			echo "fout";
		}

	}


} 

$db = new dbh;
$db->connect();




?>
