function openPage(pageName, elmnt, color) {
// Hide all elements with class="tabcontent" by default */
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}

// Remove the background color of all tablinks/buttons
tablinks = document.getElementsByClassName("tablink");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].style.color = "";
tablinks[i].style.borderBottomStyle = "";
tablinks[i].style.borderColor = "";
}

// Show the specific tab content
document.getElementById(pageName).style.display = "block";

// Add the specific color to the button used to open the tab content
elmnt.style.color = "#2c2c2c";
elmnt.style.borderBottomStyle = "solid";
elmnt.style.borderColor = "#0e4166";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
