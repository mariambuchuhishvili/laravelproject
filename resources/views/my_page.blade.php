@extends('layouts.shablon')

@section('header')
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-postage-heart" viewBox="0 0 16 16">
                <path d="M3.5 1a1 1 0 0 0 1-1h1a1 1 0 0 0 2 0h1a1 1 0 0 0 2 0h1a1 1 0 1 0 2 0H15v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1h-1.5a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0H1v-1a1 1 0 1 0 0-2v-1a1 1 0 1 0 0-2V9a1 1 0 1 0 0-2V6a1 1 0 0 0 0-2V3a1 1 0 0 0 0-2V0h1.5a1 1 0 0 0 1 1ZM3 3v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z"/>
                <path d="M8 11C2.175 7.236 6.336 4.31 8 5.982 9.664 4.309 13.825 7.236 8 11Z"/>
            <!--</svg>-->
            <title>Send Love</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-4">Send Love</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('my_page')}}">Готовые букеты</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Составить букет</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">О нас</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('zakaz')}}">Сделать заказ</a>

        </nav>
    </div>
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top"   width="477" height="225"  xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="https://newflora.ru/wp-content/uploads/2019/05/kernew-Newflora.ru-1.jpg" class="img-fluid"   width="477" height="225"/> -->
                    <!--<rect width="100%" height="100%" fill="#eceeef"></rect>-->

                </svg>

                <div class="card-body">
                    <p class="card-text"> Букет из 3 видов роз. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: violet">В корзину</button>
                        </div>
                        <small class="text-muted">2800 руб.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top"   width="477" height="225"  xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="https://thypix.com/wp-content/uploads/beautiful-flower-bouquets-88.jpg" class="img-fluid"   width="477" height="225"/> -->
                    <!--<rect width="100%" height="100%" fill="#eceeef"></rect>-->

                </svg>

                <div class="card-body">
                    <p class="card-text"> Букет из роз. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: violet">В корзину</button>
                        </div>
                        <small class="text-muted">1500 руб.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top"   width="477" height="225"  xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="https://venusinfleurs.ru/image/catalog/izomod/2915/miks-iz-35-romashek-v-bukete_1.jpg" class="img-fluid"   width="477" height="225"/> -->
                    <!--<rect width="100%" height="100%" fill="#eceeef"></rect>-->

                </svg>

                <div class="card-body">
                    <p class="card-text"> Букет из ромашек. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: violet">В корзину</button>
                        </div>
                        <small class="text-muted">1300 руб.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top"   width="477" height="225"  xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="https://studiofloristic.ru/files/catalog/3165/w1000_3aad55fed5f6f3bcaa8432e2ffcefaf4.jpg" class="img-fluid"   width="477" height="225"/> -->
                    <!--<rect width="100%" height="100%" fill="#eceeef"></rect>-->

                </svg>

                <div class="card-body">
                    <p class="card-text"> Букет сирень и розы. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: violet">В корзину</button>
                        </div>
                        <small class="text-muted">2500 руб.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top"   width="477" height="225"  xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="https://funart.pro/uploads/posts/2021-04/1617825035_40-p-oboi-buket-iz-lilii-i-roz-44.jpg" class="img-fluid"   width="477" height="225"/> -->
                    <!--<rect width="100%" height="100%" fill="#eceeef"></rect>-->

                </svg>

                <div class="card-body">
                    <p class="card-text"> Букет из лилий. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: violet">В корзину</button>
                        </div>
                        <small class="text-muted">3000 руб.</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top"   width="477" height="225"  xmlns="http://www.w3.org/2000/svg"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <image href="https://lovelybuket.ru/wp-content/uploads/2021/05/elitnye-piony-eden.jpg" class="img-fluid"   width="477" height="225"/> -->
                    <!--<rect width="100%" height="100%" fill="#eceeef"></rect>-->

                </svg>

                <div class="card-body">
                    <p class="card-text"> Букет пионов. </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Подробно</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary" style="background-color: violet">В корзину</button>
                        </div>
                        <small class="text-muted">2750 руб.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    footer
@endsection
