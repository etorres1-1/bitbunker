function comprar(bunker){

localStorage.setItem("bunker", bunker)

window.location.href="reservar.html"

}


window.onload=function(){

let bunker=localStorage.getItem("bunker")

if(bunker){

let element=document.getElementById("bunkerSeleccionat")

if(element){

element.innerHTML="Búnquer seleccionat: " + bunker

}

}

}


function confirmarReserva(event){

event.preventDefault()

alert("Reserva enviada correctament!")

}


function enviarForm(event){

event.preventDefault()

alert("Missatge enviat!")

}
let carret=[]
let total=0

function afegirCarret(producte, preu){

carret.push({producte,preu})

total+=preu

actualitzarCarret()

}

function actualitzarCarret(){

let llista=document.getElementById("carret")
let totalHTML=document.getElementById("total")

llista.innerHTML=""

carret.forEach(item=>{

let li=document.createElement("li")

li.className="list-group-item"

li.innerHTML=item.producte + " - " + item.preu + "€"

llista.appendChild(li)

})

totalHTML.innerText=total

}

function comprar(event){

event.preventDefault()

alert("Compra realitzada correctament!")

carret=[]
total=0

actualitzarCarret()

}