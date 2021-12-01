    window.onload = (registerForm) => {
    validateInput(document.getElementById("name"), function (value = null){
        if (value == null || value.length == 0) {
            return "Meno musí byť zadané!";
        }
        if (value.length > 100) {
            return "Meno musí mať menej ako 100 znakov!";
        }

        var hasNumber = /\d/;
        if (hasNumber.test(value))
        {
            return "Meno nesmie obsahovať čísla!";
        }
    });

    validateInput(document.getElementById("surname"), function (value = null){
    if (value == null || value.length == 0) {
    return "Priezvisko musí byť zadané!";
}
    if (value.length > 100) {
    return "Priezvisko musí mať menej ako 100 znakov!";
}
    var hasNumber = /\d/;
    if (hasNumber.test(value))
{
    return "Priezvisko nesmie obsahovať čísla!";
}
});

    validateInput(document.getElementById("email"), function (value = null){
    if (value == null || value.length == 0) {
    return "E-mailová adresa musí byť zadaná!";
}
    if (value.length > 50) {
    return "E-mailová adresa musí mať menej ako 50 znakov!";
}
    let re = new RegExp('^\\S+@\\S+\\.\\S+$');
    if (!re.test(value)) {
    return "Zadaný email nemá platný formát."
}
});

    validateInput(document.getElementById("birthyear"), function (value = null){
    if (value == null || value.length == 0) {
    return "Rok narodenia musí byť zadaný!";
}
    if(value >= 2008) {
    return "Pre registráciu musíte mať viac ako 13 rokov."
}

});

    validateInput(document.getElementById("password"), function (value = null){
    if (value == null || value.length == 0) {
    return "Heslo musí byť zadané";
}
    if (value.length < 8 || value.length > 30) {
    return "Heslo musí mať od 8 do 30 znakov!";
}
    var hasNumber = /\d/;
    if (!hasNumber.test(value) || !isUpper(value))
{
    return "Heslo musí obsahovať aspoň jedno veľké písmeno a číslo";
}
});

}
