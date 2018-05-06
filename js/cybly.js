//Confirm logout action
function confirmBeforeLogout() {
  if (confirm("Are you sure? Press 'Ok' to log out")) {
      Logout();
  } else {
  }
}

//Perform logout action by navigating to file
function Logout(){
  window.location.href = "logout.php";
}
  
  