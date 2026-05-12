function Details(id) {
    window.location.replace("<?php echo URL ?>Cantiere/showDetails/" + id);
}

// Later
function SwitchImage(id) {
    let worksite = document.getElementById(id);
    worksite.src = "";
}