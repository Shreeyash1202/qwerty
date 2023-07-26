function closealert(){
    document.getElementById('alert').style.padding='0px';
    document.getElementById('alert').innerHTML="";
}

// FOR ANIMATION
const observer=new IntersectionObserver((entries)=>{
    entries.forEach((entry)=>{
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        }else{
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements =document.querySelectorAll('.hidden');
hiddenElements.forEach((el)=>observer.observe(el));

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
    event.currentTarget.classList.add('active-link');
    document.getElementById(linkID).classList.add('active');
}