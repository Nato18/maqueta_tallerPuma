<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retela</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="main">
        <?php
        include 'header.php';
        ?>
        <div class="separacion-cuadro">
            <div class="flex f-direction-c" style="flex-direction: column;">
                <div>
                    <div class="text-center os-700 f-24 p-10">Crea tu Cuadro</div>
                    <div>
                        <ul class="progreso">
                            <li class="step-actual os-700 f-20">1</li>
                            <li class="step-prox os-700 f-20">2</li>
                            <li class="step-prox os-700 f-20">3</li>
                            <li class="step-prox os-700 f-20">4</li>
                            <li class="step-prox os-700 f-20">5</li>
                        </ul>
                    </div>
                </div>
                <div id="paso-1">
                    <div class="container mt-40">
                        <div class="flex f-align-items-center g-5">
                            <img src="assets/svg/tuerca.svg" alt="">
                            <div class="f-18 os-700">Servicios</div>
                        </div>
                    </div>
                    <div class="container mt-40">
                        <div class="os-400 f-18 text-black">¿Que tipo de servicio necesitas?</div>
                    </div>
                    <div class="container mt-20">
                        <div class="servicios">
                            <button class="btn-servicio" id="btnEnmarcaciones">Enmarcación</button>
                            <button class="btn-servicio">Enmarcación + Impresion</button>
                            <button class="btn-servicio">Marco "Hazlo tu mismo"</button>
                            <button class="btn-servicio">Espejo enmarcado</button>
                        </div>
                    </div>
                    <div class="container mt-50">
                        <div class="os-400 f-18 text-black">Descripción de servicios</div>
                        <div class="des-servicios">
                            <div class="flex f-align-items-center g-5">
                                <img src="assets/svg/enmarcacion.svg" alt="">
                                <div class="os-400 f-16"><span class="os-700">Enmarcación:</span> Ya tienes la obra y solo necesitas enmarcarla. acá podrás hacerlo totalmente personalizado.</div>
                            </div>
                            <div class="flex f-align-items-center g-5">
                                <img src="assets/svg/hazloTu.svg" alt="">
                                <div class="os-400 f-16"><span class="os-700"> Marco "Hazlo tu mismo":</span> Ya tienes la obra y solo quieres el marco a medida para poder enmarcarlo tu mismo. (Conveniente para regiones)</div>
                            </div>
                            <div class="flex f-align-items-center g-5">
                                <img src="assets/svg/impre-enmar.svg" alt="">
                                <div class="os-400 f-16"><span class="os-700">Impresión + enmarcación:</span> Tienes la foto en digital o una idea y quieres que nosotros te la imprimamos y enmarquemos.</div>
                            </div>
                            <div class="flex f-align-items-center g-5">
                                <img src="assets/svg/espejo.svg" alt="">
                                <div class="os-400 f-16"><span class="os-700">Espejo enmarcado:</span> Estás en busca de un espejo, Personaliza el tamaño y el marco que quieras, lucirá hermoso.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div style="display:none;" id="enmarcaciones1">
                    <?php
                    include 'Enmarcaciones.php';
                    ?>
                </div>
            </div>
            <div class="bg-3 flex-cuadro">
                <div class="top-text os-600 f-20">Ancho</div>
                <div class="flex-cuadro-text">
                    <div class="left-text os-600 f-20">Largo</div>
                    <div class="p-cuadro">
                        <img src="assets/svg/cuadroNegroBlanco.svg" alt="">
                    </div>
                    <div class="right-text os-600 f-20">Largo</div>
                </div>
                <div class="bottom-text os-600 f-20">Ancho</div>
            </div>
        </div>
        <footer class="bg-black footer">
            <div class="flex f-align-items-center g-5">
                <img src="assets/svg/camion.svg" alt="">
                <div class="text-white os-600 f-20">Despacho a todo chile</div>
            </div>
            <div class="flex f-align-items-center g-5">
                <img src="assets/svg/time.svg" alt="">
                <div class="text-white os-600 f-20">Tiempo estimado despacho 8 días habiles</div>
            </div>
        </footer>
    </div>
</body>
<script type="text/javascript" src="js/main.js"></script>

</html>