document.querySelector(".switch_to_register").addEventListener("click", () => {
     document.querySelector(".login").classList.remove("active");
     document.querySelector(".register").classList.add("active");
})