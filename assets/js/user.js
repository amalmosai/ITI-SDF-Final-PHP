
    // Change The Content When You click on nav items //

// array of classes that We Will Change Between
var navContent =document.getElementsByClassName("user-products");

// Function to change Html between array items (Classes)
function changeNav(index){
    for (let i = 0; i < navContent.length; i++) {
        navContent[i].classList.remove("active");
    }
    navContent[index].classList.add("active")
}
// ----(-_-)----(-_-)----(-_-)----(-_-)----(-_-)----(-_-)

