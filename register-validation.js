function login_validate() {
    let icons = document.getElementsByClassName('icons');
    let SpanIcon = document.getElementsByClassName('inputSpanIcon');
    let login = document.getElementById('login_field');
    let login_value = document.getElementById('login_field').value;
    if(login_value == "")
    {

        login.placeholder='Login jest wymagany!';
        login.classList.add("error");
        icons[0].classList.add("error");
        login.classList.add("errorInputBorder");
        SpanIcon[0].classList.add("errorSpanIcon");
    }
    else
    {
        login.classList.add("right");
        login.classList.add("rightInputBorder");
        icons[0].classList.add("right");
        SpanIcon[0].classList.add("successSpanIcon");
    }
  
}
