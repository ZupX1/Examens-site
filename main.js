let verif;




function checkError(element, id)
{
    var u = document.getElementById("none").value;

    if (element.value == '') {
        document.getElementById(id).classList.remove("hide");
        verif.preventDefault();
    }
    
    
    else{
        document.getElementById(id).classList.add("hide");
    }
}


document.querySelector("form").addEventListener("submit", (everif) =>
{
    verif = everif;

    checkError(prenom, "name");
    checkError(nom, "lname")
    checkError (sujet,"subject")
    checkError(mail,"imail")
    
});