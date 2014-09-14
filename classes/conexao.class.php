<?php
class Conexao{
	public static function conectar(){
		$con=new mysqli("localhost","site","site","nerds_gamers");
		if ($con->connect_error) {
			die('Connect Error (' . $mysqli->connect_errno . ') '. $con->connect_error);
		}
		return $con;
	}

	public static function query($qr){
		$con=self::conectar();
		$res=$con->query("SET NAMES 'utf8'") or die($qr."<br>".mysql_error());
		$res=$con->query($qr) or die($qr."<br>".mysql_error());
		$con->close();
		return $res;
	}
}
?>
