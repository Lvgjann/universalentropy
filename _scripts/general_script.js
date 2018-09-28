// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the header
const header = document.getElementById("menu");

// Get the offset position of the navbar
const sticky = header.offsetTop;

// Add the general_script class to the header when you reach its scroll position. Remove "general_script" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

function openSheet(evt, contentName) {
    let i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(contentName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openPoem(evt, contentName) {
    let i, poemContent, poemlinks;
    poemContent = document.getElementsByClassName("poem_content");
    for (i = 0; i < poemContent.length; i++) {
        poemContent[i].style.display = "none";
    }
    poemlinks = document.getElementsByClassName("poemlinks");
    for (i = 0; i < poemlinks.length; i++) {
        poemlinks[i].className = poemlinks[i].className.replace(" active", "");
    }
    document.getElementById(contentName).style.display = "block";
    evt.currentTarget.className += " active";
}

function showCollection() {
    const col = document.getElementById("collections");
    if (col.style.display === "none") {
        col.style.display  = "block";
    } else {
        col.style.display = "none";
    }
}