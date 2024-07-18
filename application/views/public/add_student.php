<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 13:54:42 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NIT SUPER ADMIN DASHBOARD</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="<?=base_url('assetsdb')?>/images/titlelogo.png" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="<?=base_url('assetsdb')?>/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?=base_url('assetsdb')?>/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="<?=base_url('assetsdb')?>/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>
    <!-- Page wrapper start -->
    <div class="page-wrapper" >

      <!-- App header starts -->
      <div class="app-header d-flex align-items-center" >

        <!-- Toggle buttons start -->
        <div class="d-flex col">
          <button class="toggle-sidebar" id="toggle-sidebar">
            <i class="bi bi-list lh-1 text-white"></i>
          </button>
          <button class="pin-sidebar" id="pin-sidebar">
            <i class="bi bi-list lh-1 text-white"></i>
          </button>
        </div>
        <!-- Toggle buttons end -->

        <!-- App brand starts -->
        <div class="app-brand py-2 col" >
          <a href="index.html">
            <img src="<?=base_url('assetsdb')?>/images/logo.png" style="max-width: 200px;max-height: 80px;" alt="Bootstrap Gallery" />
          </a>
        </div>
        <!-- App brand ends -->

        <!-- App header actions start -->
        <div class="header-actions col" >
          <div class="d-lg-flex d-none align-items-center gap-2">
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-grid fs-5 lh-1 text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow-lg">
                <!-- Row start -->
                <div class="d-flex gap-2 m-2">
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="<?=base_url('assetsdb')?>/images/brand-behance.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="<?=base_url('assetsdb')?>/images/brand-gmail.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="<?=base_url('assetsdb')?>/images/brand-google.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="<?=base_url('assetsdb')?>/images/brand-bitcoin.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                  <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                    <img src="<?=base_url('assetsdb')?>/images/brand-dribbble.svg" class="img-3x" alt="Admin Themes" />
                  </a>
                </div>
                <!-- Row end -->
              </div>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-exclamation-triangle fs-5 lh-1 text-white"></i>
                <span class="count-label">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow-lg">
                <h5 class="fw-semibold px-3 py-2 text-primary">
                  Notifications
                </h5>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <div class="icon-box md bg-success rounded-circle me-3">
                      <i class="bi bi-exclamation-triangle text-white fs-4"></i>
                    </div>
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Rosalie Deleon</h6>
                      <p class="mb-1 text-secondary">You have new order.</p>
                      <p class="small m-0 text-secondary">30 mins ago</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <div class="icon-box md bg-danger rounded-circle me-3">
                      <i class="bi bi-exclamation-octagon text-white fs-4"></i>
                    </div>
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Donovan Stuart</h6>
                      <p class="mb-2">Membership has been expired.</p>
                      <p class="small m-0 text-secondary">2 days ago</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2">
                    <div class="icon-box md bg-warning rounded-circle me-3">
                      <i class="bi bi-exclamation-square text-white fs-4"></i>
                    </div>
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Roscoe Richards</h6>
                      <p class="mb-2">Payment pending. Pay now.</p>
                      <p class="small m-0 text-secondary">3 days ago</p>
                    </div>
                  </div>
                </div>
                <div class="d-grid mx-3 my-1">
                  <a href="javascript:void(0)" class="btn btn-info">View all</a>
                </div>
              </div>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-bell fs-5 lh-1 text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow-lg">
                <h5 class="fw-semibold px-3 py-2 text-primary">Updates</h5>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <div class="icon-box md border border-success grd-success-light rounded-circle me-3">
                      <span class="text-success">DS</span>
                    </div>
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Douglass Shaw</h6>
                      <p class="mb-1 text-secondary">
                        Membership has been ended.
                      </p>
                      <p class="small m-0 text-secondary">Today, 07:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <div class="icon-box md border border-danger grd-danger-light rounded-circle me-3">
                      <span class="text-danger">WG</span>
                    </div>
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Willie Garrison</h6>
                      <p class="mb-1 text-secondary">
                        Congratulate, James for new job.
                      </p>
                      <p class="small m-0 text-secondary">Today, 08:00pm</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2">
                    <div class="icon-box md border border-warning grd-warning-light rounded-circle me-3">
                      <span class="text-warning">TJ</span>
                    </div>
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Terry Jenkins</h6>
                      <p class="mb-1 text-secondary">
                        Lewis added new schedule release.
                      </p>
                      <p class="small m-0 text-secondary">Today, 09:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="d-grid mx-3 my-1">
                  <a href="javascript:void(0)" class="btn btn-info">View all</a>
                </div>
              </div>
            </div>
            <div class="dropdown">
              <a class="dropdown-toggle header-action-icon" href="#!" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-envelope-open fs-5 lh-1 text-white"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow-lg">
                <h5 class="fw-semibold px-3 py-2 text-primary">Messages</h5>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <img src="<?=base_url('assetsdb')?>/images/user3.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Angelia Payne</h6>
                      <p class="mb-1 text-secondary">
                        Membership has been ended.
                      </p>
                      <p class="small m-0 text-secondary">Today, 07:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2 border-bottom">
                    <img src="<?=base_url('assetsdb')?>/images/user1.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Clyde Fowler</h6>
                      <p class="mb-1 text-secondary">
                        Congratulate, James for new job.
                      </p>
                      <p class="small m-0 text-secondary">Today, 08:00pm</p>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="d-flex py-2">
                    <img src="<?=base_url('assetsdb')?>/images/user4.png" class="img-3x me-3 rounded-5" alt="Admin Theme" />
                    <div class="m-0">
                      <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                      <p class="mb-2 text-secondary">
                        Lewis added new schedule release.
                      </p>
                      <p class="small m-0 text-secondary">Today, 09:30pm</p>
                    </div>
                  </div>
                </div>
                <div class="d-grid mx-3 my-1">
                  <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown ms-3">
            <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" href="#!"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?=base_url('assetsdb')?>/images/user2.png" class="rounded-2 img-3x" alt="Bootstrap Gallery" />
              <div class="ms-2 text-truncate d-lg-block d-none text-white">
                <span class="d-flex opacity-50 small">Admin</span>
                <span>Taylor Franklin</span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg">
              <div class="header-action-links">
                <a class="dropdown-item" href="profile.html"><i
                    class="bi bi-person border border-primary text-primary"></i>Profile</a>
                <a class="dropdown-item" href="settings.html"><i
                    class="bi bi-gear border border-danger text-danger"></i>Settings</a>
                <a class="dropdown-item" href="widgets.html"><i
                    class="bi bi-box border border-success text-success"></i>Widgets</a>
              </div>
              <div class="mx-3 mt-2 d-grid">
                <a href="login.html" class="btn btn-primary btn-sm">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- App header actions end -->
      </div>

      <!-- App header ends -->

      <!-- Main container start -->
      <div class="main-container" >

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper" style="margin-top: 3vh;">

          <!-- Sidebar profile starts -->
          <div class="sidebar-profile" >
            <img src="<?=base_url('assetsdb')?>/images/user3.png" class="profile-user mb-3" alt="Admin Dashboard" />
            <div class="text-center">
              <h6 class="profile-name m-0 text-nowrap text-truncate">
                Floyd Howard
              </h6>
            </div>
            <div class="d-flex align-items-center mt-lg-3 gap-2">
              <a href="calendar.html" class="icon-box md grd-success-light rounded-2">
                <i class="bi bi-calendar2-check fs-5 text-success"></i>
              </a>
              <a href="events.html" class="icon-box md grd-info-light rounded-2">
                <i class="bi bi-stickies fs-5 text-info"></i>
              </a>
              <a href="settings.html" class="icon-box md grd-danger-light rounded-2">
                <i class="bi bi-whatsapp fs-5 text-danger"></i>
              </a>
            </div>
          </div>
          <!-- Sidebar profile ends -->
          <div class="sidebarMenuScroll" >
            <!-- Sidebar menu starts -->
            <ul class="sidebar-menu" >
              <li>
                <a href="index.html">
                  <i class="bi bi-house"></i>
                  <span class="menu-text">Home</span>
                </a>
              </li>
              <li class="active current-page">
                <a href="calendar.html">
                  <i class="bi bi-people-fill"></i>
                  <span class="menu-text">Manage Student</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-person-add"></i>
                  <span class="menu-text">Add Student</span>
                </a>
              </li>
              <li>
                <a href="analytics.html">
                  <i class="bi bi-people-fill"></i>
                  <span class="menu-text">Manage Staff</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-person-add"></i>
                  <span class="menu-text">Add Staff</span>
                </a>
              </li>
              
              <li>
                <a href="calendar.html">
                  <i class="bi bi-calendar2"></i>
                  <span class="menu-text">Manage Course</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-journal-plus"></i>
                  <span class="menu-text">Add Course</span>
                </a>
              </li>
              <li>
                <a href="calendar.html">
                  <i class="bi bi-book-fill "></i>
                  <span class="menu-text">Manage Subject</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-journal-plus"></i>
                  <span class="menu-text">Add Subject</span>
                </a>
              </li>
              <li>
                <a href="calendar.html">
                  <i class="bi bi-calendar-event"></i>
                  <span class="menu-text">Manage Time Table</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-calendar-plus"></i>
                  <span class="menu-text">Add Time Table</span>
                </a>
              </li>
               <li>
                <a href="calendar.html">
                  <i class="bi bi-book"></i>
                  <span class="menu-text">Manage Library</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-journal-plus"></i>
                  <span class="menu-text">Add Books</span>
                </a>
              </li>

              <li>
                <a href="calendar.html">
                  <i class="bi bi-clipboard-data"></i>
                  <span class="menu-text">Manage Exams</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-clipboard-plus"></i>
                  <span class="menu-text">Add Exams</span>
                </a>
              </li>

              <li>
                <a href="calendar.html">
                  <i class="bi bi-people"></i>
                  <span class="menu-text">Manage Users</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-person-add"></i>
                  <span class="menu-text">Add User</span>
                </a>
              </li>

              <li>
                <a href="calendar.html">
                  <i class="bi bi-image"></i>
                  <span class="menu-text">Manage Gallery</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-camera"></i>
                  <span class="menu-text">Insert Photos</span>
                </a>
              </li>
              <li>
                <a href="calendar.html">
                  <i class="bi bi-people"></i>
                  <span class="menu-text">Manage Users</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-person-add"></i>
                  <span class="menu-text">Add User</span>
                </a>
              </li>

              <li>
                <a href="calendar.html">
                  <i class="bi bi-bus-front-fill"></i>
                  <span class="menu-text">Manage Transport</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-bus-front"></i>
                  <span class="menu-text">Add Transport Facility</span>
                </a>
              </li>

              <li>
                <a href="calendar.html">
                  <i class="bi bi-clipboard2-data"></i>
                  <span class="menu-text">Manage Notice Board For Students</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-clipboard2-plus"></i>
                  <span class="menu-text">Notify Students</span>
                </a>
              </li>

              <li>
                <a href="calendar.html">
                  <i class="bi bi-clipboard-data"></i>
                  <span class="menu-text">Manage Notice Board For Staff</span>
                </a>
              </li>
              <li>
                <a href="widgets.html">
                  <i class="bi bi-clipboard-plus"></i>
                  <span class="menu-text">Notify Staff</span>
                </a>
              </li>

               <li>
                <a href="widgets.html">
                  <i class="bi bi-person-fill-check"></i>
                  <span class="menu-text">View Attendance</span>
                </a>
              </li>
               <li>
                <a href="widgets.html">
                  <i class="bi bi-pencil-square"></i>
                  <span class="menu-text">Student Feedback</span>
                </a>
              </li>
               <li>
                <a href="widgets.html">
                  <i class="bi bi-pencil-square"></i>
                  <span class="menu-text">Staff Feedback</span>
                </a>
              </li>
              
              
            </ul>
          </div>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->

        <!-- App container starts -->
        <div class="app-container" >

          <!-- App hero header starts -->

          <div class="app-hero-header mb-4">

            <!-- Breadcrumb and Stats start -->
            <div class="d-flex align-items-center mb-3">

              <!-- Breadcrumb start -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <i class="bi bi-house"></i>
                  <a href="index.html" class="text-decoration-none">Home</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">Manage Student</li>
                <li class="breadcrumb-item" aria-current="page">Add Student</li>
              </ol>
              <!-- Breadcrumb end -->

              
            </div>
            <!-- Breadcrumb and stats end -->

           
          </div>
          <!-- App Hero header ends -->
          <!-- App body starts -->
          <style type="text/css">
            th,td{
              text-align: center;
            }
          </style>
          <div class="app-body" >
            <!--Row start -->
            <div class="row gx-3" >
                
              <div class="col-xxl-12">
                <div class="card mb-3">
                  <!--<form action="addstudent/insert" method="post">-->
                    <?php echo form_open('addstudent/insert'); ?>
                  <div class="card-header">
                    <h5 class="card-title">Add Student</h5>
                  </div>

 <?php echo form_error('s_n');?>
 <?php echo form_error('s_n');?>
                      
                  
                  <div class="card-body">
                    <!-- Row start -->
                    <div class="row gx-3">
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Picture</label>
                          <input class="form-control" type="file" id="formFile" />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Student ID</label>
                          <input type="text" class="form-control"  />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Name</label>
                          <input name="s_n" type="text" class="form-control" placeholder="Enter fullname" />
                          <?php echo form_error('s_n', '<div class="badge bg-danger">', '</div>'); ?>
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" placeholder="Enter email address" />
                        </div>
                      </div>
                      
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Phone</label>
                          <input type="number" class="form-control" placeholder="Enter phone number" />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Address</label>
                          <input type="email" class="form-control" placeholder="Enter address" />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Age</label>
                          <input type="email" class="form-control" placeholder="Enter age" />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Batch</label>
                          <input type="email" class="form-control" placeholder="Enter Batch" />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Date Of Birth</label>
                          <input type="email" class="form-control" placeholder="Enter Date Of Birth" />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Stream</label>
                          <input type="email" class="form-control" placeholder="Enter Stream" />
                        </div>
                      </div>'
                      <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                          <label class="form-label">Status</label>
                          <select class="form-select">
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                          </select>
                        </div>
                      </div>
                      
                    </div>
                    <!-- Row end -->
                  </div>
                  <div class="card-footer">
                    <div class="d-flex gap-2 justify-content-end">
                      <button type="reset" class="btn btn-danger">
                        Cancel
                      </button>
                      <button type="submit" class="btn btn-success">
                        Add
                      </button>
                    </div>
                  </div>
                </form>
                </div>
              </div>


            </div>
            
            <!-- Row end -->

            <!-- Row start -->
            
            <!-- Row end -->

            <!-- Row start -->
            
            <!-- Row end -->

            <!-- Row start -->
            
            <!-- Row end -->

          </div>
          <!-- App body ends -->

          <!-- App footer start -->
          <div class="app-footer">
            <span>  </span>
          </div>
          <!-- App footer end -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="<?=base_url('assetsdb')?>/js/jquery.min.js"></script>
    <script src="<?=base_url('assetsdb')?>/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="<?=base_url('assetsdb')?>/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="<?=base_url('assetsdb')?>/vendor/apex/apexcharts.min.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/apex/custom/dash1/sales.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/apex/custom/dash1/revenue.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/apex/custom/dash1/source.js"></script>

    <!-- Vector Maps -->
    <script src="<?=base_url('assetsdb')?>/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/jvectormap/gdp-data.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/jvectormap/continents-mill.js"></script>
    <script src="<?=base_url('assetsdb')?>/vendor/jvectormap/custom/world-map-markers3.js"></script>

    <!-- Custom JS files -->
    <script src="<?=base_url('assetsdb')?>/js/custom.js"></script>
  </body>


<!-- Mirrored from www.bootstrapget.com/demos/templatemonster/unity-bootstrap-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 13:54:59 GMT -->
</html>