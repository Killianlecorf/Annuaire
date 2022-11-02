function displayBlockForm(){
    document.getElementById("form").style.display = "block";
    document.getElementById("fond-form").style.display = "block" ;
}

function displayNoneForm() {
    document.getElementById("form").style.display = "none" ;
    document.getElementById("fond-form").style.display = "none" ;
}

function displayBlockFormUpdate(user_id){
    console.log('2')
    const form = document.getElementById("formUpdate");
    const input = document.getElementById("user_ID_input");
    input.value = user_id ; 
    console.log(input);

    form.style.display = "block";
    document.getElementById("fond-formUpdate").style.display = "block" ;
}

function displayNoneFormUpdate() {
    document.getElementById("formUpdate").style.display = "none" ;
    document.getElementById("fond-formUpdate").style.display = "none" ;
}

