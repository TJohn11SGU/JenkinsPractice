/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show2");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
    var dropdowns2 = document.getElementsByClassName("dropdown-2");
    var i;
    for (i = 0; i < dropdowns2.length; i++) {
      var openDropdown2 = dropdowns2[i];
      if (openDropdown2.classList.contains('show2')) {
        openDropdown2.classList.remove('show2');
      }
    }
  }
} 