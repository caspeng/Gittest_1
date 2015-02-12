<?
class SimBBS{

	private $mysql;
	
	
	public function connect($server, $user, $password, $db) {		
		$this->mysql = mysql_connect($server, $user, $password) or die("Connection failed!");
		mysql_select_db($db);	
	}
	
	public function tbk_list() {
		$re = mysql_query("SELECT * FROM tbk ORDER BY number");
		
		while($result= mysql_fetch_array($re) ){
			
		}	
	}
	public function tbk_list($re) {


		while($result= mysql_fetch_array($re) ){
			$data['']
			print $result[0];
			print " : ";
			print $result[1];
			print " : ";
			print $result[2];
			print "<br>";
		}	
	}
	public function close(){
		mysql_close($this->mysql);
	}
}
?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html;charset=UTF-8">
</HEAD>
<BODY>
<?
require_once('info.php');

   $simbbs = new SimBBS();
   //$simbbs->tbk_list();
?>

</BODY>
</HTML>