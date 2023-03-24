function selectedMaterial() {
  var x = document.getElementById("validationMaterials").value;
  var y = document.getElementById("noTest").value;

  $.ajax({
    url: "./includes/showTest.php",
    method: "POST",
    data: {
      id1: x,
      id2: y,
    },
    success: function (data) {
      $("#ans").html(data);
    },
  });
}

function selectedRental() {
  var x = document.getElementById("validationRentals").value;
  var y = document.getElementById("noDays").value;

  $.ajax({
    url: "./includes/showRentals.php",
    method: "POST",
    data: {
      id3: x,
      id4: y,
    },
    success: function (data) {
      $("#ans1").html(data);
    },
  });
}