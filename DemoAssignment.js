var index =0;
slideshow();
function slideshow(){
    var a = document.getElementsByClassName("mySlides");
    for (var i=0; i<a.length; i++){
        a[i].style.display="none";
    }
    index++
    if(index>a.length){
        index=1;
    }
    a[index-1].style.display ="block";
    setTimeout(slideshow,3000);
}