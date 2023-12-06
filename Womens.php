<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">


    <?php
    include("sidebar.php");
    ?>
    <div class="ml-[160px] h-[100vh] w-full p-1 overflow-y-auto bg-gray-900">
        <p class="font-bold text-xl text-white text-center p-2">Add Women's Work</p>



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
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $wage = $_POST["wages"];
            $type = $_POST["type"];
            $phno = $_POST["phno"];
            $add = $_POST["add"];
            $city = $_POST["city"];
            $sql = "insert into womens values('$name','$wage','$type','$phno','$add','$city')";
            if ($conn->query($sql)) {
                echo "successfully added";
            }
        } else {

        }
        ?>
        <table class="table table-success table-hover bg-netural-400/10 bg-opacity-70">
            <thead class="bg-green-500">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">wages</th>
                    <th scope="col">Type of work</th>
                    <th scope="col">phone number</th>
                    <th scope="col">address</th>
                    <th scope="col">city</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
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
                        $id = $row['address'];
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td><td>" . $row['wages'] . "</td><td>" . $row['typework'] . "</td><td>" . $row['phoneno'] . "</td><td>" . $row['address'] . "</td><td>" . $row['city'] . "</td>";
                        echo "<td><a href='delete.php?id=" . $id . "'>Delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <dialog class="backdrop-blur-lg bg-black rounded-lg p-2">
            <form method="post">
                <p class="font-bold text-xl text-white">Add Work</p>
                <div class=" justify-center align-center">
                    <div class="relative p-3 w-[300px]">
                        <input type="text" name="name" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" " required="">
                        <label for="email" class="left-2  absolute 
                            text-md text-zinc-400  duration-150 transform -translate-y-5 scale-75 top-3  z-10 origin-[0] left-4
                            peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:translate-y-0 
                            peer-focus:scale-75
                            peer-focus:-translate-y-5">Name</label>

                    </div>
                    <div class="relative p-3 w-[300px]">
                        <input type="text" name="wages" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" " required="">
                        <label for="email" class="  absolute 
                            text-md text-zinc-400  duration-150 transform -translate-y-5 scale-75 top-3  z-10 origin-[0] left-4
                            peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:translate-y-0 
                            peer-focus:scale-75
                            peer-focus:-translate-y-5">wages</label>

                    </div>
                    <div class="relative p-3 w-[300px]">
                        <input type="text" name="type" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" " required="">
                        <label for="email" class="  absolute 
                            text-md text-zinc-400  duration-150 transform -translate-y-5 scale-75 top-3  z-10 origin-[0] left-4
                            peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:translate-y-0 
                            peer-focus:scale-75
                            peer-focus:-translate-y-5">Type of work</label>

                    </div>
                    <div class="relative p-3 w-[300px]">
                        <input type="text" name="phno" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" " required="">
                        <label for="email" class="  absolute 
                            text-md text-zinc-400  duration-150 transform -translate-y-5 scale-75 top-3  z-10 origin-[0] left-4
                            peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:translate-y-0 
                            peer-focus:scale-75
                            peer-focus:-translate-y-5">contact no</label>

                    </div>
                    <div class="relative p-3 w-[300px]">
                        <input type="text" name="add" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" " required="">
                        <label for="email" class="  absolute 
                            text-md text-zinc-400  duration-150 transform -translate-y-5 scale-75 top-3  z-10 origin-[0] left-4
                            peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:translate-y-0 
                            peer-focus:scale-75
                            peer-focus:-translate-y-5">Address</label>

                    </div>
                    <div class="relative p-3 w-[300px]">
                        <input type="text" name="city" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 peer"
                            placeholder=" " required="">
                        <label for="email" class="  absolute 
                            text-md text-zinc-400  duration-150 transform -translate-y-5 scale-75 top-3  z-10 origin-[0] left-4
                            peer-placeholder-shown:scale-100 
                            peer-placeholder-shown:translate-y-0 
                            peer-focus:scale-75
                            peer-focus:-translate-y-5">city</label>

                    </div>
                    <input type="submit" name="submit"
                        class="mr-4 mb-2 font-semibold text-white rounded-md float-right px-2 py-1 bg-green-500 hover:bg-green-700"
                        autofocus>Submit</button>
            </form>
            <button id="close"
                class="mr-4 mb-2 font-semibold text-white rounded-md float-right px-2 py-1 bg-red-500 hover:bg-red-600"
                autofocus>Close</button>
        </dialog>
        <button class="rounded-md px-2 text-center ml-5 py-1 font-semibold text-white bg-green-500"
            id="dialogbutton">Add Work</button>
    </div>
</body>
<script>
    const dialog = document.querySelector("dialog");

    const button = document.getElementById("dialogbutton")
    button.addEventListener("click", () => {
        dialog.showModal()
    })
    const close = document.getElementById("close")
    close.addEventListener("click", () => {
        dialog.close()
    })
</script>

</html>