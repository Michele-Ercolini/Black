<x-layout>

        {{-- Header --}}
    <header class="container-fluid">
        <div class="row bg-header align-items-center">
            <div class="col-12">
                <h1 class="ms-5 text-white display-3" style="font-weight: 500">Lorem Ipsum</h1>
                <h4 class="ms-5 text-white" style="font-family: 'Jura', sans-serif; font-weight: 400">Lorem ipsum dolor, sit amet consectetur.</h4>
            </div>
        </div>
    </header>
        {{-- Fine Header --}}

        {{-- Numeri incrementali --}}
    <section class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-center mb-5">
                <span>
                    <i id="btnNumbers" class="fa-solid fa-chevron-up fa-2xl" style="color: #2b9df4;"></i>
                </span>
            </div>
        </div>
    </section>

    <section id="numbers" class="container-fluid mb-5">
        <div class="row m-5">
            <div id="card" class="col-3 mt-5">
                <h6 class="text-center">Lorem</h6>
                <h2 id="firstNumber" class="number text-center my-4">0</h2>
            </div>
            <div id="card" class="col-3 mt-5">
                <h6 class="text-center">Lorem</h6>
                <h2 id="secondNumber" class="number text-center my-4">0</h2>
            </div>
            <div id="card" class="col-3 mt-5">
                <h6 class="text-center">Lorem</h6>
                <h2 id="thirdNumber" class="number text-center my-4">0</h2>
            </div>
            <div id="card" class="col-3 mt-5">
                <h6 class="text-center">Lorem</h6>
                <h2 id="fourthNumber" class="number text-center my-4">0</h2>
            </div>
        </div>
    </section>
        {{-- Fine Numeri incrementali --}}

        {{-- card laterale --}}
    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-12">
                <div class="card mb-3 border-0">
                    <div class="row g-0 align-items-center bg-black">
                        <div class="col-12 col-md-6">
                            <div class="card-body">
                                <h5 class="text-blue">Lorem Ipsum</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque enim distinctio id esse fugiat eum aliquam necessitatibus beatae at consectetur cupiditate odio recusandae alias eaque nulla, impedit, possimus odit ea?</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <img src="./media/moon2.jpg" class="img-fluid rounded-start" alt="Moon image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- Fine card laterale --}}

        {{-- Icons & text --}}
    <div class="container-fluid">
        <div class="row m-5 justify-content-between align-items-center">
            <div class="col-12 col-md-3 ms-3">
                <h5 class="mt-5"><i class="fa-solid fa-meteor" style="color: #2b9df4;"></i> Lorem</h5>
                <p class="blue-border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, voluptatibus nulla dolor voluptas incidunt quisquam. Recusandae.
                </p>
                <h5 class="mt-5"><i class="fa-solid fa-rocket" style="color: #2b9df4;"></i> Lorem</h5>
                <p class="blue-border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, voluptatibus nulla dolor voluptas incidunt quisquam. Recusandae.
                </p>
            </div>
            <div class="col-12 col-md-3 text-center">
                <h5 class="mt-5"><i class="fa-solid fa-sun" style="color: #2b9df4;"></i> Centro</h5>
                <p class="blue-border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, voluptatibus nulla dolor voluptas incidunt quisquam. Recusandae.
            </div>
            <div class="col-12 col-md-3 text-end me-3">
                <h5 class="mt-5"><i class="fa-solid fa-user-astronaut" style="color: #2b9df4;"></i> Lorem</h5>
                <p class="blue-border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, voluptatibus nulla dolor voluptas incidunt quisquam. Recusandae.
                </p>
                <h5 class="mt-5"><i class="fa-solid fa-moon" style="color: #2b9df4;"></i> Lorem</h5>
                <p class="blue-border">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, voluptatibus nulla dolor voluptas incidunt quisquam. Recusandae.
                </p>
            </div>
        </div>
    </div>
        {{-- Fine Icons & text --}}


</x-layout>