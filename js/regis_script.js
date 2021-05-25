var modal = document.getElementById('regis');
window.onclick = function(event) 
{
  if (event.target == modal)
   {
    modal.style.display = "none";
    }
}

function check()
{
    var pass = document.getElementById("pw");
    var confirm = document.getElementById("pw2");

  if(pass.value != confirm.value)
  {
     alert("Password do not match. Please Fill Again");
  }
}