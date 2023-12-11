<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Student Form</h1>
        <div class="container">
         <form action="Create.php" method="post">
          <div class="row">
            <div class="col-md-4 mb-3">
                <label for="">Student ID</label>
                <input type="int" class="form-control" id="studentid" placeholder="Student ID" name ="studentid" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">First name</label>
                <input type="varchar" class="form-control" id="firstname" placeholder="First name" name ="firstname" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Last name</label>
                <input type="varchar" class="form-control" id="lastname" placeholder="Last name" name ="lastname" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Date of Birth</label>
                <input type="varchar" class="form-control" id="dateofbirth" placeholder="Date of Birth" name ="dateofbirth" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Email</label>
                <input type="varchar" class="form-control" id="email" placeholder="Email" name ="email" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="">Phone</label>
                <input type="varchar" class="form-control" id="phone" placeholder="Phone" name ="phone" required>
            </div>
            <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </div>
          </div>
         </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "Connect.php";
                        $sql_query = "SELECT * FROM student";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $StudentID = $row['StudentID'];
                                $FirstName = $row['FirstName'];
                                $LastName = $row['LastName'];
                                $DateOfBirth = $row['DateOfBirth'];
                                $Email = $row['Email'];
                                $Phone = $row['Phone'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $StudentID; ?></td>
                        <td><?php echo $FirstName; ?></td>
                        <td><?php echo $LastName; ?></td>
                        <td><?php echo $DateOfBirth; ?></td>
                        <td><?php echo $Email; ?></td>
                        <td><?php echo $Phone; ?></td>
                        <td><a href="Update.php?id=<?php echo $StudentID; ?>" class="btn btn-primary">Update</a></td>
                        <td><a href="Delete.php?id=<?php echo $StudentID; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>

</html>