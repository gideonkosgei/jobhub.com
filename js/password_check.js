function check()
{
if(document.register.register_password.value!=document.register.confirm_password.value){
alert("password mismatch);
return(false);
}
else{
return true;
}
}