var button = document.querySelector("#tesst")
button.addEventListener('click', function valide (e) {
    e.preventDefault();
    var id_c = document.getElementById("id_c").value;
    if (id_c == "") {
        errorid_c.innerText = 'veuillez saisir un id_c !!!!';
        errorid_c.style.color = "red";
        return false;
    }
    else if(id_c<=0)
    {
        errorid_c.innerText = 'verifier id_c !!!!';
        errorid_c.style.color = "red";
        return false;
    }
    else
    {
        errorid_c.innerText = '';
       
    }
    var nom_produit = document.getElementById("nom_produit").value;
    if (nom_produit == "") {
        errornom_produit.innerText = 'veuillez saisir un nom_produit !!!!';
        errornom_produit.style.color = "red";
        return false;
    }
    else
    {
        errornom_produit.innerText = '';
       
    }
    var prix = document.getElementById("prix").value;
    if (prix == "") {
        errorprix.innerText = 'veuillez saisir un prix !!!!';
        errorprix.style.color = "red";
        return false;
    }
    else
    {
        errorprix.innerText = '';
    }
    var stock = document.getElementById("stock").value;
    if (stock == "") {
        errorstock.innerText = 'veuillez saisir un stock !!!!';
        errorstock.style.color = "red";
        return false;
    }
    else
    {
        errorstock.innerText = '';
    }
    var imageA = document.getElementById("imageA").value;
    if (imageA == "") {
        errorimageA.innerText = 'veuillez saisir un imageA !!!!';
        errorimageA.style.color = "red";
        return false;
    }
    else
    {
        errorimageA.innerText = '';
    }
    var image2 = document.getElementById("image2").value;
    if (image2 == "") {
        errorimage2.innerText = 'veuillez saisir un image2 !!!!';
        errorimage2.style.color = "red";
        return false;
    }
    else
    {
        errorimage2.innerText = '';
    }
    var image3 = document.getElementById("image3").value;
    if (image3 == "") {
        errorimage3.innerText = 'veuillez saisir un image3 !!!!';
        errorimage3.style.color = "red";
        return false;
    }
    else
    {
        errorimage3.innerText = '';
    }
    var descriptionA = document.getElementById("descriptionA").value;
    if (descriptionA == "") {
        errordescriptionA.innerText = 'veuillez saisir un descriptionA !!!!';
        errordescriptionA.style.color = "red";
        return false;
    }
    else
    {
        errordescriptionA.innerText = '';
    }
}
)