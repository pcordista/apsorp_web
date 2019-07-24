$(document).ready(function () {
    // Materialize Iniciate
    $('.tabs').tabs();
    $('.collapsible').collapsible();
    $('select').material_select();
    $('.modal').modal();
    $('.parallax').parallax();
    $('.materialboxed').materialbox();


    $('.caret').html('<i class="material-icons">keyboard_arrow_down</i>');
    

});

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }

  function closeNav() { 
    document.getElementById("mySidenav").style.width = "0";
  }
