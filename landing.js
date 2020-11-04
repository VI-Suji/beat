function pgLoaded() {
  window.setTimeout(function () {
    window.location.href = "login.php";
  }, 5000);
}

function logo_hovered() {
  document.getElementById("logoo").style.filter = "blur(1px)";
}

function logo_hovered_out() {
  document.getElementById("logoo").style.filter = "";
}
