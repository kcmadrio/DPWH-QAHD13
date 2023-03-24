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
        <div class="container-fluid mx-auto justify-content-center overflow-hidden">
            <div class="row" style="background-color: black !important">
                <div class="col-mx-auto offset-1">
                    <p class="fs-1 fw-bold ps-5 text-white">Material Testing</p>
                </div>
            </div>
            <div class="mx-auto pt-5 pb-5" id="viewer" style="width: 80%; height: 800px;"></div>
            <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
            <script>
                const config = {
                    documentId: 'aab2c9cd-dde0-40f0-96c1-7c7f1ab2c68b',
                    appBarColored: true,
                    themeColor: '#ffa219',
                    darkMode: true,
                };
                CloudPDF(config, document.getElementById('viewer')).then((instance) => {

                });
            </script>
        </div>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>