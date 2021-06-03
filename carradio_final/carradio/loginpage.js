function validate(form){
    if(form.uname.value.length==0){
        alert("Enter username!");
        form.username.focus();
        return false;
    }

    if(form.psw.value.length==0){
        alert("Enter password");
        form.userpassword.focus();
        return false;
    }

    return true;
}