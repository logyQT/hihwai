var state=0;
function colorchanger2000(){
    if(state==0){
        var str = document.querySelector(".Essa");
        str.style.color="RGB(245, 66, 170)";
        console.log(str);
        state=1;
    }
    else if(state==1){
        var str = document.querySelector(".Essa");
        str.style.color="black";
        console.log(str);
        state=0;
    }
}
