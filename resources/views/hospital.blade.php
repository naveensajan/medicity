<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital</title>
</head>
<body style="background-color:black">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctors">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="departments">Departments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="hospital">Book Your Doctor</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- Image and text -->
<nav class="navbar navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="pics/2.jpg" alt="" width="150" height="50" class="d-inline-block align-top">
        
      </a>
    </div>
  </nav>
    <h1><b><center style="color:white">
        Hospital Details</center></b>
    </h1>
    <table class="table">

        <tr>
            <td style="color:white">Patient Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>

            <tr>
                <td style="color:white">Address</td>
                <td><input type="text" class="form-control">
                </td>
            </tr>
            <tr>
                <td style="color:white">Phone No</td>
                <td><input type="text" class="form-control"></td>
            </tr>
        <tr>
            <td style="color:white">Email Id</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:white">Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:white">Department</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td style="color:white">Doctor</td>
            <td><input type="text" class="form-control"></td>
        </tr>
   
        <tr>
            <td style="color:white">Token Number</td>
            <td><input type="text" class="form-control"></td>
        </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-secondary">Submit</button></td>
    </tr>
    </table> 
</body>
</html>