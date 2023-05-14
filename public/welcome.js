// JavaScript code
function openForm() {
    document.getElementById("myForm").classList.add("show");
    document.querySelector(".button").style.display = "none";
    document.querySelector(".container").style.backgroundImage = "url('background2.jpg')";
  }
  
  function closeForm() {
    document.getElementById("myForm").classList.remove("show");
    document.querySelector(".button").style.display = "block";
    document.querySelector(".container").style.backgroundImage = "url('background1.jpg')";
  }