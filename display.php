<?php

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1 class="fs-2 text-center fw-bold my-5">Simple CRUD Operation in PHP and MySql</h1>
        <a href="./user.php">
            <button class="btn btn-primary">Add user</button>
        </a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "Select * from `crud`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $password = $row['password'];
                        echo '
                        <tr>
                            <th scope="flex-row">' . $id . '</th>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $phone . '</td>
                                <td>' . $password . '</td>
                            <td class="d-flex flex-row gap-3">
                                <a href="./update.php?updateid=' . $id . '">
                                    <button class="btn btn-success">Update</button>
                                </a>
                                <a href="./delete.php?deleteid=' . $id . '">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </td>
                        </tr>';
                    }
                }

                ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>