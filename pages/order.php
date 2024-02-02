<?php
require_once("../db_connect.php");
$p=1;
$perAmount=10;


$sql="SELECT `order`.*,
order_status.name AS order_status_name,
user.name AS order_user,
product.name AS order_product

FROM `order`

JOIN order_status ON `order`.order_status= order_status.id
JOIN user ON `order`.user_id = user.id
JOIN product ON `order`.product_id = product.id
";


$result = $conn->query($sql);
$rowCount = $result->num_rows;
$rows = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>
    會員管理/註冊
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">


  <!-- 介面開始 -->

  <div class="min-height-300 bg-primary position-absolute w-100"></div>

  <aside
    class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <!-- SIDENAV-HEADER -->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
        target="_blank">
        <img src="../assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">MIDTERM PROJECT</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <!-- SIDENAV-BODY -->
    <div class=" w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./pages/dashboard.html">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">主頁面
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/member.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">會員管理/註冊</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/product-list.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">商品管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/primary_category.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">商品類別管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/articles.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">文章管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/order.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">訂單管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/teachers.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">講師管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/rtl.html">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">課程管理</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/trrry.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">優惠券管理</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">個人主頁</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">個人檔案</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/register.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">註冊</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-up.php">
            <div
              class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">登出</span>
          </a>
        </li>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
      data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">主頁面</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">訂單管理</li>
          </ol>
          <!-- <h6 class="font-weight-bolder text-white mb-0">主頁面</h6> -->
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <div class="text-white px-4">
            HI, USER
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">登入</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- 訂單列表-->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-6">
            <div class="card-header pb-0">

              <!-- 新增使用者 -->
              <div class="d-flex justify-content-lg-between">

                <h4>會員資料</h4>

                <div>
                  新增
                  <a name="" id="" class="btn btn-primary" href="register.php" role="button">
                    <i class="fa-solid fa-user-plus fa-fw"></i>
                  </a>
                </div>

              </div>
              <!-- SEARCH -->
              <div class="col">
                <form action="">
                  <div class="input-group">
                    <input style="height: 41px;" type="search" class="form-control box-sizing inline-block"
                      placeholder="商品名稱" aria-label="Recipient's username" aria-describedby="button-addon2"
                      name="search" <?php if (isset($_GET["search"])):
                        $searchValue = $_GET["search"]; ?>
                        value="<?= $searchValue ?>" <?php endif; ?>>
                    <button class="btn btn-primary" type="search" id="button-addon2"><i
                        class="fa-solid fa-magnifying-glass fa-fw"></i></button>
                  </div>
                </form>
              </div>
              <!-- ORDER -->
              <div class="py-2 d-flex justify-content-between align-items-center">
                <div>
                  共
                  <?= $rowCount ?> 筆
                </div>
                <div class="d-flex">
                  <div class="me-2">

                    <div class="btn-group">
                      <a class="btn btn-primary <?php if ($order == 1)
                        echo "active" ?>" href="tables.php?order=1&p=<?= $p ?>">id<i
                          class="fa-solid fa-arrow-down-1-9 fa-fw"></i></a>
                      <a class="btn btn-primary <?php if ($order == 2)
                        echo "active" ?>" href="tables.php?order=2&p=<?= $p ?>">id<i
                          class="fa-solid fa-arrow-down-9-1 fa-fw"></i></a>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <!-- 資料開始載入 -->
              <div class="table-responsive p-0">
                

                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>

                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">訂單編號</th>

                      <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ">購買商品</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">訂單總價
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">購買人
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">成立時間
                      </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">訂單狀態
                      </th>
                      
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if ($result) {
                      
                      foreach ($rows as $order):
                        ?>

                        <tr>
                          <td class="text-center">
                            <p class="text-xs text-secondary mb-0">
                              <?= $order["id"] ?>
                            </p>
                          </td>
                          <td class="text-center">
                          <?= $order["order_product"] ?>
                          </td>
                          <td>
                            <p class="text-xs text-secondary mb-0">
                              <!--訂單總價 -->
                            </p>
                          </td>
                          <td class="align-middle text-center text-sm">
                            <p class="text-xs text-secondary mb-0">
                              <?= $order["order_user"] ?>
                            </p>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                              <?= $order["date"] ?>
                            </span>
                          </td>
                          <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                              <?= $order["order_status_name"] ?>
                            </span>
                          </td>
                          

                          <td class="align-middle text-center">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#editBackdrop<?= $order["id"] ?>">
                              <i class="fa-solid fa-eye fa-fw text-white"></i></button>

                            >
                            <!-- 按修改會跳出來的東西 (完成)-->
                            <div class="modal fade" id="editModal<?= $order["id"] ?>" tabindex="-1"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl">
                                <form action="doEditUser.php" method="post">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">修改訂單資料</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="container">
                                        <div class="row">

                                          <div class="col-4 ">
                                            <img src="../images/<?= $user["img"] ?>" alt="<?= $user["name"] ?>"
                                              width="300px" height="300px" class="mt-3">
                                          </div>

                                          <div class="col-8">
                                            <input type="hidden" class="form-control" name="editId"
                                              value="<?= $user["id"] ?>">
                                            <!-- 修改內容的欄位 -->
                                            <table class="table table-bordered">
                                              <tr class="border-end">
                                                <th>名字</th>
                                                <td>
                                                  <input type="text" class="form-control" name="editName"
                                                    value="<?= $user["name"] ?>">

                                                </td>
                                              </tr>
                                              <tr class="border-end">
                                                <th>信箱</th>
                                                <td>
                                                  <input type="text" class="form-control" name="editEmail"
                                                    value="<?= $user["email"] ?>">
                                                </td>
                                              </tr>
                                              <tr class="border-end">
                                                <th>生日</th>
                                                <td>
                                                  <input type="date" class="form-control" name="editBirthday"
                                                    value="<?= $user["birthday"] ?>">
                                                </td>
                                              </tr>
                                              <tr class="border-end">
                                                <th>手機號碼</th>
                                                <td><input type="text" class="form-control" name="editPhone"
                                                    value=" <?= $user["phone"] ?>">
                                                </td>
                                              </tr>
                                              <tr class="border-end">
                                                <th>地址</th>
                                                <td>
                                                  <input type="text" class="form-control" name="editAddress"
                                                    value="<?= $user["address"] ?>">
                                                </td>
                                              </tr>
                                              <tr class="border-end">
                                                <th>信用卡號</th>
                                                <td>
                                                  <input type="text" class="form-control" name="editCreditNumber"
                                                    style="width: 100%;" value="<?= $user["credit_number"] ?>">
                                                </td>
                                              </tr>

                                            </table>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                      <button type="submit" class="btn btn-danger">確認</button>
                                    </div>

                                  </div>
                                </form>
                              </div>


                            </div>
                            <!-- 按刪除會跳出來的東西 -->
                            <div class="modal fade" id="confirmModal<?= $user["id"] ?>" tabindex="-1"
                              aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">刪除使用者</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    確認刪除?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                                    <a type="button" href="doDeleteUser.php?id=<?= $user["id"] ?>" class="btn btn-danger"
                                      role="button">確認</a>
                                  </div>
                                </div>
                              </div>
                            </div>


                            <!-- 刪除按鈕 -->
                            <button class="btn btn-danger" data-bs-toggle="modal"
                              data-bs-target="#confirmModal<?= $user["id"] ?>" role="button">
                              <i class="fa-solid fa-trash fa-fw"></i>
                            </button>
                          </td>
                        </tr>
                      <?php endforeach;
                    } ?>
                  </tbody>



                </table>


              </div>
            </div>

            <!-- 資料載入結束 -->
            <!-- 分頁按鈕 -->                  
              

                         
            <!-- footer -->
            <footer class="footer pt-3 pb-3 ">
              <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                      ©
                      <script>
                        document.write(new Date().getFullYear())
                      </script>,
                      made with <i class="fa fa-heart"></i> by
                      <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                      for a better web.
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                      <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                          Tim</a>
                      </li>
                      <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                          target="_blank">About
                          Us</a>
                      </li>
                      <li class="nav-item">
                        <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                          target="_blank">License</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- 頁碼的JS -->
  <script>
    $(document).ready(function () {
      var totalPages = <?= $perAmount ?>;
      var currentPage = <?= $p ?>;

      function generatePaginationItems() {
        var startPage = Math.max(1, currentPage - 1);
        var endPage = Math.min(totalPages, startPage + 2);

        $('.pagination').empty();

        $('.pagination').append('<li class="page-item"><a class="page-link" href="#" aria-label="Previous" id="prev"><span aria-hidden="true">&laquo;</span></a></li>');

        for (var i = startPage; i <= endPage; i++) {
          var activeClass = (i === currentPage) ? 'active' : '';
          $('.pagination').append('<li class="page-item ' + activeClass + '"><a class="page-link" href="tables.php?order=1&p=' + i + '">' + i + '</a></li>');
        }

        $('.pagination').append('<li class="page-item"><a class="page-link" href="#" aria-label="Next" id="next"><span aria-hidden="true">&raquo;</span></a></li>');
      }

      generatePaginationItems();

      $('.pagination').on('click', '#prev', function (e) {
        e.preventDefault();
        if (currentPage > 1) {
          currentPage--;
          generatePaginationItems();
        }
      });

      $('.pagination').on('click', '#next', function (e) {
        e.preventDefault();
        if (currentPage < totalPages) {
          currentPage++;
          generatePaginationItems();
        }
      });
    });
  </script>
  <!-- 頁碼的JS結束 -->



  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary"
              onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default"
            onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free
          Download</a>
        <a class="btn btn-outline-dark w-100"
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
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
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>