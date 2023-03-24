<?php
include "includes/header.php";
?>

<body>
    <?php
    include "includes/navbar.php";
    ?>
    <?php
    include "includes/head.php";
    ?>
    <main>
        <div class="container-fluid mx-auto overflow-hidden">
            <div class="row" style="background-color: black !important">
                <div class="col-mx-auto offset-1">
                    <p class="fs-1 fw-bold ps-5 text-white">Materials Testing Fee Schedule</p>
                </div>
            </div>
            <div class="col-md-9 p-5 mx-auto justify-content-center overflow-hidden">
                <p>Materials Testing Fee Schedule: Open a PDF file  <a
                        href="embedpdf.php">Click</a>.
                </p>
                <p style="text-align: center;">SCHEDULE OF MINIMUM TEST REQUIREMENTS GOVERNING ITEMS OF WORK OF THE DPWH STANDARD SPECIFICATIONS FOR HIGHWAYS, BRIDGES AND AIRPORT, 1998, (VOLUME II)
                    AND SCHEDULE OF MATERIAL TESTING FEE
                </p>
                <table class="table-sm table-bordered border-dark text-center">
                    <tbody>
                        <tr class="bg-secondary text-white">
                            <td class="fw-bold" rowspan="2">Materials</td>
                            <td class="fw-bold" rowspan="2">Kind of Test</td>
                            <td class="fw-bold" rowspan="2">AASHITO</td>
                            <td class="fw-bold" colspan="2">FREQUENCY</td>
                            <td class="fw-bold" colspan="2">Scheduleof Pays and Charges</td>
                        </tr>
                        <tr class="bg-secondary text-white">
                            <td class="fw-bold">MINIMUM TESTING REQUIREMENTS</td>
                            <td class="fw-bold">MINIMUM QUANTITY</td>
                            <td class="fw-bold">Old Rate</td>
                            <td class="fw-bold">New Rate</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" rowspan="14">Soil Aggregates, Concrete Aggregates and Asphalt Aggregates
                            </td>
                            <td>Sieve Analysis or Grading (wet and dry)</td>
                            <td>T27</td>
                            <td rowspan="13">1 sample per 1,500 m³</td>
                            <td rowspan="13">70 kg</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Liquid Limit</td>
                            <td>T89</td>
                            <td>240.00</td>
                            <td>290.00</td>
                        </tr>
                        <tr>
                            <td>Plastic Limit</td>
                            <td>T90</td>
                            <td>170.00</td>
                            <td>210.00</td>
                        </tr>
                        <tr>
                            <td>Laboratory Compaction</td>
                            <td>T180</td>
                            <td>930.00</td>
                            <td>1,120.00</td>
                        </tr>
                        <tr>
                            <td>Abrasion</td>
                            <td>T96</td>
                            <td>600.00</td>
                            <td>720.00</td>
                        </tr>
                        <tr>
                            <td>Moisture Content</td>
                            <td>T255</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Specific Gravity/Absorption</td>
                            <td>T84/T85</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Mortar Strength</td>
                            <td>T106</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Unit Weight</td>
                            <td>T19</td>
                            <td>210.00</td>
                            <td>260.00</td>
                        </tr>
                        <tr>
                            <td>Soundness</td>
                            <td>T104-99</td>
                            <td>500.00</td>
                            <td>600.00</td>
                        </tr>
                        <tr>
                            <td>Organic Impurities</td>
                            <td>T21</td>
                            <td>350.00</td>
                            <td>420.00</td>
                        </tr>
                        <tr>
                            <td>Clay Lumps</td>
                            <td>T112</td>
                            <td>150.00</td>
                            <td>180.00</td>
                        </tr>
                        <tr>
                            <td>Material Finer than No. 200</td>
                            <td>T11-91</td>
                            <td>240.00</td>
                            <td>290.00</td>
                        </tr>
                        <tr>
                            <td>California Bearing Ratio</td>
                            <td>T193</td>
                            <td>1 sample per 2,500 m³</td>
                            <td>5 kg</td>
                            <td>1,670.00</td>
                            <td>2,010.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" rowspan="14">Concrete and Cement Products</td>
                            <td>Flexural Strength</td>
                            <td>T97-18</td>
                            <td>1 sample per 75 m³</td>
                            <td>1 set (3 cylinder)</td>
                            <td>170.00</td>
                            <td>210.00</td>
                        </tr>
                        <tr>
                            <td>Compressive Strength</td>
                            <td>T22</td>
                            <td>1 sample per 75 m³</td>
                            <td>1 set (3 cylinder)</td>
                            <td>150.00</td>
                            <td>180.00</td>
                        </tr>
                        <tr>
                            <td>Thickness</td>
                            <td></td>
                            <td>5 holes per kilometer</td>
                            <td>1 lot</td>
                            <td>200.00</td>
                            <td>240.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Reinforce Concrete Pipe</td>
                        </tr>
                        <tr>
                            <td>External Load Crushing Strength, 24" and under ø</td>
                            <td>T334-08</td>
                            <td rowspan="7">1 sample per 50 pipes or 2% of # of pipes</td>
                            <td rowspan="7">1 pipe (1m length)</td>
                            <td>750.00</td>
                            <td>900.00</td>
                        </tr>
                        <tr>
                            <td>24" - 30" ø</td>
                            <td>T334-09</td>
                            <td>950.00</td>
                            <td>1,140.00</td>
                        </tr>
                        <tr>
                            <td>30" - 42" ø</td>
                            <td>T334-10</td>
                            <td>1,250.00</td>
                            <td>1,500.00</td>
                        </tr>
                        <tr>
                            <td>42" - 60" ø</td>
                            <td>T334-11</td>
                            <td>2,050.00</td>
                            <td>2,460.00</td>
                        </tr>
                        <tr>
                            <td>Reinforcement Measurement</td>
                            <td>T334-12</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Dimension Measurement</td>
                            <td>T334-13</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Water Absorption</td>
                            <td>T334-15</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Concrete Hollow Block</td>
                        </tr>
                        <tr>
                            <td>Compressive Strength</td>
                            <td>T140-97</td>
                            <td rowspan="2">1 sample per 10,000 units</td>
                            <td rowspan="2">3 units</td>
                            <td>170.00</td>
                            <td>210.00</td>
                        </tr>
                        <tr>
                            <td>Water Absorption and Moisture Content</td>
                            <td>T140-97</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" rowspan="11">Portland Cement</td>
                            <td>Magnesium Oxide</td>
                            <td>T105-16</td>
                            <td rowspan="11">1 sample per 2,000 bags</td>
                            <td rowspan="11">10 kg</td>
                            <td>230.00</td>
                            <td>280.00</td>
                        </tr>
                        <tr>
                            <td>Sulfur Trioxide</td>
                            <td>T105-16</td>
                            <td>230.00</td>
                            <td>280.00</td>
                        </tr>
                        <tr>
                            <td>Loss on Ignition</td>
                            <td>T105-16</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td>Fineness</td>
                            <td>T128-97</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Autoclave Expansion</td>
                            <td>T107</td>
                            <td>410.00</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td>Air Content</td>
                            <td>T137-00</td>
                            <td>200.00</td>
                            <td>240.00</td>
                        </tr>
                        <tr>
                            <td>Time Setting</td>
                            <td>T131-93</td>
                            <td>120.00</td>
                            <td>150.00</td>
                        </tr>
                        <tr>
                            <td>Compressive Strength</td>
                            <td>T106</td>
                            <td>600.00</td>
                            <td>720.00</td>
                        </tr>
                        <tr>
                            <td>Specific Gravity</td>
                            <td>T133-98</td>
                            <td>200.00</td>
                            <td>240.00</td>
                        </tr>
                        <tr>
                            <td>Normal Consistency</td>
                            <td>T129-88</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Insoluble Residue</td>
                            <td>T105-16</td>
                            <td>230.00</td>
                            <td>280.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" rowspan="21">Miscellaneous Construction Materials</td>
                            <td class="fw-bold" colspan="6">Reinforcing Steel Bars (Deformed and Plain)</td>
                        </tr>
                        <tr>
                            <td>Tensile Properties</td>
                            <td>M31 M-19</td>
                            <td rowspan="5">1 sample per 10T</td>
                            <td rowspan="5">1 meter</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Bending Properties</td>
                            <td>M31 M-19</td>
                            <td>150.00</td>
                            <td>180.00</td>
                        </tr>
                        <tr>
                            <td>Deformation Measurement</td>
                            <td>M31 M-20</td>
                            <td>150.00</td>
                            <td>180.00</td>
                        </tr>
                        <tr>
                            <td>Variation in Weight</td>
                            <td>M31 M-21</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Chemical Analysis: Phosporous Content</td>
                            <td>M31 M-22</td>
                            <td>410.00</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Structural Steel & Guardrail</td>
                        </tr>
                        <tr>
                            <td>Tensile Properties</td>
                            <td>T65 M/T</td>
                            <td rowspan="2">1 sample per 50T</td>
                            <td rowspan="2">Reduced section as prescribed</td>
                            <td>240.00</td>
                            <td>290.00</td>
                        </tr>
                        <tr>
                            <td>Zinc Coating</td>
                            <td>T65 M/T</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Reflectorized Traffic Paint</td>
                        </tr>
                        <tr>
                            <td>Type I (White)</td>
                            <td>M249-12</td>
                            <td rowspan="4">1 sample per 100 cans</td>
                            <td rowspan="4">1-4 Liters can</td>
                            <td>4,020.00</td>
                            <td>4,830.00</td>
                        </tr>
                        <tr>
                            <td>Type I (Yellow)</td>
                            <td>M249-13</td>
                            <td>4,440.00</td>
                            <td>5,330.00</td>
                        </tr>
                        <tr>
                            <td>Type II (White)</td>
                            <td>M249-14</td>
                            <td>3,230.00</td>
                            <td>3,880.00</td>
                        </tr>
                        <tr>
                            <td>Type II (Yellow)</td>
                            <td>M249-15</td>
                            <td>3,620.00</td>
                            <td>4,350.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Thermoplastic Paint</td>
                        </tr>
                        <tr>
                            <td>Specific Gravity</td>
                            <td>M249-15</td>
                            <td rowspan="6">1 sample per 100 cans</td>
                            <td rowspan="6">1-4 Liters can</td>
                            <td>340.00</td>
                            <td>410.00</td>
                        </tr>
                        <tr>
                            <td>Softening Point</td>
                            <td>M249-16</td>
                            <td>420.00</td>
                            <td>510.00</td>
                        </tr>
                        <tr>
                            <td>Drying Time</td>
                            <td>M249-17</td>
                            <td>130.00</td>
                            <td>160.00</td>
                        </tr>
                        <tr>
                            <td>Vehicle Binder</td>
                            <td>M249-18</td>
                            <td>1,940.00</td>
                            <td>2,330.00</td>
                        </tr>
                        <tr>
                            <td>Glass Beads Content</td>
                            <td>M249-13</td>
                            <td>670.00</td>
                            <td>810.00</td>
                        </tr>
                        <tr>
                            <td>Glass Beads Grading</td>
                            <td>M249-13</td>
                            <td>150.00</td>
                            <td>180.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" rowspan="42">Asphalt Materials and Asphalt Mixes</td>
                            <td class="fw-bold" colspan="6">Asphalt Cement</td>
                        </tr>
                        <tr>
                            <td>Specific Gravity</td>
                            <td>M226</td>
                            <td rowspan="7">1 sample per 40T or 200 drums</td>
                            <td rowspan="7">5 Liters</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Loss on Heating</td>
                            <td>M227</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td>Solubility</td>
                            <td>M228</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Spot Test</td>
                            <td>M229</td>
                            <td>300.00</td>
                            <td>360.00</td>
                        </tr>
                        <tr>
                            <td>Flashpoint</td>
                            <td>M230</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td>Penetration</td>
                            <td>M231</td>
                            <td>400.00</td>
                            <td>480.00</td>
                        </tr>
                        <tr>
                            <td>Ductility</td>
                            <td>M232</td>
                            <td>820.00</td>
                            <td>990.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Emulsified Asphalt</td>
                        </tr>
                        <tr>
                            <td>Viscosity</td>
                            <td>T202-15</td>
                            <td rowspan="9">1 sample per 40T or 200 drums</td>
                            <td rowspan="9">5 Liters</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Distillation</td>
                            <td>T78-15</td>
                            <td>550.00</td>
                            <td>660.00</td>
                        </tr>
                        <tr>
                            <td>Cement Mix</td>
                            <td>M208</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td>Sieve Test</td>
                            <td>R29-15</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td>Specific Gravity</td>
                            <td>T166-16</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Storage Stability</td>
                            <td>R35-17</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td>Solubility</td>
                            <td>T44-14</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Ductility</td>
                            <td>T301-13</td>
                            <td>410.00</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td>Penetration</td>
                            <td>T49-15</td>
                            <td>200.00</td>
                            <td>240.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Cutback Asphalt</td>
                        </tr>
                        <tr>
                            <td>Specific Gravity</td>
                            <td>T166-16</td>
                            <td rowspan="8">1 sample per 40T or 200 drums</td>
                            <td rowspan="8">5 Liters</td>
                            <td>140.00</td>
                            <td>170.00</td>
                        </tr>
                        <tr>
                            <td>Distillation</td>
                            <td>T78-15</td>
                            <td>660.00</td>
                            <td>800.00</td>
                        </tr>
                        <tr>
                            <td>Viscosity</td>
                            <td>T201-15</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Spot Test</td>
                            <td>T102-09</td>
                            <td>300.00</td>
                            <td>360.00</td>
                        </tr>
                        <tr>
                            <td>Penetration</td>
                            <td>T49-15</td>
                            <td>200.00</td>
                            <td>240.00</td>
                        </tr>
                        <tr>
                            <td>Ductility</td>
                            <td>T301-13</td>
                            <td>410.00</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td>Solubility</td>
                            <td>T44-14</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Flashpoint</td>
                            <td>T48-18</td>
                            <td>220.00</td>
                            <td>270.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Joint Filler</td>
                        </tr>
                        <tr>
                            <td>Penetration</td>
                            <td>T49-15</td>
                            <td rowspan="4">1 sample per 40T or 200 drums</td>
                            <td rowspan="4">1 Liter</td>
                            <td>210.00</td>
                            <td>260.00</td>
                        </tr>
                        <tr>
                            <td>Flow</td>
                            <td>T49-15</td>
                            <td>410.00</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td>Pour Point</td>
                            <td>T49-15</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Safe Heating</td>
                            <td>T49-15</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Preformed Joint Filler</td>
                        </tr>
                        <tr>
                            <td>Absorption</td>
                            <td>T49-15</td>
                            <td rowspan="4">1 sample per 40T or 200 drums</td>
                            <td rowspan="4">1 Liter</td>
                            <td>420.00</td>
                            <td>510.00</td>
                        </tr>
                        <tr>
                            <td>Compression and Recovery</td>
                            <td>R59-11</td>
                            <td>410.00</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td>Thickness</td>
                            <td>R59-11</td>
                            <td>170.00</td>
                            <td>210.00</td>
                        </tr>
                        <tr>
                            <td>Density</td>
                            <td>T166-16</td>
                            <td>210.00</td>
                            <td>260.00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold" colspan="6">Bituminous Mix</td>
                        </tr>
                        <tr>
                            <td>Extraction</td>
                            <td>T319-15</td>
                            <td rowspan="4">1 sample per 130T</td>
                            <td rowspan="4">20 kg</td>
                            <td>390.00</td>
                            <td>470.00</td>
                        </tr>
                        <tr>
                            <td>Grading</td>
                            <td>R29-15</td>
                            <td>290.00</td>
                            <td>350.00</td>
                        </tr>
                        <tr>
                            <td>Marshall Stability/Immersion Compression</td>
                            <td>R68-15</td>
                            <td>390.00</td>
                            <td>470.00</td>
                        </tr>
                        <tr>
                            <td>Density and Voids of Compacted Mixtures</td>
                            <td>R67-16</td>
                            <td>210.00</td>
                            <td>260.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>