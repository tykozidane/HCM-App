 <!-- Navbar Transparent -->
 <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
      <a class="navbar-brand  text-white " href="#" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
       HC APPLICATION SYSTEM
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
       <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
              HC INFORMATION
				<img src="../assets/img/down-arrow-white.svg" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
				<img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
            </a>
			<div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
              <div class="d-none d-lg-block">
                <a href="#" class="dropdown-item border-radius-md">
                  <span>HC Information</span>
                </a>
              <a href="#" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                </div>
              <div class="d-lg-none">
                <a href="#" class="dropdown-item border-radius-md">
                  <span>About Us</span>
                </a>
                <a href="#" class="dropdown-item border-radius-md">
                  <span>Contact Us</span>
                </a>
                <a href="#" class="dropdown-item border-radius-md">
                  <span>Author</span>
                </a>
               </div>
            </div>
          </li>
		   <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">article</i>
              HC Library
            </a>
            
          </li>
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">view_day</i>
              AKHLAK Point
            </a>
          </li>
		  <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="<?php echo base_url('claimreward') ?>" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Claim Point</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->