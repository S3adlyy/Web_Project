document.getElementById("form").addEventListener("submit", function(e){
    e.preventDefault();  // Empêche l'envoi du formulaire

    let title = document.getElementById("title").value;
    let des = document.getElementById("des").value;
    let date_de_depart = document.getElementById("date").value;
    let date_de_retour = document.getElementById("re").value;
    let prix = document.getElementById("price").value;
    let valid = true; 

    let result1 = document.getElementById("er1");
    if (title.length < 3) {
        result1.style.color = "red";
        result1.innerHTML = "The title must contain at least 3 characters";
        valid = false;
    } else {
        result1.style.color = "green";
        result1.innerHTML = "Correct";
    }

    let result2 = document.getElementById("er2");
    let pattern = /^[A-Za-z\s]{3,}$/;
    if (!pattern.test(des)) {
        result2.style.color = "red";
        result2.innerHTML = "The destination must contain only letters and at least 3 characters";
        valid = false;
    } else {
        result2.style.color = "green";
        result2.innerHTML = "Correct";
    }

    let result3 = document.getElementById("er3");
    let result4 = document.getElementById("er4");
    let departureDate = new Date(date_de_depart);
    let returnDate = new Date(date_de_retour);

    if (isNaN(departureDate.getTime())) {
        result3.style.color = "red";
        result3.innerHTML = "Please select a valid departure date";
        valid = false;
    } else {
        result3.style.color = "green";
        result3.innerHTML = "Correct";
    }

    if (isNaN(returnDate.getTime()) || returnDate <= departureDate) {
        result4.style.color = "red";
        result4.innerHTML = "Return date must be valid and after the departure date";
        valid = false;
    } else {
        result4.style.color = "green";
        result4.innerHTML = "Correct";
    }

    let result5 = document.getElementById("er5");
    if (prix <= 0 || isNaN(prix)) {
        result5.style.color = "red";
        result5.innerHTML = "The price must be a positive number";
        valid = false;
    } else {
        result5.style.color = "green";
        result5.innerHTML = "Correct";
    }

    if (valid) {
        alert("Form submission successful!");
    }
});

document.getElementById("title").addEventListener("keyup",function(e){
    e.preventDefault();
    let title = document.getElementById("title").value;
    let des = document.getElementById("des").value;
    let result1 = document.getElementById("er1");
    let result2 = document.getElementById("er2");
    let pattern = /^[A-Za-z\s]{3,}$/;
    
    if(title.length<3){
        result1.style.color="red";
        result1.innerHTML="le titre doit contenir au moins 3 caractéers"
    }else{
        result1.style.color="green";
        result1.innerHTML="correct";
    }

    if(!pattern.test(des)){
        result2.style.color="red";
        result2.innerHTML="The destination must contain only letters and at least 3 characters";
    }else{
        result2.style.color="green";
        result2.innerHTML="correct";
    }
})