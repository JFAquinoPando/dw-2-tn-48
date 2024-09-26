const principal = document.querySelector("main")
const datosTexto = localStorage.getItem("poke-test")
const datosJson = JSON.parse(datosTexto)

console.log(datosTexto, datosJson);

const s = datosJson.map(dato => {
    return `<div class='poke'>
        <h3>${dato.nombre}</h3>
        <img src=${dato["imagen"]}>
        <p>
        ${dato.altura} m
        <br/>
        ${dato.peso} Kg
        </p>
    </div>`
})

console.log(s);

principal.insertAdjacentHTML("afterbegin", s.join(""))