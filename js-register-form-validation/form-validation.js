function validate()
{
const form = document.getElementById('form');
if(login_validate() == true && email_validate() == true && password_validate() == true && ConfirmPassword_validate() == true)
{
    return true;
}
else
{
    return false;
}
}
