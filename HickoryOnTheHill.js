function toggleIcon(){
  //Get the nav bar
  var navBar = document.getElementById("navBar");
  
  //If the class is ONLY "topnav", then add in the "responsive" class
  if(navBar.className === "topnav"){
    navBar.className += " responsive";
  }
  //If not (and hence it probably already has "responsive"), then make it ONLY "topNav" (remove the "responsive")
  else{
    navBar.className = "topnav";
  }
}