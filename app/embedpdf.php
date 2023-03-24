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
                    <p class="fs-1 fw-bold ps-5 text-white">Materials Testing Fee</p>
                </div>
            </div>
            <div class="container p-5">
                <embed src="file/materials.pdf" type="application/pdf" width="100%" height="1000px"></embed>
            </div>
        </div>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>