function seeMore() {
    var seemore = document.getElementById("seemore");
    var showless = document.getElementById("showless");
    var phone2 = document.getElementById("phone2");
    phone2.classList.toggle("d-none");
    seemore.classList.toggle("d-none");
    showless.classList.toggle("d-none");

}

function seeMore1() {
    var seemore = document.getElementById("seemore1");
    var showless = document.getElementById("showless1");
    var cam2 = document.getElementById("cam2");
    cam2.classList.toggle("d-none");
    seemore.classList.toggle("d-none");
    showless.classList.toggle("d-none");

}

function changePage() {
    var signUpBox = document.getElementById("signup");
    var signInBox = document.getElementById("signin");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");
}

function changePage1() {
    var signInBox = document.getElementById("signin");
    var adminBox = document.getElementById("admin");

    adminBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");
}

function changeButton() {
    var b1 = document.getElementById("b1");
    var b2 = document.getElementById("b2");
    var b3 = document.getElementById("b3");
    b1.className = "btn btn-outline-primary d-none";
    b2.className = "btn btn-outline-primary d-block";
    b3.className = "col-4  col-lg-2 mt-2 offset-lg-1";
}


function remove1() {
    var itemp = document.getElementById("itemp").innerHTML = "Rs. 140000.00";
    var delivery = document.getElementById("delivery").innerHTML = "Rs. 600.00";
    var item = document.getElementById("items").innerHTML = "Item (2)";
    var total = document.getElementById("total").innerHTML = "Rs. 140600.00";
    var c1 = document.getElementById("c1").classList.toggle("d-none");
}

function remove2() {
    var itemp = document.getElementById("itemp").innerHTML = "Rs. 150000.00";
    var delivery = document.getElementById("delivery").innerHTML = "Rs. 600.00";
    var item = document.getElementById("items").innerHTML = "Item (2)";
    var total = document.getElementById("total").innerHTML = "Rs. 150600.00";
    var c2 = document.getElementById("c2").classList.toggle("d-none");
}

function remove3() {
    var itemp = document.getElementById("itemp").innerHTML = "Rs. 190000.00";
    var delivery = document.getElementById("delivery").innerHTML = "Rs. 600.00";
    var item = document.getElementById("items").innerHTML = "Item (2)";
    var total = document.getElementById("total").innerHTML = "Rs. 190600.00";
    var c3 = document.getElementById("c3").classList.toggle("d-none");
}