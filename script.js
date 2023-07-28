
const hiddenElements =document.querySelectorAll('.hidden');

// ABOUT LINK

var aboutLink =document.getElementsByClassName('alinks');
var linkContent =document.getElementsByClassName('link-content');

function openlink(linkID){
    for(alink of aboutLink){
        alink.classList.remove('active-link');
    }
    for(linkc of linkContent){
        linkc.classList.remove('active');
    }
    // event.currentTarget.classList.add('active-link');
    document.getElementById(linkID).classList.add('active');
}