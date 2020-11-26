var nightMode = true
const checked = document.getElementById("color-checked")
const checkedStorage = localStorage.getItem("nightMode")

if(!checkedStorage) {
    document.body.style.backgroundColor = "#f2f2f2";
    checked.checked = false
} 

checked.addEventListener("click", () => {
    if(checked.checked == true) {
        document.body.style.backgroundColor = "#242424c9";
        localStorage.setItem('nightMode', true)
    } else {
        document.body.style.backgroundColor = "#f2f2f2";
        localStorage.removeItem('nightMode')
    }
})