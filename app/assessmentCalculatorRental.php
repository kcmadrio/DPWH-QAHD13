<?php
include "includes/header.php";

include_once "includes/connection.php";
?>
<style>
@media screen {
    #rep {
        display: none;	
    }
    #h51 {
        display: none;	
    }
}
@media print {
    #printPageButton {
        display: none;
    }
    #header {
        display: none;
    }
    #navBar {
        display: none;
    }
    #dhead {
        display: none;	
    }
    #rep {
        padding-top: 1rem;
    }
    #h51 {
        position: absolute;
        bottom: 0;
        left: 0;
    }
    #h52 {
        font-size: 12px;
    }
    #validationMaterials {
        border: 0;
        padding-top: -0;
        padding-left: -0;
        padding-bottom: 1rem;
    }
    #tble {
        padding-top: 1rem;
    }
    #noT {
        display: none;	
    }
    #noTest {
        display: none;	
    }
    #footer {
        display: none;
    }
}
</style>

<body>
    <div id="rep">
        <table>
            <tr class="pt-4">
                <td class="col-md-2 pe-3">
                    <img src="../img/DPWH_Logo.png" class="ms-5 d-block" height="100" width="100" />
                </td>
                <td class="col-sm-4 text-center">
                    <span class="fs-5 fw-bold">Republic of the Philippines</span><br>
                    <span class="fs-4">DEPARTMENT OF PUBLIC WORKS AND HIGHWAYS</span><br>
                    <span class="fs-4 fw-bold">REGIONAL OFFICE XIII</span><br>
                    <span class="fs-7">J. Rosales Avenue, Butuan City</span>
                </td>
            </tr>
        </table>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navBar" style="background-color: black !important">
        <div class="container mx-auto">
            <a class="navbar-brand" href="https://www.gov.ph/" target="_blank">GOVPH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="" href="../app/transparency_seal.php">Transparency Seal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="" href="../app/materials_testing.php">Testing
                            Fee Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="" href="../app/epaymentlink.php">Epayment Portal</a>
                    </li>
                    </li><li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Assessment Calculator
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../app/assessmentCalculatorMaterial.php">Testing Fees</a></li>
                        <li><a class="dropdown-item" href="../app/assessmentCalculatorRental.php">Equipment Rental</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./nonDestructiveTest.php">Material Testing</a></li>
                            <li><a class="dropdown-item" href="./soilExploration.php">Soil Exploration</a></li>
                            <li><a class="dropdown-item" href="./calibration.php">Calibration</a></li>
                            <li><a class="dropdown-item" href="https://www.dpwh.gov.ph/dpwh/business/accreditation/Contractors%27%20and%20Consultants%27%20Project%20Engineers/ACCREDITATION%20OF%20CONTRACTORS%20AND%20CONSULTANTS%20PROJECT%20ENGINEERS?fbclid=IwAR0UwL-aJ6bEV4u0kvD6_Q4I5dXXB1PghLYDdY3SU7VEc5OBvdBznng_GSk">Accreditation</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <header id="header">
        <div class="row p-5 mx-auto"
            style="background-image: url('../img/bg.png'); background-size: cover; position: relative; min-height: 30vh;">
            <div class="col-md-2 ">
                <img src="../img/DPWH_Logo.png" class="mx-auto d-block" alt="" height="120" width="120">
            </div>
            <div class="col-md-5 text-start text-white">
                <P class="fs-5 m-0">Republic of the Philippines</P>
                <hr class="solid m-0">
                <p class="fs-3 fw-bold mb-0 pb-0">Department of Public Works and Highways</p>
                <p class="fs-6 m-0">Quality Assurance and Hydrology Division</p>
                <p class="fs-6 m-0">Regional Office XIII, Butuan City</p>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid mx-auto overflow-hidden">
            <div class="row" id="dhead" style="background-color: black !important">
                <div class="col-mx-auto offset-1">
                    <p class="fs-1 fw-bold ps-5 text-white">Assessment Calculator</p>
                </div>
            </div>
            <div class="row pb-5 p-3 justify-content-center overflow-hidden">
                <div class="col-md-5 pt-4">
                    <div class="col-md-auto">
                        <label for="validationMaterials" class="form-label">Type of Apparatus or Equipment</label>
                        <select class="form-select" id="validationRentals" onchange="selectedRental()" required>
                            <option></option>
                            <?php
                            $sql = "Select Distinct kind_of_rentals from rentals";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                ?>

                                <option value="<?php echo $row['kind_of_rentals'] ?>"><?php echo $row['kind_of_rentals'] ?>
                                </option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-auto pt-2">
                        <label class="form-label" id="noT">NO. OF DAYS</label>
                        <input type="number" class="form-control" id="noDays" onchange="selectedRental()" required>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-auto mx-auto" id="h2">
                        <h2 class="text-center">Billing Statement</h2>
                    </div>
                </div>
                <div class="col-md-5 pb-lg-2" id="tble">
                    <div class="col-md-auto pt-lg-2">
                        <table class="table table-bordered border-dark ">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 30%">KIND OF TEST</th>
                                    <th class="text-center" style="width: 30%">NO. OF DAY</th>
                                    <th class="text-center" style="width: 40%">PRICE PER DAY</th>
                                    <th class="text-center" style="width: 40%">AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody id="ans1">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row pt-5 ps-5 me-2">
                    <div class="col-md-3 offset-3 ps-5">
                        <a class="btn btn-dark mx-auto" id="printPageButton" onclick="window.print();">Print Asseement</a>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-auto mx-auto" id="h51">
                        <h3 class="text-center" id="h52">(System Generated Billing Statement)</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-white pt-3 pb-3" id="footer" style="background-color: black !important">
        <div class="container text-center text-md-left">
            <div class="row justify-content-center">
                <div class="col-md-2 col-lg-2 col-xl-2 ms-auto mt-3 mb-3">
                    <img src="../img/govph-footer.png" class="mx-auto  d-block" alt="" height="200" width="200">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 ms-auto mt-3">
                    <h6 class="mb-4" style="color: chocolate;">REPUBLIC OF THE PHILIPPINES</h6>
                    <p class="small" style="text-align: left;">All content is in the public domain unless otherwise
                        stated.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 ms-auto mt-3">
                    <h6 class="mb-4" style="color: chocolate;">ABOUT GOVPH</h6>
                    <p class="small" style="text-align: left;">Learn more about the Philippine government, its
                        structure, how
                        government works and the people behind it.</p>
                    <p class="small" style="text-align: left;">
                        <a href="https://www.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">GOV.PH</a><br>
                        <a href="https://www.gov.ph/data" class="text-white" target="_blank"
                            style="text-decoration: none;">Open Data
                            Portal</a><br>
                        <a href="https://www.officialgazette.gov.ph/" target="_blank" class="text-white"
                            style="text-decoration: none;">Official Gazette</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 ms-auto mt-3">
                    <h6 class="mb-4" style="color: chocolate;">GOVERNMENT LINKS</h6>
                    <p class="small" style="text-align: left;">
                        <a href="https://president.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">Office of
                            the President</a><br>
                        <a href="https://ovp.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">Office of the
                            Vice President</a><br>
                        <a href="http://legacy.senate.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">Senate
                            of the Philippines</a><br>
                        <a href="https://www.congress.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">House
                            of Representatives</a><br>
                        <a href="https://sc.judiciary.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">Supreme
                            Court</a><br>
                        <a href="https://ca.judiciary.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">Court
                            of Appeals</a><br>
                        <a href="https://sb.judiciary.gov.ph/" class="text-white" target="_blank"
                            style="text-decoration: none;">Sandiganbayan</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-4 col-xl-4 ms-auto mt-3">
                    <h6 class="mb-4" style="color: chocolate;">CONTACT US</h6>
                    <p class="small" style="text-align: left;">
                        <span><i class="bi bi-geo-alt"></i> Address : Department of Public Works And Highways, Jose
                            Rosales Ave, Butuan City, 8600 Agusan Del Norte</span><br>
                        <span><i class="bi bi-telephone"></i> Contact No : 0927 743 8095</span><br>
                        <span><i class="bi bi-facebook"></i> Facebook :
                            <a href="https://www.facebook.com/dpwh13" target="_blank">https://www.facebook.com/dpwh13
                            </a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>