<?php

session_start();

//database connection
ob_start();
require "../includes/database.php";
ob_end_clean();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
    Tech Board
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/styles.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">

  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <!-- sidebar -->
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <!-- logo div -->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">CareConnect</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <!-- menu div -->
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../tech-session/tech-home.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../tech-session/tech-profile.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- header: Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Home</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Home</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">
                  <a href="../sign-in.html" style="color: white">Log out</a>
                </span>
              </a>
            </li>
            
            <li class="nav-item px-2 d-flex align-items-center"></li>

            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- body: ticket table -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tickets table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subject</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Progress</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      //echo $_SESSION['name']; //works

                      // get username (id_tech) related to tech
                      $sql = "SELECT username FROM user WHERE name = '{$_SESSION['name']}'";
                      // echo $sql; //works
                      $id = mysqli_query($conn, $sql);
                      $row = mysqli_fetch_assoc($id);
                      $id_tech = $row['username'];
                      //echo $id_tech; //works

                      //create a global session to reference tech username
                      $_SESSION['id_tech'] = $id_tech;


                      // get tickets related to id_tech
                      $sql2 = "SELECT * FROM ticket WHERE id_tech = $id_tech ORDER BY state ASC";
                      $result = mysqli_query($conn, $sql2);
                      //$ticket = mysqli_fetch_assoc($result);
                      //echo $ticket['object']; //works


                      // loop through data and display it in the table rows
                      while ($ticket = mysqli_fetch_assoc($result)) {
                         
                        //echo "on"; // works
                        // create a variable to reference tickets
                        $data = $ticket['num'];

                        $url = "../tech-session/ticket-info-reply.php?data=".urlencode($data);


                        echo"<tr>
                          <td>
                          <div class='d-flex px-2'>
                            <div>
                              <img src='../../assets/img/ticket.png' class='avatar avatar-sm rounded-circle me-2' alt='spotify'>
                            </div>
                            <div class='my-auto'>
                           <a href='$url'>
                             <h6 class='mb-0 text-sm'>";
                               echo $ticket['object'];
                             echo "</h6>
                           </a>
                           <td>
                             <p class='text-sm font-weight-bold mb-0'>";
                               //get id_client name 
                               $sql3 = "SELECT name FROM user WHERE username = '{$ticket['id_client']}'"; //works
                               $id2 = mysqli_query($conn, $sql3);
                               $res = mysqli_fetch_assoc($id2);
                               echo $res['name']; // IT WORKSSSSSSSS
                             echo "</p>
                             <td>
                             <span class='text-xs font-weight-bold'>";
                             if ($ticket['state'] == 0){
                              echo "On hold";
                              echo "<td class='align-middle text-center'>
                              <div class='d-flex align-items-center justify-content-center'>
                                <span class='me-2 text-xs font-weight-bold'>10%</span>
                                <div>
                                  <div class='progress'>
                                    <div class='progress-bar bg-gradient-danger' role='progressbar' aria-valuenow='10' aria-valuemin='0' aria-valuemax='30' style='width: 10%;'></div>
                                  </div>
                                </div>
                              </div>
                            </td>";
                            } elseif ($ticket['state'] == 1){
                              echo "In progress";
                              echo "<td class='align-middle text-center'>
                              <div class='d-flex align-items-center justify-content-center'>
                                <span class='me-2 text-xs font-weight-bold'>60%</span>
                                <div>
                                  <div class='progress'>
                                    <div class='progress-bar bg-gradient-info' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='30' style='width: 60%;'></div>
                                  </div>
                                </div>
                              </div>
                            </td>";
                            } elseif ($ticket['state'] == 2) {
                              echo "Validated";
                              echo "<td class='align-middle text-center'>
                              <div class='d-flex align-items-center justify-content-center'>
                                <span class='me-2 text-xs font-weight-bold'>100%</span>
                                <div>
                                  <div class='progress'>
                                    <div class='progress-bar bg-gradient-success' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='30' style='width: 100%;'></div>
                                  </div>
                                </div>
                              </div>
                            </td>";
                            }
                          echo "
                          </span>
                          </td>";
                            echo"</div>
                            </td>
                            <td class='align-middle'>
                             <button class='btn btn-link text-secondary mb-0'>
                                 <i class='fa fa-ellipsis-v text-xs'></i>
                             </button>
                            </td>
                          </td>
                        </div>
                        </div>
                        </td>
                      </tr>";

                      }

                    ?>
                 </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                PFA 
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>