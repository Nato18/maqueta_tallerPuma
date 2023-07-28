<div id="enmarcaciones2" class="container mt-40">
    <div class="flex f-align-items-center g-15">
        <img src="assets/svg/imagen.svg" alt="">
        <div class="f-18 os-700">Imagen</div>
    </div>
    <div class="os-700 f-18 mt-40">Tipo de Servicio: Enmarcado</div>
    <div class="mt-40 f-18 os-400">Dimensiones: Tamaño de imagen</div>
    <div class="mt-20 f-18 os-400">Selecciona la medida exacta de la lámina que deseas enmarcar.</div>
    <div class="f-18 os-400"> Posteriormente se te indicará la medida total que tendrá tu cuadro considerando los centímetros del tipo de marco que elijas y si deseas o no añadir paspartú.</div>

    <div class="flex mt-20 g-40">
        <div class="flex f-align-.items-center g-40">
            <label for="largo" class="os-700 f-18">Largo</label>
            <input name="largo" id="largo" class="medidas border-0 f-18 os-400 text-center" type="text" placeholder="000">
        </div>
        <div class="flex f-align-.items-center g-40">
            <label for="ancho" class="os-700 f-18">Ancho</label>
            <input name="ancho" id="ancho" class="medidas border-0 f-18 os-400 text-center" type="text" placeholder="000">

        </div>
    </div>
    <div class="mt-20 f-18 os-400">El tamaño de cuadro para tu imagen es de:</div>
    <div class="text-center mt-20 os-700">
        <span class="valorLargo">000 cm</span> y <span class="valorAncho">000 cm</span>
    </div>
    <div class="flex f-end text-right text-white mt-40 tw-600 costoProduccion">
        <div class="bg-4 actualCosto">Actual costo de producto: </div>
        <div class="bg-4 precioCosto"> $0</div>
    </div>
    <div class="flex mt-40 flex f-justify-between">
        <button class="pointer btnVolver f-16 tw-600 text-center text-black volver">Volver</button>
        <button class="pointer btnSig f-16 tw-600 text-center text-white siguiente">Siguiente</button>
    </div>
