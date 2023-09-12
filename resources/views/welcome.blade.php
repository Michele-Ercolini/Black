<x-layout>

        {{-- Header --}}
    <header class="container-fluid">
        <div class="row bg-header align-items-center">
            <div class="col-12">
                <h1 class="ms-4 text-white display-3" style="font-weight: 500">Lorem Ipsum</h1>
                <h4 class="ms-4 text-white" style="font-family: 'Jura', sans-serif; font-weight: 400">Lorem ipsum dolor, sit amet consectetur.</h4>
            </div>
        </div>
    </header>
        {{-- Fine Header --}}

        {{-- Numeri incrementali --}}
    <section class="container mb-3">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <span>
                    <i id="numbers" class="fa-solid fa-chevron-down fa-2xl" onclick="showHide()" style="color: #2b9df4;"></i>
                </span>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div id="card" class="col-3 border-bottom">
                <h6 class="text-center">Lorem</h6>
                <p id="firstNumber" class="number text-center">0</p>
            </div>
            <div id="card" class="col-3 border-bottom">
                <h6 class="text-center">Lorem</h6>
                <p id="secondNumber" class="number text-center">0</p>
            </div>
            <div id="card" class="col-3 border-bottom">
                <h6 class="text-center">Lorem</h6>
                <p id="thirdNumber" class="number text-center">0</p>
            </div>
            <div id="card" class="col-3 border-bottom">
                <h6 class="text-center">Lorem</h6>
                <p id="fourthNumber" class="number text-center">0</p>
            </div>
        </div>
    </section>
        {{-- Fine Numeri incrementali --}}


</x-layout>