<?php
    require_once 'database/connect.php';  
    $xusan = new Database();
    var_dump($xusan); 

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Crud</title>
    <!-- bootstrao popper css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1 class="bg-drak  text-center py-2">PHP Advent CRUD</h1>

    <div class="container">

        <!-- form modal -->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating Users</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addform" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <!-- Username -->
                                <label>Name:</label>
                                <div class="input-group">
                                    <div class="input-group-prepent">
                                        <span class="iput-group-text bg-dark"><i class="fa-solid fa-square-user text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter you Username" autocomplete="off" required="required" id="username" name="username">
                                </div>
                            </div>
                            <!-- email -->
                            <div class="form-group">
                                <label>Email:</label>
                                <div class="input-group">
                                    <div class="input-group-prepent">
                                        <span class="iput-group-text bg-dark"><i class="fa-regular fa-envelope  text-light"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter you Email" autocomplete="off" required="required" id="email" name="email">
                                </div>
                            </div>
                            <!-- mobil -->
                            <div class="form-group">
                                <label>Mobile:</label>
                                <div class="input-group">
                                    <div class="input-group-prepent">
                                        <span class="iput-group-text bg-dark"><i class="fa-regular fa-mobile  text-light"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter you Mobile " autocomplete="off" required="required" id="mobile" name="mobile" maxlength="13" minlength="13">
                                </div>
                            </div>
                            <!-- photo -->
                            <div class="form-group">
                                <label>Photo:</label>
                                <div class="input-group">
                                    <label class="custom-file-label" for="userphoto">Choose File</label>
                                    <input type="file" class="custom-file-input" name="photo" id="userphoto">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- input search and button section -->

        <div class="row mb-3">
            <div class="col-10">
                <div class="input-group">
                    <div class="input-group-prepent">
                        <span class="iput-group-text bg-dark"><i class="fa-solid fa-magnifying-glass text-light"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <div class="col-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add new User
                </button>
            </div>
        </div>
        <!-- table -->
        <table class="table" id="usertable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Picture</th>
                    <td>Mark</td>
                    <td>Otto@gmail.com</td>
                    <td>+777324567</td>
                    <td>
                        <span class="btn btn-success">Edit</span>
                        <span class="btn btn-dark">Profile</span>
                        <span class="btn btn-danger">Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- pagination -->
        <nav aria-label="Page navigation example" id="pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>


    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- bootstrap popper and js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>