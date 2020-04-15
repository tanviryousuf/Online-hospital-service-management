<?php

$link = mysqli_connect("localhost", "root", "", "hospitalservice");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM cabinbook WHERE HospitalName LIKE ?";

    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);

        // Set parameters
        $param_term = $_REQUEST["term"] . '%';

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           echo '<div class="table-wrapper">';
           echo '<table class="fl-table">';
           echo "<tr>";
           echo "<th>Hospital ID</th>";
           echo "<th>Hospital Name</th>";
           echo "<th>Manager Name</th>";
           echo "<th>Phone Number</th>";
           echo "<th>Cabin</th>";
           echo "<th>Ward</th>";
           echo "<th>Discount</th>";
           echo "</tr>   ";
           echo "</thead>";
           echo "<tbody>";
          echo "<tr>
          <td>".$row['HospitalID']."</td>
          <td>".$row['HospitalName']."</td>
          <td>".$row['managerName']."</td>
          <td>".$row['phone']."</td>
          <td>".$row['CabinNo']."</td>
          <td>".$row['ward']."</td>
          <td>".$row['discount']."</td>

          </tr> ";
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// close connection
mysqli_close($link);
?>
