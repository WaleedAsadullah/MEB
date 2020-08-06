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

if($conn = connect_db()) 
  // echo "Db connected"
;
else echo "db not connected";

 if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully"
  ;
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

function query_to_array($sql)
{

 $conn = connect_db();
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  
//get_current_form();
                                                
   $i = 0;                                     
  while($row = $result->fetch_assoc()) {
    $newdata[]=$row;
    if($i==0)
    {

$row_data = array_keys($row);
$id_column = "";
for($j=0;$j<count($row_data);$j++){

  if($j==0) $id_column = $row_data[$j];

    $query_results[$j] = $row_data[$j]; }
                                                   
   



    }
  $i++;
  

for($k=0;$k<count($row_data);$k++){ $query_results[$j][$k] =  $row[$row_data[$k]];}

   
  }

   
} else {
  return "no result";
}
    
   // print_r($query_results);

   // echo "<br>new print<br>";
   // print_r($newdata);
return $newdata;
}

// ----------------------------------

 function display_query($sql)
{

 $conn = connect_db();
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

	
//get_current_form();
                                               
   $i = 0;                                     
  while($row = $result->fetch_assoc()) {
  	if($i==0)
  	{
echo '
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>';
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

  
    echo '<tr>
              <td>'.$i.'</td>
              <td style="text-align:center;"><a style="color:rgb(16,196,105);" href="'.$_SERVER['PHP_SELF'].'?editid='.$row[$id_column].'"><i class="zmdi zmdi-edit"></i></a></td>
            
              <td style="text-align:center;"><a style="color:rgb(255,87,90);" href="'.$_SERVER['PHP_SELF'].'?deleteid='.$row[$id_column].'"><i class="fa fa-trash-o"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(120,108,150);" href="" ><i  class="zmdi zmdi-local-printshop"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(30,108,180);" href="" ><i class="zmdi zmdi-copy"></i></a></td>';


for($k=0;$k<count($row_data);$k++){ echo  '<td>'.$row[$row_data[$k]].'</td>';}

   echo  '</tr>';
  }

    echo '   </tbody>';
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
// -----------------------
// new function
 function display_query_attendance($sql)
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
echo '
                <thead>
                  <tr><th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>
                      <th>
                          <label for="zaEligible">Class</label>
                          <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Eligible or not" class="form-control" id="zaEligible">
                              <option value="montessori">Montessori</option>
                              <option value="KG 1">KG 1</option>
                              <option value="KG 2">KG 2</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">Matric</option>
                          </select>
                      </th>
                      <th>
                          <label for="saDate">Date</label>
                          <input type="date" class="form-control">
                      </th>
                  </tr>
                  <tr>
                    <th>S.No</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>';
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
  //  `increment_form_id`, `user_id`, `user_date`, `gr_number`, `salary_increment`, `new_salary`, `comment`
    //echo "id: " . $row["increment_form_id"]. " - user_id: " . $row["user_id"]. " " . $row["gr_number"]." - salary_increment: " . $row["salary_increment"]. " - new_salary: " . $row["new_salary"]. "  - comment: " . $row["comment"]. "<br>";

  
    echo '<tr>
              <td>'.$i.'</td>
              <td style="text-align:center;"><a style="color:rgb(16,196,105);" href="'.$_SERVER['PHP_SELF'].'?editid='.$row[$id_column].'"><i class="zmdi zmdi-edit"></i></a></td>              <td style="text-align:center;"><a style="color:rgb(255,87,90);" href="'.$_SERVER['PHP_SELF'].'?deleteid='.$row[$id_column].'"><i class="fa fa-trash-o"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(120,108,150);" href="" ><i  class="zmdi zmdi-local-printshop"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(30,108,180);" href="" ><i class="zmdi zmdi-copy"></i></a></td>';


for($k=0;$k<count($row_data);$k++){
  $label = $row[$row_data[$k]];
if($label=='Present'){ $x = 'label label-success';} elseif($label=='Absent'){ $x = 'label label-danger';}elseif($label=='Late'){ $x = 'label label-pink';}elseif($label=='Excused'){ $x ='label label-warning';}elseif($label=='Alerts on Absences'){ $x = 'label label-primary';}else{$x ='';}

  echo  '<td><span class="'.$x.'">'.$row[$row_data[$k]].'<span></td>';}

   echo  '</tr>';
  }

    echo '   </tbody>';
} else {
  echo "0 results";
}
    

}

// button submit to edit
function code_submit()
{

if(isset($_REQUEST['editid']) && is_numeric($_REQUEST['editid'])){ 

echo '<input type="hidden"  name="editid"   value="'.$_REQUEST['editid'].'">';


echo ' <button class="btn btn-primary waves-effect waves-light" type="submit" ';
    echo "name=\"edit\">Edit";}
else {echo ' <button class="btn btn-primary waves-effect waves-light" type="submit" '; echo "name=\"submit\">Submit";}

}