</div>
<div style="display:none;" class="container mt-40" id="enmarcaciones3">
    <div class="flex f-align-items-center g-15">
        <img src="assets/svg/marco.svg" alt="">
        <div class="f-18 os-700">Marco</div>
    </div>
    <div class="os-400 f-18 mt-40 mb-15">Modelo de Marco</div>
    <div class="flex f-justify-between">
        <div class="flex f-direction-c g-10">
            <div class="os-600 f-20">Modelo 1</div>
            <div><img src="assets/svg/cuadroNegroBlancoPequeño.svg" alt=""></div>
            <div class="flex g-10">
                <button onclick="window.modal1.showModal()" class="pointer btnVer tw-600 f-16">Ver</button>
                <button class="pointer btnSelec text-white tw-600-f16">Seleccionar</button>
            </div>
        </div>
        <div class="flex f-direction-c g-10">
            <div class="os-600 f-20">Modelo 2</div>
            <div><img src="assets/svg/cuadroNegroBlancoPequeño.svg" alt=""></div>
            <div class="flex g-10">
                <button onclick="window.modal2.showModal()" class="pointer btnVer tw-600 f-16">Ver</button>

                <button class="pointer btnSelec text-white tw-600-f16">Seleccionar</button>
            </div>
        </div>
        <div class="flex f-direction-c g-10">
            <div class="os-600 f-20">Modelo 3</div>
            <div><img src="assets/svg/cuadroNegroBlancoPequeño.svg" alt=""></div>
            <div class="flex g-10">
                <button onclick="window.modal3.showModal()" class="pointer btnVer tw-600 f-16">Ver</button>
                <button class="pointer btnSelec text-white tw-600 f-16">Seleccionar</button>
            </div>
        </div>
    </div>
    <div class="mt-40 os-400 f-18">Color de enmarcación</div>
    <div class="mt-40 flex f-justify-between">
        <div class="flex f-direction-c f-align-items-center g-5">
            <button class="color-negro btnColor pointer">Negro</button>
            <div class="os-700 f-18">Negro</div>
        </div>
        <div class="flex f-direction-c f-align-items-center g-5">
            <button class="color-natural btnColor pointer trans-2">Natural</button>
            <div class="os-700 f-18">Natural</div>
        </div>
        <div class="flex f-direction-c f-align-items-center g-5">
            <button class="color-champagne btnColor pointer trans-2">Champagne</button>
            <div class="os-700 f-18">Champagne</div>
        </div>
        <div class="flex f-direction-c f-align-items-center g-5">
            <button class="color-dorado1 btnColor pointer trans-2">Dorado 1</button>
            <div class="os-700 f-18">Dorado 1</div>
        </div>
        <div class="flex f-direction-c f-align-items-center g-5">
            <button class="color-plata btnColor pointer trans-2">Plata</button>
            <div class="os-700 f-18">Plata</div>
        </div>
        <div class="flex f-direction-c f-align-items-center g-5">
            <button class="color-dorado2 btnColor trans-2">Dorado 2</button>
            <div class="os-700 f-18">Dorado 2</div>
        </div>
    </div>
    <div class="flex mt-40 flex f-justify-between">
        <button class="pointer btnVolver f-16 tw-600 text-center text-black volver">Volver</button>
        <button class="pointer btnSig f-16 tw-600 text-center text-white siguiente">Siguiente</button>
    </div>

    <dialog class="modal" id="modal1">
        <div class="flex f-justify-between mb-20 ">
            <div class="tw-700 f-18">Vista de modelo</div>
            <button class="cerrarModal" onclick="window.modal1.close();"><img src="assets/svg/cerrar.svg" alt=""></button>
        </div>
        <div class="flex g-40">
            <div>
                <div class="tw-700 f-16">Modelo 1</div>
                <div class="tw-700 f-16 mt-10 mb-10">Información:</div>
                <div class="tw-400 f-16">Se puede colgar horizontal o verticalmente, adaptándose al espacio disponible.</div>
                <div class="tw-400 f-16">Tamaños adaptados para colgar varios para formar un conjunto.</div>
                <div class="tw-400 f-16">Tamaños adaptados para colgar varios para formar un conjunto.</div>
                <div class="tw-400 f-16">Gracias a la protección frontal, los marcos son más ligeros y seguros.</div>
                <div class="tw-700 f-16 mt-10 mb-10">Material y cuidado:</div>
                <div class="tw-400 f-16">Marco: Madera de arce<br>Protector de frente: Plástico de poliestireno<br>Cuidado: Limpiar con un plumero.</div>
            </div>
            <div class="flex f-justify-end f-direction-c g-40">
                <img src="assets/svg/cuadroNegroBlancoModal.svg" alt="">
                <div class="flex f-justify-between">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                </div>
            </div>
        </div>
    </dialog>
    <dialog class="modal" id="modal2">
        <div class="flex f-justify-between mb-20 ">
            <div class="tw-700 f-18">Vista de modelo</div>
            <button class="cerrarModal" onclick="window.modal2.close();"><img src="assets/svg/cerrar.svg" alt=""></button>
        </div>
        <div class="flex g-40">
            <div>
                <div class="tw-700 f-16">Modelo 2</div>
                <div class="tw-700 f-16 mt-10 mb-10">Información:</div>
                <div class="tw-400 f-16">Se puede colgar horizontal o verticalmente, adaptándose al espacio disponible.</div>
                <div class="tw-400 f-16">Tamaños adaptados para colgar varios para formar un conjunto.</div>
                <div class="tw-400 f-16">Tamaños adaptados para colgar varios para formar un conjunto.</div>
                <div class="tw-400 f-16">Gracias a la protección frontal, los marcos son más ligeros y seguros.</div>
                <div class="tw-700 f-16 mt-10 mb-10">Material y cuidado:</div>
                <div class="tw-400 f-16">Marco: Madera de arce<br>Protector de frente: Plástico de poliestireno<br>Cuidado: Limpiar con un plumero.</div>
            </div>
            <div class="flex f-justify-end f-direction-c g-40">
                <img src="assets/svg/cuadroNegroBlancoModal.svg" alt="">
                <div class="flex f-justify-between">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                </div>
            </div>
        </div>
    </dialog>
    <dialog class="modal" id="modal3">
        <div class="flex f-justify-between mb-20 ">
            <div class="tw-700 f-18">Vista de modelo</div>
            <button class="cerrarModal" onclick="window.modal3.close();"><img src="assets/svg/cerrar.svg" alt=""></button>
        </div>
        <div class="flex g-40">
            <div>
                <div class="tw-700 f-16">Modelo 3</div>
                <div class="tw-700 f-16 mt-10 mb-10">Información:</div>
                <div class="tw-400 f-16">Se puede colgar horizontal o verticalmente, adaptándose al espacio disponible.</div>
                <div class="tw-400 f-16">Tamaños adaptados para colgar varios para formar un conjunto.</div>
                <div class="tw-400 f-16">Tamaños adaptados para colgar varios para formar un conjunto.</div>
                <div class="tw-400 f-16">Gracias a la protección frontal, los marcos son más ligeros y seguros.</div>
                <div class="tw-700 f-16 mt-10 mb-10">Material y cuidado:</div>
                <div class="tw-400 f-16">Marco: Madera de arce<br>Protector de frente: Plástico de poliestireno<br>Cuidado: Limpiar con un plumero.</div>
            </div>
            <div class="flex f-justify-end f-direction-c g-40">
                <img src="assets/svg/cuadroNegroBlancoModal.svg" alt="">
                <div class="flex f-justify-between">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                    <img src="assets/svg/cuadroNegroBlancoModalMarco.svg" alt="">
                </div>
            </div>
        </div>
    </dialog>
</div>