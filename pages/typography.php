<?php
include('./header_menu_left.php');
?>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Typography</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Material Dashboard Heading</h4>
              <p class="card-category">Created using Roboto Font Family</p>
            </div>
            <div class="card-body">
              <div id="typography">
                <div class="card-title">
                  <h2>Typography</h2>
                </div>
                <div class="row">
                  <div class="tim-typo">
                    <h1>
                      <span class="tim-note">Header 1</span>The Life of Material Dashboard </h1>
                  </div>
                  <div class="tim-typo">
                    <h2>
                      <span class="tim-note">Header 2</span>The Life of Material Dashboard</h2>
                  </div>
                  <div class="tim-typo">
                    <h3>
                      <span class="tim-note">Header 3</span>The Life of Material Dashboard</h3>
                  </div>
                  <div class="tim-typo">
                    <h4>
                      <span class="tim-note">Header 4</span>The Life of Material Dashboard</h4>
                  </div>
                  <div class="tim-typo">
                    <h5>
                      <span class="tim-note">Header 5</span>The Life of Material Dashboard</h5>
                  </div>
                  <div class="tim-typo">
                    <h6>
                      <span class="tim-note">Header 6</span>The Life of Material Dashboard</h6>
                  </div>
                  <div class="tim-typo">
                    <p>
                      <span class="tim-note">Paragraph</span>
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Quote</span>
                    <blockquote class="blockquote">
                      <p>
                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                      </p>
                      <small>
                        Kanye West, Musician
                      </small>
                    </blockquote>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Muted Text</span>
                    <p class="text-muted">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Primary Text</span>
                    <p class="text-primary">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Info Text</span>
                    <p class="text-info">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Success Text</span>
                    <p class="text-success">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Warning Text</span>
                    <p class="text-warning">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                    </p>
                  </div>
                  <div class="tim-typo">
                    <span class="tim-note">Danger Text</span>
                    <p class="text-danger">
                      I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                  </div>
                  <div class="tim-typo">
                    <h2>
                      <span class="tim-note">Small Tag</span>
                      Header with small subtitle
                      <br>
                      <small>Use "small" tag for the headers</small>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>