    <!-- Leyes -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Normativa</h4>
                <h1 class="display-5 mb-4">Leyes que rigen en el organismo</h1>
            </div>

            <div class="row">
                <hr>
                <div class="d-flex  pt-2">
                    <div class="mb-4"> 
                        <h3><u>Ley 24B:</u> Funcionamiento del Consejo de la Magistratura y Jurado de Enjuiciamiento</h3>
                    </div>
                    <div class="mb-2">
                        <button onclick="loadPDF()"><i class="fas fa-file-pdf"></i> Visualizar PDF</button>
                    </div>
                    <div class="mb-2">
                        <button onclick="loadPDF()"><i class="fas fa-file-pdf"></i> Visualizar PDF</button>
                    </div>
                    <div class="mb-2">
                        <button onclick="openLinkInNewTab()"><i class="fas fa-link"></i> Ir a InfoLeg</button>
                    </div>
                    <div class="mb-2">
                        <button onclick="loadPDF()"><i class="fas fa-file-pdf"></i> Visualizar PDF</button>
                    </div>
                </div>


                <div class="mb-4">
                    <div id="pdf-viewer"></div>   
                </div>






                <!-- <audio Id="audio" src="./media/24B/756.mp3" controls="Volume" type="audio/mpeg" preload="preload"></audio> -->
                <!-- <audio src="./media/24B/756.mp3" controls="controls" type="audio/mpeg" preload="preload"></audio> -->
                <!-- <object data="./media/24B/L.24.B.pdf" type="application/pdf" width="100%" height="100%">
                    <p>No se puede mostrar el pdf. Sin embargo puede lo puede  <a href="./media/24B/L.24.B.pdf">Descargar</a>.</p>
                  </object> -->
                  <!-- <embed src="./media/24B/L.24.B.pdf" width="100%" height="500px"  type="application/pdf"> -->
                    <button onclick="loadPDF()"><i class="fas fa-file-pdf"></i> Visualizar PDF</button>
                    <button onclick="closePDF()"><i class="fas fa-times"></i> Cerrar PDF</button>
                    <a id="download-link"  download="./media/24B/L.24.B.pdf" href="./media/24B/L.24.B.pdf"><button><i class="fas fa-download"></i> Descargar PDF</button></a>
                    <button onclick="openLinkInNewTab()"><i class="fas fa-link"></i> Ir a InfoLeg</button>
                    <hr>
                    <div id="pdf-viewer"></div>        
                    <hr>
                    <div id="audio-container">
                        <!-- <audio id="audio" src="./media/24B/756.mp3"></audio> -->
                        <!-- <audio Id="audio" src="./media/24B/756.mp3" controls="Volume" type="audio/mpeg" preload="preload"></audio> -->
                        <button onclick="playAudio()"><i class="fas fa-play"></i> Reproducir audio</button>
                        <button onclick="pauseAudio()"><i class="fas fa-pause"></i> Pausar audio</button>
                        <button onclick="stopAudio()"><i class="fas fa-stop"></i> Detener audio</button>
                    </div>
        
                    <audio id="audio" src="./media/24B/756.mp3" ontimeupdate="updatePAudio()"></audio>
        
                    <div id="progress-container">
                        <div id="progress-bar">
                            <div id="progress"></div>
                        </div>
                        <div id="duration">00:00</div>
                    </div>
            </div>

            

                  
        </div>
    </div>
    <!-- End Leyes -->
