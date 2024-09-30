const nav = document.querySelector(".nav-list")
const hamburgar = document.querySelector("#click")
hamburgar.addEventListener('click', () => {
    nav.classList.toggle('active')
    let data = hamburgar.querySelector('i')
    data.classList.toggle("fa-remove")

})



