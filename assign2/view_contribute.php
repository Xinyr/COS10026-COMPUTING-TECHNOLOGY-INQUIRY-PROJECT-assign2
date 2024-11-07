<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Contribute</title>
    <meta name="author" content="Kai Seng Bong"/>
    <meta name="description" content="Assignment 2"/>
    <meta name="keywords" content="Herbarium, View_Contribute"/>
</head>


<body>
<h1>Contruibution Page</h1>

<table border="1">
        <tr>
            <th>No</th>
            <th width="150px">Plant Name</th>
            <th width="150px">Plant Family</th>
            <th width="150px">Plant Genus</th>
            <th width="150px">Plant Species</th>
            <th width="100px">Photo Upload(Fresh Leaf)</th>
            <th width="100px">Photo Upload(Herbarium)</th>

        </tr>


<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Herbarium_DB";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Debug: Output a message to confirm connection success
            echo "<p>Database connection successful.</p>";

            // SQL query
            $sql = "SELECT * FROM contributions";
            echo "<p>Executing query: $sql</p>"; // Debug: Output query

            $result = mysqli_query($conn, $sql);

            // Check if the query executed successfully
            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }

            // Check if query returned any rows
            if (mysqli_num_rows($result) > 0) {
                // Fetch and display each row
                while ($row = mysqli_fetch_assoc($result)) {
        ?>

              <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($row["plantName"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantFamily"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantGenus"]); ?></td>
                        <td><?php echo htmlspecialchars($row["plantSpecies"]); ?></td>
                        <td>
                            <?php 
                                if (!empty($row["freshLeafPhoto"])) {
                                    echo '<img src="' . htmlspecialchars($row["freshLeafPhoto"]) . '" width="80px" alt="Fresh Leaf Photo">';
                                } else {
                                    echo 'N/A';
                                }
                            ?>
                        </td>
                        <td>
                            <?php 
                                if (!empty($row["herbariumPhoto"])) {
                                    echo '<img src="' . htmlspecialchars($row["herbariumPhoto"]) . '" width="80px" alt="Herbarium Photo">';
                                } else {
                                    echo 'N/A';
                                }
                            ?>
                        </td>
                        <td><?php echo htmlspecialchars($row["created_at"]); ?></td>
             </tr>

 <?php 
                }
            } else {
                echo "<tr><td colspan='5'>No results found</td></tr>";
            }

            // Close connection
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>