const add_material_ingreso = document.getElementById("detalle");
const codigo = document.getElementById("codigo");
const material = document.getElementById("material");
const cantidad_material = document.getElementById("cantidad_material");
const precio_material = document.getElementById("precio_material");
const impuesto_material = document.getElementById("impuesto_material");

let arregloDetalle = []

const redibujarTabla =()=>{
    cuerpoTabla.innerHTML = "";
    arregloDetalle.forEach((detalle)=>{
        let fila = document.createElement("tr");
        fila.innerHTML ='<td>${detalle.codigo}</td>'
                         '<td>${detalle.material}</td>'
                         '<td>${detalle.cantidad_material}</td>'
                         '<td>${detalle.precio_material}</td>'
                         '<td>${detalle.impuesto_material}</td>';
        let tdEliminar = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.innerHTML = "Eliminar";
        tdEliminar.appendChild(botonEliminar);
        fila.appendChild(tdEliminar);
        cuerpoTabla.appendChild(fila);
    });

}

detalle.onsubmit = (e)=>{
    e.preventDefault();

    //crando objeto detalle                                                                  
    const objDetalle = {
        codigo: codigo.value, 
        material: material.value,
        cantidad_material: cantidad_material.value,
        precio_material: precio_material.value,
        impuesto_material: impuesto_material.value,
    };
    arregloDetalle.push(objDetalle);
    redibujarTabla();
};