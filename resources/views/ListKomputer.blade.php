@extends('layouts.main')
@section('main')
    <body>
    <section>
        <div class = "container tm-position-relative">
            <div class = "row">
                <table class = "table">
                    <thead>
                        <tr>
                            <th scope="col">*</th>
                            <th scope="col">Nama Laptop</th>
                            <th scope="col">Spesifikasi</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($daftar as $d)
                            <tr>
                                <td>{{$d ->id}}</td>
                                <td>{{$d ->namalaptop}}</td>
                                <td>{{$d ->spesifikasi}}</td>
                                <td>{{$d ->harga}}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </section>
    <!-- Bagian Footer -->
    <section class="templatemo-container blue-bg footer-nav effect1">
        <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-6 footer-block">
                <h3 class="text-uppercase">Main menu</h3>
                <nav class="text-uppercase templatemo-nav-2">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/profile">Profile</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/listkomputer">List</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 footer-block">
                    <h3 class="text-uppercase">About us</h3>
                    <p>ALGI Computer adalah website yang memperkenalkan suatu product laptop dari brand ternama untuk mempermudah pencarian user .</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Resources</h3>
                    <ul>
                        <li><a href="#">Asus.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-block">
                    <h3 class="text-uppercase">Features</h3>
                    <ul>
                        <li><a href="#"></a>Macam Laptop</li>
                        <li><a href="#"></a>macam Accesories</li>
                    </ul>
                </div>
    </section>
</body>
</html>
@endsection