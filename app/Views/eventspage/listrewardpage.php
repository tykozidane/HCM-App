<!--
=========================================================
* Material Kit 2 - v3.0.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
     HC Information
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.0" rel="stylesheet" />
  <!-- <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" /> -->
</head>

<body class="sign-in-basic">
<?= $this->include('layouts/navbaremployee') ?>
  <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container mt-auto">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5"><?= $dataemployee['nama_emp'] ?> -
                            <?= $dataemployee['nik_inf'] ?></h1>
                        <p class="text-lead text-white">LIST REWARD YANG BISA ANDA CLAIM</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4" style="margin: 5px; padding: 5px;">
                            <div class="card-header pb-0">
                                <h6>Jumlah Poin Akhlak <?= $poin ?> </h6>
                            </div>
                            <div class="d-flex flex-wrap">
                                <?php 
                            foreach($datareward as $reward){
                                $done = false; 
                                if(!empty($dataclaimreward)){
                                    
                                    foreach($dataclaimreward as $claim){
                                        if($claim['reward_id'] == $reward['id']){
                                            $done = true;
                                            $status = $claim['status'];
                                        }
                                    }
                                }
                               
                                
                            ?>
                                <!-- Card Reward -->
                                <div class="card-body px-5 pt-0 pb-3 mt-2">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-header" style="padding: 1.5em 1.5em 0em 1.5em; ;">
                                            <?= $reward['status'] ?>
                                        </div>
                                        <div class="card-body" style="padding-top: 0.5em;">
                                            <h5 class="card-title"><?= $reward['nama'] ?></h5>
                                            <p class="card-text"> <?= $reward['deskripsi'] ?></p>
                                            <p class="card-text" style="font-weight: bold;"> Price
                                                <?= $reward['price'] ?> Poin</p>
                                            <?php if($poin >= $reward['price'] && $done === false){ ?>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#claimModal" data-id="<?= $reward['id'] ?>" data-nik="<?= $dataemployee['nik_inf'] ?>" data-nama="<?= $dataemployee['nama_emp'] ?>" data-namareward="<?= $reward['nama'] ?>">
                                                            CLAIM
                                                                </button>
                                            <!-- <a href="<?= base_url('claimthis').'/'.$reward['id'].'/'.$dataemployee['nik_inf'] ?>"
                                                class="btn btn-success">Claim</a> -->
                                            <?php } else if($poin < $reward['price'] && $done === false) { ?>
                                            <button class="btn btn-secondary" style="margin-bottom: 0.5em;"
                                                disabled>Claim</button>
                                            <p class="fst-italic" style="font-size: 10px; ">*Poin anda tidak mencukupi
                                            </p>
                                            <?php } else { 
                                                if($status == "requested"){ ?>
                                            <button class="btn btn-info" style="margin-bottom: 0.5em;"
                                                disabled><?= $status ?></button>
                                            <?php } else if($status == "verification"){ ?>
                                            <button class="btn btn-secondary" style="margin-bottom: 0.5em;"
                                                disabled><?= $status ?></button>
                                            <?php } else if($status == "success"){ ?>
                                            <button class="btn btn-success" style="margin-bottom: 0.5em;"
                                                disabled><?= $status ?></button>
                                            <?php } ?>
                                            <p class="fst-italic" style="font-size: 10px;">*Sudah di claim </p>

                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>



                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mb-4" style="margin: 5px; padding: 5px;">
                    <div class="card-header pb-0">
                        <div class="d-flex">
                            <h6>Data Claim Reward Anda </h6>
                        </div>
                    </div>
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" id="myInput" onkeyup="myFunction()" class="form-control"
                                placeholder="Type here...">
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Deskripsi</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tahun</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Quarter</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Price</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                    foreach ($dataclaimreward as $claim) {
                    ?>

                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"> <?= $claim['nama']; ?> </p>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"> <?= $claim['deskripsi']; ?> </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0"> <?= $claim['tahun']; ?> </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs font-weight-bold mb-0"> <?= $claim['quarter']; ?> </p>
                                    </td>

                                    <td class="align-middle text-center text-sm">
                                        <p class="text-xs text-secondary mb-0"><?php echo $claim['price'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold"><?php echo $claim['status'] ?></span>
                                    </td>
                                    </tr>
                                    <?php
                }
                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
    <footer class="footer position-absolute bottom-2 py-2 w-100">
      <div class="container mt-auto">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-12 col-md-6 my-auto">
            <div class="copyright text-center text-sm text-white text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with </i> by
              <a href="#" class="font-weight-bold text-white" target="_blank">Human Capital Strategy & Organizational Development</a>
             
            </div>
          </div>
          <div class="col-12 col-md-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
             
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Modal -->
<div class="modal fade" id="claimModal" tabindex="-1" aria-labelledby="claimModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="claimModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="<?= base_url('claimthis').'/'.$reward['id'].'/'.$dataemployee['nik_inf'] ?>"
                                                class="btn btn-success">Claim</a>
      </div>
    </div>
  </div>
</div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
  <script>
    var claimModal = document.getElementById('claimModal')
claimModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var id = button.getAttribute('data-id')
  var nik = button.getAttribute('data-nik')
  var nama = button.getAttribute('data-nama')
  var namareward = button.getAttribute('data-namareward')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = claimModal.querySelector('.modal-title')
  var modalBodyInput = claimModal.querySelector('.modal-footer a')
  var modaldeskripsi = claimModal.querySelector('.modal-body p')

  modalTitle.textContent = 'Claim Reward atas nama ' + nama
  modalBodyInput.href = '<?= base_url('claimthis') ?>'+'/'+ id + '/' + nik
  modaldeskripsi.textContent = namareward
})
  </script>
</body>

</html>