// 
// button submit to edit
function code_submit3()
{

if(isset($_REQUEST['editid']) && is_numeric($_REQUEST['editid'])){ 

echo '<input type="hidden"  name="editid"   value="'.$_REQUEST['editid'].'">';


echo ' <button class="btn btn-primary waves-effect waves-light" type="submit" ';
    echo "name=\"edit\">Edit";}
else {echo ' <button class="btn btn-primary waves-effect waves-light" type="submit" '; echo "name=\"submit3\">Submit";}

}

// 

function edit_display($table_name,$col_id)
{

 if(isset($_REQUEST['editid']) && is_numeric($_REQUEST['editid']) && !(isset($_REQUEST['edit'] ))){ 


//$_REQUEST['editid']


// echo "sql_edit=";
  $sql_edit = "SELECT *  FROM `".$table_name."` where `".$table_name."`.`".$col_id."` =".$_REQUEST['editid'] ;

 transform_edit(query_to_array($sql_edit));
}

}

// --------------------------

function check_edit($table_name,$col_id)
{
if(isset($_REQUEST['edit']) && $_REQUEST['editid'] && is_numeric($_REQUEST['editid']) ){
                                           
$arr_key = array_keys($_REQUEST);
for($i=0;$i<count($arr_key);$i++)
    {
        $ak = $arr_key[$i];
        if($ak == "edit" || $ak== "editid" ) continue;
        $sql = "UPDATE `".$table_name."` SET `";
        $sql .= $ak."` = '".$_REQUEST[$ak]."' WHERE `".$table_name."`.`".$col_id."` = ".$_REQUEST['editid'];
        insert_query($sql);
       // echo "sql_edit=";
    }
  }
}

// ---------------------

function transform_edit($array_edit){
$arr_key = array_keys($array_edit[0]);

    for($i=0;$i<count($arr_key);$i++)
    {
        $ak = $arr_key[$i];
        $_REQUEST[$ak] = $array_edit[0][$ak];
    }
return $_REQUEST;
  }

// -----------------------


 function display_query_attendance_teacher($sql)
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
echo '
                <thead>
                  <tr><th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th>
                      
                      <th>
                          <label for="saDate">Date</label>
                          <input type="date" class="form-control">
                      </th>
                  </tr>
                  <tr>
                    <th>S.No</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>';
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
  //  `increment_form_id`, `user_id`, `user_date`, `gr_number`, `salary_increment`, `new_salary`, `comment`
    //echo "id: " . $row["increment_form_id"]. " - user_id: " . $row["user_id"]. " " . $row["gr_number"]." - salary_increment: " . $row["salary_increment"]. " - new_salary: " . $row["new_salary"]. "  - comment: " . $row["comment"]. "<br>";

  
    echo '<tr>
              <td>'.$i.'</td>
              <td style="text-align:center;"><a style="color:rgb(16,196,105);" href="'.$_SERVER['PHP_SELF'].'?editid='.$row[$id_column].'"><i class="zmdi zmdi-edit"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(255,87,90);" href="'.$_SERVER['PHP_SELF'].'?deleteid='.$row[$id_column].'"><i class="fa fa-trash-o"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(120,108,150);" href="" ><i  class="zmdi zmdi-local-printshop"></i></a></td>
              <td style="text-align:center;"><a style="color:rgb(30,108,180);" href="" ><i class="zmdi zmdi-copy"></i></a></td>';


for($k=0;$k<count($row_data);$k++){
  $label = $row[$row_data[$k]];
if($label=='Present'){ $x = 'label label-success';} elseif($label=='Absent'){ $x = 'label label-danger';}elseif($label=='Late'){ $x = 'label label-pink';}elseif($label=='Excused'){ $x ='label label-warning';}elseif($label=='Alerts on Absences'){ $x = 'label label-primary';}else{$x ='';}

  echo  '<td><span class="'.$x.'">'.$row[$row_data[$k]].'<span></td>';}

   echo  '</tr>';
  }

    echo '   </tbody>';
} else {
  echo "0 results";
}
    

}

// ------------------------

