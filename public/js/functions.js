
var c = 1;
function leerQR() {
    html5QrcodeScanner.render(onScanSuccess);
}

function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    //alert(`Scan result: ${decodedText}`, decodedResult);
    let nombre = $('#name').val();
    let id = $('#id').val();
    $.post("actions.php", { action: 'updateScore', id: $('#id').val(), score: $('#score').val() },
        function (data, textStatus, jqXHR) {
            console.log(data);
            if (data.status == 1) {
                Swal.fire({
                    title: '¡Puntos registrados!',
                    icon: 'success',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `user.php?status=success&nombre=${nombre}&id=${id}`;
                    }
                })
            }
        },
        "json"
    );
    html5QrcodeScanner.clear();
}

function getScore(id) {
    $.post("actions.php", { action: 'getScore', id: id },
        function (data, textStatus, jqXHR) {
            if (data.status == 1) {
                let score = data.score;
                $('#scoreLabel').append(score);
                $('#score').val(score);
            }
        },
        "json"
    );
}

function renderTable(id, optn) {
    let table = new DataTable(`#${id}`, optn);
}