<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href=""
      rel="stylesheet"
    />
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php
    include("sidebar2.php");
    ?>
    <div class="ml-[160px] h-[100vh] w-full p-1 overflow-y-auto overflow-x-hidden bg-gray-900">
        <p class="font-bold text-3xl text-white text-center p-2">Search Work</p>
        <form method="post" class="gap-y-2">
        <p class="font-bold text-xl text-white  p-2">Select Location</p>
            <div class="p-5 flex gap-x-6">

                <select name="city" id=""
                    class="h-[50px] mt-11 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value=" ">city</option>
                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "root";
                    $dbname = "labour";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "select * from womens";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value=" . $row['city'] . ">" . $row['city'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <div class="p-3 mt-9">
                    <input type="submit" name="submit"
                        class=" px-3 py-3 text-white text-semibold bg-green-500 rounded-lg animation duration-300 hover:rounded-sm " />
                </div>


            </div>
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "labour";
            $city=$_POST["city"];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "select * from womens where city='$city';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<table class="table table-dark table-hover bg-netural-400/10 bg-opacity-70">
                <thead class="bg-green-500">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">wages</th>
                        <th scope="col">Type of work</th>
                        <th scope="col">phone number</th>
                        <th scope="col">address</th>
                        <th scope="col">city</th>
                        
                    </tr>
                </thead>
                <tbody>';
                while($row = $result->fetch_assoc()) {
                $id=$row['address'];
                echo "<tr>";
                echo "<td>".$row['name']."</td><td>".$row['wages']."</td><td>".$row['typework']."</td><td>".$row['phoneno']."</td><td>".$row['address']."</td><td>".$row['city']."</td>";
               // echo "<td><a href='delete.php?id=".$id."'><button class='btn btn-danger'>Delete</button></a></td>";
                echo "</tr>";
                }
            }
        }
        ?>
        </tbody>
        </table>
    </div>
  </body>
</html>