function display_homework($sql){
  $conn = connect_db();
  $result = mysqli_query($conn ,$sql);

  get_current_form();

  $i = 0;

  while($row = mysqli_fetch_assoc($result)) {



    $items[] = $row;
  }

  $items = array_reverse($items ,true);

  foreach($items as $item){

    $i++;
// ------------

    if($i%2 == 0 ){
      $positon = 'timeline-item alt';
    }else{
      $positon = 'timeline-item';
    }

// -------------

    if($i%2 == 0 ){
      $positon_arrow = 'arrow-alt';
    }else{
      $positon_arrow = 'arrow';
    }

// ---------------
    if($i%6 == 0 ){
      $text = 'primary';
    }elseif($i%5 == 0 ){
      $text = 'warning';
    }elseif($i%4 == 0 ){
      $text = 'info';
    }elseif($i%3 == 0 ){
      $text = 'danger';
    }elseif($i%2 == 0 ){
      $text = 'success';
    }else{
      $text = 'purple';
    }

      echo  ' 
            <article class="'.$positon.'">
              <div class="timeline-desk">
                <div class="panel">
                    <div class="panel-body">
                      <span class="'.$positon_arrow.'"></span>
                      <span class="timeline-icon bg-'.$text.'"><i class="zmdi zmdi-circle"></i></span>
                      <h4 class="text-'.$text.'">'.$item['Subject'].'</h4>
                      <p class="timeline-date text-muted"><small>'.$item['Date'].'</small></p>
                      <p>'.$item['Work'].'  </p>
                    </div>
                  </div>
              </div>
            </article>';
      }
  }

// ------------------

function display_video($sql){
  $conn = connect_db();
  $result = mysqli_query($conn ,$sql);
  $result2 = mysqli_query($conn ,$sql);
  $result3 = mysqli_query($conn ,$sql);
  $row3 = mysqli_fetch_assoc($result3);
  $row= mysqli_fetch_assoc($result);
  $row_data = array_keys($row);
  while($row2 = mysqli_fetch_assoc($result2)) {
    $check[] = $row2['title'];
  }

  while($row = mysqli_fetch_assoc($result)) {
    $items[] = $row['Subject'] ;
    }
  $unique_sub = array_unique($items);
  $unique_sub_index = array_values($unique_sub);
  for($i=0;$i<count($unique_sub_index);$i++){
    echo '<ul class="ul1">
            <li class="li1" id="'.clean(str_replace(" ","",$unique_sub_index[$i])).'">'.$unique_sub_index[$i].'</li>
            <ul class="ol1n" id="'.'change'.''.clean(str_replace(" ","",$unique_sub_index[$i])).'">';
    echo '<script src="assets/js/jquery.min.js"></script>
          <script>
          $(document).ready(function(){
            $("#'.clean(str_replace(" ","",$unique_sub_index[$i])).'").click(function(){
            $("#'.'change'.''.clean(str_replace(" ","",$unique_sub_index[$i])).'").toggleClass("ol1");
          });
            });
          </script>';
            $sql2 = 'SELECT `title`, `link` FROM `th_video_lecture` WHERE `subject` LIKE \''.$unique_sub_index[$i].'\'';
            $result_title = mysqli_query($conn,$sql2);
            $m = 0;
            while($row_title = mysqli_fetch_assoc($result_title)) {
              $m++;
              // $items_title[] = $row_titile;
              // foreach($items_title as $item_title){
                echo '<li id="'.$m.''.clean(str_replace(" ","",$row_title['title'])).'" class="li2" value = "'.$row_title['link'].'" >'.$m.'. ' .$row_title['title'].'</li>';
                
              // }
              
            }
            
    echo    '</ul>
          </ul> ';

      

      }


    }

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function video_link(){



  $sql = 'SELECT `th_video_lecture_id`, `user_id`, `user_date`, `class`, `subject`"Subject", `title`, `link`, `comment` FROM `th_video_lecture`';
  $conn = connect_db();
  $result = mysqli_query($conn ,$sql);
  $result2 = mysqli_query($conn ,$sql);
  $result3 = mysqli_query($conn ,$sql);
  $row3 = mysqli_fetch_assoc($result3);
  $row= mysqli_fetch_assoc($result);
  $row_data = array_keys($row);
  while($row2 = mysqli_fetch_assoc($result2)) {
    $check[] = $row2['title'];
  }

  while($row = mysqli_fetch_assoc($result)) {
    $items[] = $row['Subject'] ;
    }
  $unique_sub = array_unique($items);
  $unique_sub_index = array_values($unique_sub);



  for($i=0;$i<count($unique_sub_index);$i++){
    $sql2 = 'SELECT `title`, `link` FROM `th_video_lecture` WHERE `subject` LIKE \''.$unique_sub_index[$i].'\'';
    $result_title = mysqli_query($conn,$sql2);
    $m = 0;
    while($row_title = mysqli_fetch_assoc($result_title)) {
    $m++;

    $link = $row_title['link'];
    $link = explode("watch?v=",$link); 
    $link = 'https://www.youtube.com/embed/'.$link[1];
    echo '$("#'.$m.''.clean(str_replace(" ","",$row_title['title'])).'").click(function(){
          $("iframe").attr("src","'.$link.'");
          });';




    }
  }
}




?>