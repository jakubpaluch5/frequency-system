function signin_login_validate() {
    let icons = document.getElementsByClassName('icons');
    let SpanIcon = document.getElementsByClassName('inputSpanIcon');
    let login = document.getElementById('login_field');
    let login_value = document.getElementById('login_field').value;
    if(login_value == "")
    {
        login.placeholder='Wpisz login!';
        login.classList.add("error");
        icons[0].classList.add("error");
        login.classList.add("errorInputBorder");
        SpanIcon[0].classList.add("errorSpanIcon");
        login.classList.remove("right");
        login.classList.remove("rightInputBorder");
        icons[0].classList.remove("right");
        SpanIcon[0].classList.remove("successSpanIcon");
        return false;
        
    }
    else
    {
        login.classList.remove("error");
        icons[0].classList.remove("error");
        login.classList.remove("errorInputBorder");
        SpanIcon[0].classList.remove("errorSpanIcon");
        login.classList.add("right");
        login.classList.add("rightInputBorder");
        icons[0].classList.add("right");
        SpanIcon[0].classList.add("successSpanIcon");
        return true;
    }
  
}
