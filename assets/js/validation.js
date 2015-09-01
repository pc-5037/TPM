function validateAttraction() {
    var name = document.forms["myForm"]["dname"].value;
    var des = document.forms["myForm"]["desc"].value;
    var height = document.forms["myForm"]["hlimit"].value;
    if (name.length<5 || name.length>30) {
        alert("Name must be 5-30 characters in length");
        return false;
    }if(des.length<5 || des.length> 60) {
        alert("Description must be 5-60 characters in length");
        return false;
    }if (height.length<3){
        alert("Height limit must not be more than 3 digits");
        return false;
    }
    return true;
}


function validateGuest() {
    var name = document.forms["myForm"]["gname"].value;
    var tel = document.forms["myForm"]["gtel"].value;
    if (name.length<5 || name.length>30) {
        alert("Name must be 5-30 characters in length");
        return false;
    }if (tel.length<10){
        alert("Mobile number must be 10 digits");
        return false;
    }
    return true;
}



