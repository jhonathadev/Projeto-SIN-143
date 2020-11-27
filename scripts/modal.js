const buttonSearch = document.getElementById("search")
const modal = document.querySelector("#modal")
const close = document.querySelector("#modal .header a")

console.log(buttonSearch)

buttonSearch.addEventListener("click", () => {
    modal.classList.remove("hide")
})

close.addEventListener("click", () => {
    modal.classList.add("hide")
})