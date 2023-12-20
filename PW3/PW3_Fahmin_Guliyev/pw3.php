<!DOCTYPE html>

<html lang="en">
	
<head>

	<meta charset="utf-8">	
	<title>Student Timetable</title>

	<style type="text/css">

		table,th,td{
			border: 1px solid black;
			text-align: center;
			font-family: arial;
		}

		table{
			border-collapse: collapse;
		}

		th {
	  		background-color: #4CAF50;
	  		color: white;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th, td {
		  border-bottom: 1px solid #ddd;
		  padding: 15px;
		  text-align: left;
		}
		
		h1{
			font-family: arial;
			text-align: center;
		}

		</style>
</head>

<body>
	
<h1>Student Timetable Database</h1>

<?php
	
	include('connectDBalwaysdata.inc.php');

$query = "SELECT courses.course_id , classes.class_full_name , professors.first_name , professors.last_name , subjects.subject
FROM ((( `courses`
INNER JOIN `classes` ON courses.class_id = classes.class_id)
INNER JOIN `professors` ON courses.professor_id = professors.professor_id)
INNER JOIN `subjects` ON courses.subject_id = subjects.subject_id);";


$result = mysqli_query($link,$query);

$nbRows = mysqli_num_rows($result);


echo "Number of rows for this query is $nbRows\n";
echo "<br><br><br><hr>";

$myquery="SELECT courses.course_date, courses.start_time, courses.end_time, courses.course_duration, courses.course_id, classes.class_full_name, professors.first_name, professors.last_name, subjects.subject FROM `courses`,`classes`,`professors`,`subjects` WHERE courses.class_id=classes.class_id AND professors.professor_id=courses.professor_id AND subjects.subject_id=courses.subject_id ";
$myresult=mysqli_query($link,$myquery);

echo "<table>";

echo "<tr> <th>Course Date</th> 
<th>Start Time</th> 
<th>End Time</th> 
 <th>Course Duration</th> 
 <th>Full Class Name</th> 
 <th>Subject Name</th> 
 <th>First Name</th> 
 <th>Last Name</th> <tr> ";

while($row=mysqli_fetch_assoc($myresult)) {

	extract($row);
	echo "<tr><td>$course_date</td> 
	<td>$start_time</td> 
	<td>$end_time</td> 
	<td>$course_duration</td> 
	<td>$class_full_name</td> 
	<td>$subject</td> 
	<td>$first_name</td> 
	<td>$last_name</td> <tr> ";

 }

echo "</table>";


?>




</body>



	<footer>
  <p>Posted by: Fahmin Guliyev</p>
  <p>Contact information: <a href="mailto:fahmin.guliyev@ufaz.az">
  fahmin.guliyev@ufaz.az</a></p>
</footer>


</html>

