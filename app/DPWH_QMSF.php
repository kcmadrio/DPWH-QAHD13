<?php
include "includes/header.php";

include_once "includes/connection.php";
?>
<style>
body{
    overflow-x: hidden;
}
#pre{
    margin: 0;
}
#pre2{
    margin: 0px;
    padding-top: 0px;
}
#pre1Print{
    margin: 0;
    padding: 0px 0px 0px 0px;
}
#pre2Print{
    margin: 0;
    padding: 0px 0px 0px 0px;
}   

#tfooter,#tf1,#tf2,#tf3,#tf4{
  border: none;
}
#table1,
#table2,
#table3,
#table5{    
    margin-bottom: 5px;
}
#table4{
    margin-bottom: 0px;
}
hr{
    border-top: 2px dotted black;
    margin: 0;
    padding: 0;
}
@media screen {
    table,
  td {
    border: 1px solid;
    font-size: 12px;
  }
#tfooter{
    display: none;
}
  #td2,#tf2{
    width: 50%;
  }
  #td3,#tf3 {
    width: 15%;
  }
  #td4,#tf4 {
    width: 30%;
  }
  #td5 {
    width: 30%;
  }
  #td6 {
    width: 30%;
  }
hr{
    display: none;
}
#pre2{
    display: none;
    margin: 0px;
    padding-top: 0px;
}
  #iField1 {
    width: 68%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField2 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField3 {
    width: 90%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField4 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField5 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField6 {
    width: 74%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField7 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField8 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField9 {
    width: 90%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #iField0 {
    width: 84%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField1 {
    width: 84%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField2 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField3 {
    width: 82%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField4 {
    width: 76%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField5 {
    width: 87%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField6 {
    width: 90%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField7 {
    width: 74%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField8 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField9 {
    width: 90%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField0 {
    width: 84%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF1 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF2 {
    width: 37%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF3 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF4 {
    width: 37%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF5 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF6 {
    width: 37%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF7 {
    width: 86%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF8 {
    width: 86%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF9 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF0 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field1 {
    width: 89%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field2 {
    width: 89%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field3 {
    width: 89%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field4 {
    width: 89%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field5 {
    width: 89%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field6 {
    width: 89%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input1 {
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input2 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input3 {
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input4 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input5 {
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input6 {
    width: 35%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input7 {
    width: 95%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
}
@media print {
#pre1Print{
    margin: 0;
}
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

  table,
  td {
    border: 1px solid;
    font-size: 12px;
  }

  img {
    height: 70px;
    width: 100px;
  }

  #td2 {
    width: 60%;
  }

  #td3 {
    width: 15%;
  }

  #td4 {
    width: 30%;
  }

  #td5 {
    width: 30%;
  }

  #td6 {
    width: 30%;
  }
  #iField1 {
    width: 55%;
    outline: 0;
    border: 0;
    padding: 6px 0;
    border-bottom: 0.1rem solid;
  }
  #iField2 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField3 {
    width: 86%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField4 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField5 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField6 {
    width: 64%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField7 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField8 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField9 {
    width: 87%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #iField0 {
    width: 78%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #inputField1 {
    width: 78%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #inputField2 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 0.1rem solid;
  }
  #inputField3 {
    width: 75%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField4 {
    width: 67%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField5 {
    width: 82%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField6 {
    width: 86%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField7 {
    width: 64%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField8 {
    width: 100%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField9 {
    width: 87%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputField0 {
    width: 78%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF1 {
    width: 30%;
    outline: 0;
    border: 0;
    padding: 0px 0px;
    border-bottom: 1px solid;
  }
  #inputF2 {
    width: 32%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF3 {
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF4 {
    width: 32%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF5 {
    width: 30%;
    outline: 0;
    border: 0;
    padding: 0px 0px;
    border-bottom: 1px solid;
  }
  #inputF6 {
    width: 32%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF7 {
    width: 81%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF8 {
    width: 81%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF9 {
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #inputF0 {
    width: 32%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field1 {
    width: 85%;
    outline: 0;
    border: 0;
    padding: 2px 0px;
    border-bottom: 1px solid;
  }
  #input-field2 {
    width: 85%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field3 {
    width: 85%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field4 {
    width: 85%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field5 {
    width: 85%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input-field6 {
    width: 85%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input1{
    width: 22%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input2{
    width: 30%;
    outline: 0;
    border: 0;
    padding: 2px 0px;
    border-bottom: 1px solid;
  }
  #input3{
    width: 22%;
    outline: 0;
    border: 0;
    padding: 3px 0px;
    border-bottom: 1px solid;
  }
  #input4{
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input5{
    width: 22%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input6{
    width: 30%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input7{
    width: 93%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input8{
    width: 55%;
    outline: 0;
    border: 0;
    padding: 2px 0px;
    border-bottom: 1px solid;
  }
  #input9{
    width: 55%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input0{
    width: 55%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #input01{
    width: 55%;
    outline: 0;
    border: 0;
    border-bottom: 1px solid;
  }
  #h51 {
    position: absolute;
    bottom: 0;
    left: 0;
  }

  #h52 {
    font-size: 12px;
  }

  #footer {
    display: none;
  }
}
</style>
<body>
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
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Assessment Calculator
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../app/assessmentCalculatorMaterial.php">Testing Fees</a>
                            </li>
                            <li><a class="dropdown-item" href="../app/assessmentCalculatorRental.php">Equipment
                                    Rental</a></li>
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
                            <li><a class="dropdown-item"
                                    href="https://www.dpwh.gov.ph/dpwh/business/accreditation/Contractors%27%20and%20Consultants%27%20Project%20Engineers/ACCREDITATION%20OF%20CONTRACTORS%20AND%20CONSULTANTS%20PROJECT%20ENGINEERS?fbclid=IwAR0UwL-aJ6bEV4u0kvD6_Q4I5dXXB1PghLYDdY3SU7VEc5OBvdBznng_GSk">Accreditation</a>
                            </li>
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
        <div class="row" id="dhead" style="background-color: black !important">
            <div class="col-mx-auto offset-1">
                <p class="fs-1 fw-bold ps-5 text-white">SAMPLE CARD DPWH QMSF</p>
            </div>
        </div>
        <div class="container mx-autojustify-content-center overflow-hidden">
            <div class="col-md-auto pt-3" id="rep">
                <table class="table" id="table1">
                    <tr>
                        <td class="col-md-1" id="td1">
                            <img src="../img/DPWH_Logo.png" class="mx-auto d-block" height="100" width="100" />
                        </td>
                        <td class="col-md-3 text-center" id="td2">
                            <span class="fs- ">DEPARTMENT OF PUBLIC WORKS AND HIGHWAYS</span><br>
                            <strong>REGIONAL OFFICE XIII</strong><br>
                            Construction Materials Testing<br>
                            <strong>SAMPLE CARD</strong><br>
                        </td>
                        <td class="col-md-2" id="td3">
                            Issue Date:<br>
                            Doc. Code:<br>
                            Revision No.:<br>
                            Page No.:<br>
                        </td>
                        <td class="col-md-2 text-center" id="td4">
                            February 7, 2023<br>
                            DPWH-QMSF-19/20<br>
                            1<br>
                            page 1 of 1<br>
                        </td>
                    </tr>
                </table>
                <table class="table" id="table2">
                    <tr>
                        <td colspan="2">
                            <strong>PROJECT INFORMATION:</strong><br>
                            Proposed Use:
                            <input class="offset-1" type="checkbox"><label class="ps-2">Information/Research</label>
                            <input class="offset-1" type="checkbox"><label class="ps-2">DPWH/other Government
                                Project</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-auto" id="td5">
                            <strong><u><i>For Information/Research:</i></u></strong><br>
                            Company/Requesting Entity:<input type="text" autocomplete="off" id="iField1">
                            <input type="text" autocomplete="off" id="iField2">
                            Supplier:<input type="text" autocomplete="off" id="iField3"><br>
                            <input type="text" autocomplete="off" id="iField4"><br>
                            <input type="text" autocomplete="off" id="iField5">
                            Bill Charge To/Address:<input type="text" autocomplete="off" id="iField6"><br>
                            <input type="text" autocomplete="off" id="iField7"><br>
                            <input type="text" autocomplete="off" id="iField8">
                            TIN No.:<input type="text" autocomplete="off" id="iField9"><br>
                            Contact No/s:<input type="text" autocomplete="off" id="iField0">
                        </td>
                        <td class="col-md-auto" id="td6">
                            <strong><u><i>For DPWH/other Government Project:</i></u></strong><br>
                            Project Name:<input type="text" autocomplete="off" id="inputField1">
                            <input type="text" autocomplete="off" id="inputField2">
                            Contact I.D No.:<input type="text" autocomplete="off" id="inputField3"><br>
                            Implementing Office:<input type="text" autocomplete="off" id="inputField4"><br>
                            Contractor:<input type="text" autocomplete="off" id="inputField5"><br>
                            Supplier:<input type="text" autocomplete="off" id="inputField6"><br>
                            Bill Charge To/Address:<input type="text" autocomplete="off" id="inputField7"><br>
                            <input type="text" autocomplete="off" id="inputField8">
                            TIN No.:<input type="text" autocomplete="off" id="inputField9"><br>
                            Contact No/s:<input type="text" autocomplete="off" id="inputField0">
                        </td>
                    </tr>
                </table>
                <table class="table" id="table3">
                    <tr>
                        <td >
                            <strong>SAMPLE INFORMATION:</strong><br>
                            Kind of Material&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF1">&nbsp;&nbsp;Original Source&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF2"><br>
                            Brand&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF3">&nbsp;&nbsp;Type/Grade/Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF4"><br>
                            Sample Identification&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF5">&nbsp;&nbsp;Quantity Represented&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF6"><br>
                            Sample at/Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF7"><br>
                            Manufacturer/Address&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF8"><br>
                            Manufacturing Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="inputF9">&nbsp;&nbsp;Batch Identification No&nbsp;:<input type="text" autocomplete="off" id="inputF6">
                        </td>
                    </tr>
                </table>
                <table class="table" id="table4">
                    <tr>
                        <td >
                            <strong>TEST INFORMATION:</strong><br>
                            Test Desired&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input-field1"><br>
                            Proposed Use&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input-field2"><br>
                            Governing Spc's.&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input-field3"><br>
                            Sample by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input-field4"><br>
                            <label><pre id="pre1Print">                          (DPWH Materials-In-Charge and Supplier's/Contractor's                     (Signature)<br>                                      Authorized Representative)</pre></label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" autocomplete="off" id="input-field4"><br>
                            <label><pre id="pre">                               (Designation)                       (Office)                        (Date)</pre></label><br>
                            Submitted by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input-field5"><br>
                            <label><pre id="pre2Print">                          (DPWH Materials-In-Charge and Supplier's/Contractor's                     (Signature)<br>                                      Authorized Representative)</pre></label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" autocomplete="off" id="input-field4"><br>
                            <label><pre id="pre">                                           (Designation)                                   (Office)</pre></label><br>
                            REMARKS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input-field6">
                        </td>
                    </tr>
                </table>
                <strong>NOTE: Fill out all the necessary informatio. Put N/A if not aplicable.</strong>
                <table class="table" id="table5">
                    <tr>
                        <td >
                            Checked/ Reviewed by / Date&nbsp;:<input type="text" autocomplete="off" id="input1">&nbsp;&nbsp;Date OR Presented&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input2"><br>
                            Date Submitted / Received by:<input type="text" autocomplete="off" id="input3">&nbsp;&nbsp;Approved for Testing by/ Date:<input type="text" autocomplete="off" id="input4"><br>
                            OR No. / Date / Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input5">&nbsp;&nbsp;Target Date of Release&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input6"><br>
                            Lab No.&nbsp;:<input type="text" autocomplete="off" id="input7">
                        </td>
                    </tr>
                </table>
                <pre id="pre2">                                                 NOTED:<br><br>                                                       ______________________________________<br><strong>                                                            POL M. DELOS SANTOS, CESO IV</strong><br>                                                                 Regional Director</pre>
                <hr>
                <table class="table" id="tfooter">
                    <tr>
                        <td class="col-md-1" id="tf1">
                            <img src="../img/DPWH_Logo.png" class="mx-auto d-block" height="100" width="100" />
                        </td>
                        <td class="col-md-3" id="tf2">
                            Sample and Date Submitted&nbsp;:<input type="text" autocomplete="off" id="input8"><br>
                            Lab. No. and OR No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input9"><br>
                            Target Date of Release&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input0"><br>
                            Contact No/s.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" autocomplete="off" id="input01">
                        </td>
                        <td class="col-md-2 text-center" id="tf3"><br>
                            <u>CASTER C. CASTAÑO</u><br>
                            MTS, Section-In-Charge<br>
                            DPWH - QAHD
                        </td>
                    </tr>
                </table>
            </div>
                <div class="row pb-5">
                    <div class="col-md-3 ">
                        <a class="btn btn-dark mx-auto" id="printPageButton" onclick="window.print();">Print DPWH QMSF</a>
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