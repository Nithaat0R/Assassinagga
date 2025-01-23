async function mostraProductes(element){
    var categoryID = element.getAttribute("value");
    var ans = await fetch("controller/llista_productes.php?id=" + categoryID);
    var ansTxt = await ans.text();
    document.getElementById("llistat").innerHTML = ansTxt;
}

async function mostraDetalls(element){
    var productID = element.getAttribute("value");
    var ans = await fetch("controller/detall_producte.php?id=" + productID);
    var ansTxt = await ans.text();
    document.getElementById("container").innerHTML = ansTxt;
}

async function afegirProducte(nom, preu, id){
    var resposta = await fetch("controller/carrito_petit.php?nom=" + nom + "&preu=" + preu + "&id=" + id );
    var respostaTxt = await resposta.text();
    document.getElementById('carrito-petit').innerHTML = respostaTxt;
}

async function buidarCarrito(){
    const res = await fetch("controller/buidar_carrito.php");
    const txt = await res.text();
    document.getElementById('carrito-petit').innerHTML = txt;

    const res1 = await fetch("controller/llista_categories.php");
    const txt1 = await res1.text();
    const aux = document.getElementsByClassName('container')[0];
    aux.innerHTML = txt1;
}

async function viewCarrito(){
    const res = await fetch("controller/carrito.php");
    const txt = await res.text();
    const container = document.getElementsByClassName('container')[0];
    container.innerHTML  = txt;

    document.getElementById('carrito-petit').innerHTML = "";
}

async function actualitzaQuantitat(producte, op){
    if (op == "sub"){
        await fetch("controller/carrito_petit.php?sub=" + producte);
    } else if (op == "add") {
        await fetch("controller/carrito_petit.php?add=" + producte);
    } else {
        await fetch("controller/carrito_petit.php?rm=" + producte);
    }
    
    const res = await fetch("controller/carrito.php");
    const txt = await res.text();

    const container = document.getElementsByClassName('container')[0];
    container.innerHTML = txt;
}

function comprarFinal() {
    fetch("controller/comprar.php")
        .then(response => {
            if (!response.ok) {
                throw new Error("Error en la compra");
            }
            return response.text();
        })
        .then(data => {
            console.log("Respuesta de comprar.php:", data);
            return fetch("controller/buidar_carrito.php");
        })
        .then(response => response.text())
        .then(data => {
            const container = document.getElementsByClassName('container')[0];
            container.innerHTML = "<div class='confirmacio'> <h1> Compra confirmada!!! </h1> </div>";
        })
        .catch(error => {
            console.error("Error:", error);
        });
}