const passwordformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
function password_validate() {
    let icons = document.getElementsByClassName('icons');
    let SpanIcon = document.getElementsByClassName('inputSpanIcon');
    let password = document.getElementById('password_field');
    let password_value = document.getElementById('password_field').value;
    if (password_value.match(/[a-z]/g) && password_value.match(
        /[A-Z]/g) && password_value.match(
        /[0-9]/g) && password_value.match(
        /[^a-zA-Z\d]/g) && password_value.length >= 8)
    {
        password.classList.remove("error");
        icons[2].classList.remove("error");
        password.classList.remove("errorInputBorder");
        SpanIcon[2].classList.remove("errorSpanIcon");
        password.classList.add("right");
        password.classList.add("rightInputBorder");
        icons[2].classList.add("right");
        SpanIcon[2].classList.add("successSpanIcon");
        return true;
    }
    else if(password_value == "")
    {
        password.placeholder='Hasło nie może być puste!';
        password.classList.add("error");
        icons[2].classList.add("error");
        password.classList.add("errorInputBorder");
        SpanIcon[2].classList.add("errorSpanIcon");
        password.classList.remove("right");
        password.classList.remove("rightInputBorder");
        icons[2].classList.remove("right");
        SpanIcon[2].classList.remove("successSpanIcon");
        return false;
    }
    else
    {
        password.value = "";
         password.placeholder='Hasło musi spełniać wymogi!';
        password.classList.add("error");
        icons[2].classList.add("error");
        password.classList.add("errorInputBorder");
        SpanIcon[2].classList.add("errorSpanIcon");
        password.classList.remove("right");
        password.classList.remove("rightInputBorder");
        icons[2].classList.remove("right");
        SpanIcon[2].classList.remove("successSpanIcon");
        return false;
    }
  
}
