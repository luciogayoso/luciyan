let formCarga = document.querySelector(".cargaInput");
formCarga.addEventListener("submit", function (e) {
  e.preventDefault();
  let modalModificar = document.querySelector("#modal");
  let selectedModificar = document.querySelector(".select");
  let valueSelected = selectedModificar.selectedOptions[0].textContent;
  if (valueSelected == "Seleccione una opcion") {
    let html = `<div class="container-modal">
  <h2>Debe seleccinar una opcion</h2>
  <p class="btn-modal" onclick="cerrarModal()">Aceptar</p></div>
  </div>`;
    modalModificar.innerHTML = html;
  } else {
    let html = `<div class="container-modal">
    <h2>¿Esta seguro que desea cargar este codigo?</h2>
    <p class="btn-modal" onclick="EnviarDelete()">Aceptar</p></div>
    </div>`;
    modalModificar.innerHTML = html;
  }
});

let selectedModificar = document.querySelector(".select");
selectedModificar.addEventListener("change", function (e) {
  let producto = e.target.selectedOptions[0].value;
  fetch("../servidor/peticionesAjax/producto.php", {
    method: "POST",
    body: JSON.stringify({
      solicitud: producto,
    }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then(function (json) {
      let descripcion = document.querySelector("#descripcion");
      let precioUnitario = document.querySelector("#precioU");
      let porcentaje = document.querySelector("#porcentaje");
      let precioVenta = document.querySelector("#precioV");
      let foto = document.querySelector("#imgPerfile");

      descripcion.innerText = json[0].descripcion;
      precioUnitario.innerText = "$" + json[0].precioU;
      porcentaje.innerText = json[0].porcentaje + " %";
      precioVenta.innerText = "$" + json[0].precioV;
      foto.src = "data:image/jpeg;base64," + json[0].foto;
      foto.style = "width:200px;height:200px;border-radius: 100%";
    });
});

function cerrarModal() {
  let modal = document.querySelector("#modal");
  modal.innerHTML = "";
  modal.className = "";
}

function EnviarDelete() {
  formCarga.submit();
}
