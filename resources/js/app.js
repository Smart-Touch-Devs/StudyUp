const inputs = Array.from(document.querySelectorAll('input'))
inputs.forEach(input => {
    attachEvents(input)
})
const showHideBtn = document.querySelector('a[href="/eye"]')

showHideBtn.addEventListener('click', (e) => {
    e.preventDefault()
    const pswInput = document.querySelector('input[name="password"]')
    const classListArr = Array.from(e.target.classList);
    if(classListArr.includes("fa-eye-slash")) {
        classListArr.splice(1, 1, "fa-eye");
        pswInput.type = "text"
        e.target.classList = classListArr.join(" ");
    }
    else {
        classListArr.splice(1, 1, "fa-eye-slash");
        pswInput.type = "password"
        e.target.classList = classListArr.join(" ");
    }

    
})

function attachEvents(el) {
    el.addEventListener('focus', (e) => {
        e.target.parentElement.classList.remove('is-invalid')
        e.target.parentElement.classList.add('focused')
    })
    el.addEventListener('blur', (e) => e.target.parentElement.classList.remove('focused'))
}

