<?php 
include_once("init.php");

class MySqlClass 
{
	function getData($query){
		global $con;
		$result = mysqli_query($con,$query);
			if($result -> num_rows > 0)
			{
				while ($row = mysqli_fetch_assoc($result)) 
				{
					$data[] = $row;
				}
				//echo json_encode($data);	
			}
			else {
				$data = "No Data";
			}
		mysqli_close($con);
	return $data;
	}

	function executeQuery($query){
		global $con;
		$result = mysqli_query($con,$query);
			if($result)	{
				$data =  "True";
			}
			else 	{
				$data = "False";
			}
		mysqli_close($con);
	return $data;
	}

	public function fetchQuery($select) {
		global $con;
		$query = mysqli_query($con, $select);
		return $query;
	}


}

?>