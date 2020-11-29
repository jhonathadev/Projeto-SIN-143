const fields = document.querySelectorAll("[required]")

function customValidation(event) {
    const field = event.target

    function verifyErrors() {
        let foundError = false
        for(let error in field.validity) {
            if(error != "customError" && field.validity[error]) {
                foundError = true
            }
        }
        return foundError
    }
    const error = verifyErrors()
    if(error) {
        field.setCustomValidity("Ei, parece que você esqueceu de preencher este campo :(")
    } else {
        field.setCustomValidity("")
    }
}

for(field of fields) {
    field.addEventListener("invalid", event => { 
        customValidation(event)
    })
}

document.querySelector("form")
.addEventListener("submit", event => {
    console.log("enviar o formulário")
    // não vai enviar o formulário
    event.preventDefault()
})