<?php
function connect_db(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolmeb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

  echo $conn->connect_error;
  
  return "error";
}

return $conn;

}

function insert_query($sql)
{

if($conn = connect_db()) echo "Db connected";
else echo "db not connected";

 if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


close_db($conn);


}
function get_current_form()
{
return  $_SERVER['PHP_SELF'];
//print_r($_SERVER);

}
 function display_query($sql)
{

 $conn = connect_db();
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

	
get_current_form();
                                               
   $i = 0;                                     
  while($row = $result->fetch_assoc()) {
  	if($i==0)
  	{
echo '<div >
        <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px; padding: 10px">Increment</h4>
          <div class="table-responsive">
            <table class="tablesaw table m-b-0 tablesaw-columntoggle table-bordered" id="adadmissiontable">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Edit</th>
                    <th>delete</th>
                    <th>print</th>
                    <th>copy</th>';
$row_data = array_keys($row);
$id_column = "";
for($j=0;$j<count($row_data);$j++){

  if($j==0) $id_column = $row_data[$j];

    echo  "<th>".$row_data[$j]."</th>"; }
                                                   
    echo   '</tr>
         </thead>
      <tbody>';

 //echo '';



//print_r($row);



  	}
  $i++;
  //	`increment_form_id`, `user_id`, `user_date`, `gr_number`, `salary_increment`, `new_salary`, `comment`
    //echo "id: " . $row["increment_form_id"]. " - user_id: " . $row["user_id"]. " " . $row["gr_number"]." - salary_increment: " . $row["salary_increment"]. " - new_salary: " . $row["new_salary"]. "  - comment: " . $row["comment"]. "<br>";

  
    echo '
                                            
                                                <tr>
                                                    <td>'.$i.'</td>
                                                    <td><i class="zmdi zmdi-edit"></i></td>
                                                    <td> <a class="zmdi zmdi-delete" href="'.$_SERVER['PHP_SELF'].'?deleteid='.$row[$id_column].'"></a></td>
                                                    <td ><a href="print.php" class="zmdi zmdi-local-printshop"></a></td>
                                                    <td><i class="zmdi zmdi-copy"></i></td>';
for($k=0;$k<count($row_data);$k++){ echo  '<td>'.$row[$row_data[$k]].'</td>';}
                                                   

                                               echo  '</tr>';
  }

  echo '</tbody>
                                        </table>
                                    </div>
                                </div>';
} else {
  echo "0 results";
}
    

}


function get_curr_user()

{

	return 2;
}

function close_db($conn)
{
$conn->close();
}
?>