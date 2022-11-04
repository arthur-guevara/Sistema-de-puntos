function leerQR() {
    html5QrcodeScanner.render(onScanSuccess);
}

function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    //alert(`Scan result: ${decodedText}`, decodedResult);
    $.post(`${$('#route').val()}`, { id: $('#id_jugador').val(), score: decodedText },
        /* function (data, textStatus, jqXHR) {
            console.log(data);
            if (data.status == 1) {
                Swal.fire({
                    title: '¡Puntos registrados!',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = ``;
                    }
                })
            }
        },
        "json" */
    );
    html5QrcodeScanner.clear();
}


function renderTable(id, optn) {
    let table = new DataTable(`#${id}`, optn);
}