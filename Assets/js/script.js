function displayBlockForm(){
    document.getElementById("form").style.display = "block";
    document.getElementById("fond-form").style.display = "block" ;
}

function displayNoneForm() {
    document.getElementById("form").style.display = "none" ;
    document.getElementById("fond-form").style.display = "none" ;
}

// $('#submit-button').on('click', function() {
//     if ($('#form-add').checkValidity() == false) {
//         $('#prompt').removeClass().addClass('error').html('your error message');
//     }
// });

// $('#submit-button').on('click', function() {
//     if ($('#form-add').checkValidity() == false) {
//        //show errors in the error DIV
//        $("#errors").empty();
//        $("#errors").text("error message");
//     }
//    });