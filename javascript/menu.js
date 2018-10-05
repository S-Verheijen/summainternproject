function openNav() {
  $('#mySidenav').css({"width":"250px"});
  $('#menuIcon').hide();
}

function closeNav() {
  $('#mySidenav').css({"width":"0"});
  $('#menuIcon').fadeIn(1000);
}