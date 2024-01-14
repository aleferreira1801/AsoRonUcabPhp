ListarDepartamentos();
function ListarDepartamentos(busqueda) {
    fetch("Listar.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}