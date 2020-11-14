// recupération du formulaire et création d'un événement et annulation de rechargement de la page 
document.getElementById("formu").addEventListener("submit",function (e){
    e.preventDefault();
    alert('produit enregistré !') ;
});




// var validation = document.getElementById("idEnvoi");
// var reference = document.getElementById('reference');
// var reference_manquant = document.getElementById('idReference');
// validation.addEventListener('submit',f_valid);


    
    // var verif = true ;
    // var filtre = new RegExp("^[0-9A-Za-z]+$");

    // // erreur sur la référence
    // var test =filtre.test(document.getElementById("reference").value);
    // if (!test)
    // {
    //     document.getElementById("idReference").innerHTML="Veuillez entrer une référence";
    //     verif = false ;
    // }
//    function f_valid (e)
//    {
//     if (reference.validity.valueMissing)
//     {
//         e.preventDefault();
//         reference_manquant.textContent = 'référence manquant';
//         reference_manquant.style.color = 'red';
//     }
//    }