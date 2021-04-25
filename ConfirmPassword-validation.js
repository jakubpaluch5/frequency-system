function ConfirmPassword_validate() {
    let icons = document.getElementsByClassName('icons');
    let SpanIcon = document.getElementsByClassName('inputSpanIcon');
    let ConfirmPassword = document.getElementById('ConfirmPassword_field');
    let password_value = document.getElementById('password_field').value;
    let ConfirmPassword_value = document.getElementById('ConfirmPassword_field').value;
    if(ConfirmPassword_value == password_value && ConfirmPassword_value != "")
    {
        ConfirmPassword.classList.remove("error");
        icons[3].classList.remove("error");
        ConfirmPassword.classList.remove("errorInputBorder");
        SpanIcon[3].classList.remove("errorSpanIcon");
        ConfirmPassword.classList.add("right");
        ConfirmPassword.classList.add("rightInputBorder");
        icons[3].classList.add("right");
        SpanIcon[3].classList.add("successSpanIcon");
        
    }
    else
    {
        ConfirmPassword.value = "";
        ConfirmPassword.placeholder='Hasła muszą się zgadzać!';
        ConfirmPassword.classList.add("error");
        icons[3].classList.add("error");
        ConfirmPassword.classList.add("errorInputBorder");
        SpanIcon[3].classList.add("errorSpanIcon");
        ConfirmPassword.classList.remove("right");
        ConfirmPassword.classList.remove("rightInputBorder");
        icons[3].classList.remove("right");
        SpanIcon[3].classList.remove("successSpanIcon");
    }
  
}
