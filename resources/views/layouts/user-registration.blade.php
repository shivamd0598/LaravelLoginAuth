<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- CSS only -->
    <style>
    
        .brandname{
            color: #E83A59;
        }
        .navb{
            background-color:#E83A59 ;
            font-size: 1.5em;
            height:105px;
        }
        table {
            border-collapse: separate;
            border-spacing: 0 5em;
        }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid maincontainer">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid navb">
              <a class="navbar-brand brandname" href="#" style='color:#23C4ED;font-size:1em;'>Demo Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link"  href="layout.blade.php" >Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style='color:greenyellow'>Register</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="user-login.blade.php">Login</a>
                </ul>
              </div>
            </div>
          </nav>
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col">
                <center>
                    <form action="registerUser" method="post" return="false">
                        @csrf
                        <table cellspacing="220px">
                           <tr>
                               <td><strong>Username: </strong></td>
                               <td><strong><input type="text" name='uname'> </strong></td> 
                            </tr> 
                            <tr>
                                <td><strong>Password: </strong></td>
                                <td><strong><input type="password" name='pass'> </strong></td> 
                             </tr>
                             <tr>
                                <td><strong>Name: </strong></td>
                                <td><strong><input type="text" name='name'> </strong></td> 
                             </tr> 
                             <tr>
                                <td><strong>Mobile No.: </strong></td>
                                <td><strong><input type="text" name='mob_no'> </strong></td> 
                             </tr> 
                        </table> 
                        <br>
                        <input type="submit" name:"Register" value="Register" >
                    </form>
                </center>
                 </div>
          </div>
          <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      </div>
</body>
</html>