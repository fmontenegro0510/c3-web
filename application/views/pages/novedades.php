<!-- Informacion Importante -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" style="text-align: justify;" data-wow-delay="0.1s">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title display-5 mb-4">Información Importante</h1>
                        <p class="card-text">
                        <h4 class="card-title">Los postulantes que se inscribieron en concursos de antecedentes y oposición y adeuden documentación, deberán complementar la misma hasta cinco (5) días hábiles previo al inicio el examen de oposición, presentándolas por Mesa de Entradas del Consejo de la Magistratura, en originales. Todo ello bajo apercibimiento de no ser examinados, oportunidad en la que se publicaran las listas conforme a los art. 5 y 6 de la Ley 1133-B.</h4>
                        <h4 class="card-title">Se aclara que el mismo no es aplicable para cargos Provisorios, teniendo en ese caso que estar completa la documentación al momento de cierre de dicha inscripción.</h4>

                        <!-- <p class="fs-5">Los postulantes que se inscribieron en concursos de antecedentes y oposición y adeuden documentación, deberán complementar la misma hasta cinco (5) días hábiles previo al inicio el examen de oposición, presentándolas por Mesa de Entradas del Consejo de la Magistratura, en originales. Todo ello bajo apercibimiento de no ser examinados, oportunidad en la que se publicaran las listas conforme a los art. 5 y 6 de la Ley 1133-B. </p>
                        <p class="fs-5">Se aclara que el mismo no es aplicable para cargos Provisorios, teniendo en ese caso que estar completa la documentación al momento de cierre de dicha inscripción.</p> -->
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="card-title display-5 mb-4">Últimas Noticias de Concursos</h1>
            </div>

            <div class="col-lg-12 wow fadeInUp" style="text-align: justify;" data-wow-delay="0.1s">
                <div class="card" id="divToPrint">
                    <h4 class="card-header">24/10/2023 </h4>
                    <div class="card-body">
                        <h3 class="card-title">Fecha y Programa de Examen - Cámara de Apelaciones del Trabajo de Resistencia</h3>
                        <p class="card-text">
                            El día <b>martes 12 de diciembre de 2023 a partir de las 08 horas</b>, se realizará en la sede del Consejo de la Magistratura, ubicada en la calle América Nº 117 de la ciudad de Resistencia, el examen práctico para cubrir el siguiente cargo: <b>Juez/a de Cámara con funciones en la Cámara de Apelaciones del Trabajo de la Ciudad de Resistencia (Expte. Nº 897/23)</b> La Comisión Examinadora está formada por los Dres. Martha Cristina Rodríguez de Dib, César Alfredo Vallejos Tressens y Diego Alberto Caballero. Para descargar el Programa de Examen haga click <a href="#">aquí</a> o en el boton al pie de esta publicación. El examen oral se llevará a cabo el día <b>jueves 14 de diciembre, a partir de las 08 horas</b>.
                        </p>
                        <a href="#" class="btn btn-primary">Descargar Programa</a>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12 wow fadeInUp"  data-wow-delay="0.1s">
                    <div class="card" id="divToPrint2">
                        <h4 class="card-header" >
                            <div class="row">
                                <div class="col-10">
                                    24/10/2023
                                </div>
                                <div class="col-2" style="text-align-last: right;">
                                    <button onclick="compartir('divToPrint2')" class="print-button"><i class="fas fa-copy"></i></button>
                                    <button onclick="imprimir('divToPrint2')" class="print-button"><i class="fas fa-print"></i></button>
                                </div>
                            </div>
                         </h4>
                        <div class="card-body">
                            <h3 class="card-title">Fecha y Programa de Examen - Cámara de Apelaciones del Trabajo de Resistencia</h3>
                            <p class="card-text">
                                El día <b>martes 12 de diciembre de 2023 a partir de las 08 horas</b>, se realizará en la sede del Consejo de la Magistratura, ubicada en la calle América Nº 117 de la ciudad de Resistencia, el examen práctico para cubrir el siguiente cargo: <b>Juez/a de Cámara con funciones en la Cámara de Apelaciones del Trabajo de la Ciudad de Resistencia (Expte. Nº 897/23)</b>
                                La Comisión Examinadora está formada por los Dres. Martha Cristina Rodríguez de Dib, César Alfredo Vallejos Tressens y Diego Alberto Caballero.
                                Para descargar el Programa de Examen haga click <a href="#">aquí</a> o en el boton al pie de esta publicación. El examen oral se llevará a cabo el día <b>jueves 14 de diciembre, a partir de las 08 horas</b>.
                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    function imprimir(divId) {
        let printContents = document.getElementById(divId).innerHTML; // Obtiene el contenido del div
        let escudo = document.getElementById('escudo_provincial_impresion').innerHTML;
        escudo = escudo + "<br>";
        let originalContents = document.body.innerHTML; // Guarda el contenido original de la página

        printContents = escudo + printContents;
        // document.body.innerHTML = printContents; // Reemplaza el contenido de la página con el contenido del div a imprimir
        // window.print(); // Imprime la página
        // document.body.innerHTML = originalContents; // Restaura el contenido original de la página
        document.body.innerHTML = printContents; // Reemplaza el contenido de la página con el contenido del div a imprimir
        window.print(); // Imprime la página
        document.body.innerHTML = originalContents;
    }

    function compartir(idDiv) {
        // Obtener el div a compartir por su id
        var divACompartir = document.getElementById(idDiv);

        // Crear un objeto Range para seleccionar el contenido del div
        var range = document.createRange();
        range.selectNode(divACompartir);

        // Crear un objeto Selection y seleccionar el contenido del div
        var selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(range);

        // Copiar el contenido seleccionado al portapapeles
        document.execCommand('copy');

        // Mostrar un mensaje de éxito
        alert('El contenido se ha copiado al portapapeles.');
    }
</script>

<!-- End Informacion Importante -->