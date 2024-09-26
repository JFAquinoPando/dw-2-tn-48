const principal = document.querySelector("main")
/* const datosTexto = localStorage.getItem("poke-test")
const datosJson = JSON.parse(datosTexto) */
/* console.log(datosTexto, datosJson); */

fetch("datos.php").then(
    peticion => peticion.json()
).then(
    informacion => {
        const s = informacion.map(dato => {
            return `<div class='poke'>
                <h3>${dato.nombre}</h3>
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">
                <p>
                Edad: ${dato.edad} años
                </p>
            </div>`
        })
        
        console.log(s);
        
        principal.insertAdjacentHTML("afterbegin", s.join(""))
    }
)

