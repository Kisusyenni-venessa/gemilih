<!DOCTYPE html>
<html lang="en">
<?php include_once("parts/head.php")?>
<body>

    <!-- Preloader -->
    <?php include_once("parts/loader.php")?>    
    <!-- End of Preloader -->

    <!-- Main Header Start -->
    <?php include_once("parts/header.php")?>
    <!-- End of Main Header -->
    
    <!-- Page title -->
    <div class="lawFirm--page-title text-center lawFirm--bg-center" data-bg-img="assets/images/lokasi-img/header-bg.png">
        <div class="container">
            <h2 class="pb-20">Contact Us</h2>
            <div class="title-bc"> <a href="#">Home</a> > <span>Contact Us </span></div>
        </div>
    </div>
    <!-- End of Page title -->

    <div class="lawfirm--location pb-120">
        <!-- Contact -->
        <div class="lawFirm--contact pt-120">
            <div class="container">
                <div class="lawFirm--section-title text-left">
                    <h2> Let Us Know What’s Your <br> Problem <span></span></h2>
                </div>
                
                <!-- Start Map -->
                <div id="map" data-map-latitude="40.712776" data-map-longitude="-74.005974" data-map-zoom="5"
                    data-map-marker="[[40.712776, -74.005974], [114.149139, 22.286394], [41.881832, -87.623177], [44.651070, -63.582687]]">
                </div>
                <!-- End Map -->
            </div>
        </div>
        <!-- End of Contact -->
    
        <!-- Filter & Search -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="lawFirm--filter-search pt-50 pl-50 pb-50 pr-50">
                        <!-- Filter Search Form -->
                        <form>
                            <div class="row half-gutters">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <!-- Name Input-->
                                    <input type="text" class="form-control" placeholder="Type a Lawyer">
                                </div>
    
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="lawFirm--filter">
                                        <!-- Area Select -->
                                        <select class="form-control">
                                            <option selected>Practice Areas</option>
                                            <option>All</option>
                                            <option>Corporate Law</option>
                                            <option>Real State Law</option>
                                            <option>Financial Law</option>
                                            <option>Insurance Law</option>
                                            <option>Envirrantment Law</option>
                                            <option>Family Law</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-lg-2 col-md-4 col-sm-6">
                                    <div class="lawFirm--filter">
                                        <!-- State Select -->
                                        <select class="form-control">
                                            <option selected> State </option>
                                            <option>Washington, D.C</option>
                                            <option>Hong Kong</option>
                                            <option>Chicago</option>
                                            <option>Beijing</option>
                                            <option>Boston</option>
                                            <option>London</option>
                                            <option>San Francisco</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="lawFirm--filter">
                                        <!-- Location Select -->
                                        <select class="form-control">
                                            <option selected> Office Location</option>
                                            <option>Washington, D.C</option>
                                            <option>Hong Kong</option>
                                            <option>Chicago</option>
                                            <option>Beijing</option>
                                            <option>Boston</option>
                                            <option>London</option>
                                            <option>San Francisco</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-2">
                                    <!-- Searc Button -->
                                    <button class="btn btn-block"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <!-- End of Filter Search Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Filter & Search -->
    </div>
    


    <!-- Footer -->
    <?php include_once("parts/footer.php")?>
    <!-- End of Footer -->

    <!-- Back to Top Button -->
    <?php include_once("parts/back-to-top.php")?>
    <!-- End of Back to Top Button -->
    
    <!-- JS Files -->
    <?php include_once("parts/script.php")?>

</body>
</html>