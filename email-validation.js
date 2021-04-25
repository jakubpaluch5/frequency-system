const emailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
function email_validate() {
    let icons = document.getElementsByClassName('icons');
    let SpanIcon = document.getElementsByClassName('inputSpanIcon');
    let email = document.getElementById('email_field');
    let email_value = document.getElementById('email_field').value;
    if(email_value.match(emailformat))
    {

       
        email.classList.remove("error");
        icons[1].classList.remove("error");
        email.classList.remove("errorInputBorder");
        SpanIcon[1].classList.remove("errorSpanIcon");
        email.classList.add("right");
        email.classList.add("rightInputBorder");
        icons[1].classList.add("right");
        SpanIcon[1].classList.add("successSpanIcon");
        
    }
    else if(email_value == "")
    {
        email.placeholder='Adres e-mail nie może być pusty!';
        email.classList.add("error");
        icons[1].classList.add("error");
        email.classList.add("errorInputBorder");
        SpanIcon[1].classList.add("errorSpanIcon");
        email.classList.remove("right");
        email.classList.remove("rightInputBorder");
        icons[1].classList.remove("right");
        SpanIcon[1].classList.remove("successSpanIcon");

    }
    else
    {
        
        email.value = "";
        email.placeholder='Wpisz poprawny adres e-mail!';
        email.classList.add("error");
        icons[1].classList.add("error");
        email.classList.add("errorInputBorder");
        SpanIcon[1].classList.add("errorSpanIcon");
        email.classList.remove("right");
        email.classList.remove("rightInputBorder");
        icons[1].classList.remove("right");
        SpanIcon[1].classList.remove("successSpanIcon");

        
    }
  
}
