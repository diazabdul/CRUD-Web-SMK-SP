<?php
  require_once 'init.php';
  
  session_start();
  
  if(!isset($_SESSION["login"])){
      header("Location: login.php");
      exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>dokumen</title>

    <link href="dashboard.css" rel="stylesheet" />
  </head>
  <body>
    <header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
        </div>
      </div>
    </header>
    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              </li>
              <button>
                <a class="nav-link" href="databuku.php">
                  <span data-feather="file"></span>
                  Data Buku
                </a>
              </li>
              </button>
              <button>
                <a class="nav-link" href="dataanggota.php">
                  <span data-feather="users"></span>
                  Data Anggota
                </a>
              </li>
              </button>
              <button>
                <a class="nav-link" href="datapinjam.php">
                  <span data-feather="users"></span>
                  Data Pinjam
                </a>
              </li>
              </button>
              <!-- <button>
                <a class="nav-link" href="datapetugas.php">
                  <span data-feather="bar-chart-2"></span>
                  Data Petugas
                </a>
              </li>
              </button> -->
              <button>
              <a class="nav-link px-3" href="logout.php">
                  <span data-feather="bar-chart-2"></span>
                  logo ut
                </a>
              </li>
              </button>
            </ul>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </body>
</html>
