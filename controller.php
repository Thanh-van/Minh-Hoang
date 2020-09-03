<?php 

/**
 * 
 */
include_once 'model/model.php';
session_start();
class Control
{
	private $base;
	function __construct()
	{
		$this->base=new Basemodel();
	}
	public function login()
	{
		if (isset($_POST['login'])) {
			$data_login=$this->base->checklogin($_POST['user'],$_POST['pass']);
			if ($data_login==0) {
				?>
				<script type="text/javascript">
					alert('false');
				</script>
				<?php
			}
			else{
				foreach ($data_login as $key => $value) {
				if ($value['user']== $_POST['user']) {
					if ($value['password']== $_POST['pass']) {
						$_SESSION['user']=$value['user'];
						header('location: ?action=order_table');
						
					}
				}
				else{
						?>
					<script type="text/javascript">
						alert('false');
					</script>
					<?php
				}
			}	
			}
			
		}
	}
	public function destination()
	{
		if (isset($_GET['action'])) {
			switch ($_GET['action']) {
				case 'order_table':
					$order_table=$this->base->order_table();
					if (isset($_GET['delete_id_track'])) {
						$this->base->delete_track_oder($_GET['delete_id_track']);
						header('location: ?action=order_table');
					}
					if(isset($_POST['add'])){
						$date=$_POST['date'];
						$user=$_POST['user'];
						$address=$_POST['address'];
						$item=$_POST['item'];
						$price=$_POST['price'];
						$quatity=$_POST['quatity'];
						$tracking_number=$_POST['tracking_number'];
						$status=$_POST['status'];
						$this->base->INSERT_track_oder($date,$user,$address,$item,$price,$quatity,$tracking_number,$status);
						header('location: ?action=order_table');
					}
					if (isset($_POST['edit'])) {
						$track=$_POST['id_track'];
						$date=$_POST['date'];
						$user=$_POST['user'];
						$address=$_POST['address'];
						$item=$_POST['item'];
						$price=$_POST['price'];
						$quatity=$_POST['quatity'];
						$tracking_number=$_POST['tracking_number'];
						$status=$_POST['status'];
						$this->base->edit_track_oder($track,$date,$user,$address,$item,$price,$quatity,$tracking_number,$status);
						header('location: ?action=order_table');
					}
					include 'view/home_table.php';
					break;
				
				default:
					# code...
					break;
			}
			
		}else{
			include 'view/login.php';
			$this->login();
			
		}
	}
}

 ?>