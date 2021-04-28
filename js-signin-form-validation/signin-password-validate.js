function signin_password_validate() {
    let icons = document.getElementsByClassName('icons');
    let SpanIcon = document.getElementsByClassName('inputSpanIcon');
    let password = document.getElementById('password_field');
    let password_value = document.getElementById('password_field').value;
    if(password_value == "")
    {
        password.placeholder='Wpisz hasło!';
        password.classList.add("error");
        icons[1].classList.add("error");
        password.classList.add("errorInputBorder");
        SpanIcon[1].classList.add("errorSpanIcon");
        password.classList.remove("right");
        password.classList.remove("rightInputBorder");
        icons[1].classList.remove("right");
        SpanIcon[1].classList.remove("successSpanIcon");
        return false;
        
    }
    else
    {
        password.classList.remove("error");
        icons[1].classList.remove("error");
        password.classList.remove("errorInputBorder");
        SpanIcon[1].classList.remove("errorSpanIcon");
        password.classList.add("right");
        password.classList.add("rightInputBorder");
        icons[1].classList.add("right");
        SpanIcon[1].classList.add("successSpanIcon");
        return true;
    }
  
}
