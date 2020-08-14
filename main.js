// Get some elements by their ID's
var seeResults = document.getElementById("seeResults");
var spinner = document.getElementById("spinner");
var divShow = document.querySelector("#divShow");
var results = document.getElementById("answers");

// Adding event listener on click (to load - spinner - and display a text with the user's answers and block the buttom)
seeResults.addEventListener("click", function () {
    spinner.style.display = "inline-block";
    // setTimeOut() will reproduct the function after 1000ms
    var spinnerTime = setTimeout(() => {
        spinner.style.display = "none"; // hidding the spinner
        divShow.style.display = "block"; // show the divShow
        results.style.display = "block"; // Show the results
    }, 1000);
    seeResults.disabled = "true"; // Desabling the button
})