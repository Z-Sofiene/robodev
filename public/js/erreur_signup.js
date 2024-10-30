const e = new URLSearchParams(window.location.search).get('signup_result');
const err1 = "Votre nom est déjà dans la liste";
if (e == 1) {
    document.getElementById('err1').innerHTML = "<div style='text-align:center' class='alert alert-danger'><b>" + err1 + "</b></div>";
}