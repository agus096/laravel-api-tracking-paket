@include('top')

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class="col-lg-4">
                <aside class="user-info-wrapper">
                    <div class="user-cover" style="background-image: url(https://i.ibb.co/f1qNTtC/mybanner.jpg);">
                        <div class="info-label" data-toggle="tooltip" title
                            data-original-title="You currently have 290 Reward Points to spend"><i
                                class="icon-medal"></i>290 points</div>
                    </div>
                    <div class="user-info">
                        <div class="user-avatar">
                            <a class="edit-avatar" href="#"></a><img
                                src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User">
                        </div>
                        <div class="user-data">
                            <h4>Agus budiman</h4><span>Joined February 06, 2017</span>
                        </div>
                    </div>
                </aside>
                <nav class="list-group">
                    <a class="list-group-item with-badge active" href="#"><i class=" fa fa-th"></i>Orders<span
                            class="badge badge-warning badge-pill">1</span></a>
                    <a class="list-group-item" href="#"><i class="fa fa-user"></i>Profile</a>
                    <a class="list-group-item" href="#"><i class="fa fa-map"></i>Addresses</a>
                    <a class="list-group-item with-badge" href="#"><i class="fa fa-tag"></i>My Tickets<span
                            class="badge badge-primary badge-pill">4</span></a>
                </nav>
            </div>
            <div class="col-lg-8">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>

                <div class="table-responsive wishlist-table margin-bottom-none">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>List orderan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                @foreach ($l_order as $l_orders)
                                    <td>
                                        <div class="product-item">
                                            <a class="product-thumb" href="#"><img src="{{ $l_orders->gambar }}"
                                                    alt="Product"></a>
                                            <div class="product-info">
                                                <h4 class="product-title"><a href="#">{{ $l_orders->barang }}</a>
                                                </h4>
                                                <div class="text-lg text-medium text-muted">{{ $l_orders->harga }}
                                                </div>
                                                <div class="text-success">Awb: {{ $l_orders->awb }}</div>
                                            </div>
                                            <form action="{{ route('track.cek') }}" method="get">
                                                @csrf
                                                <input type="text" name="kurir" value="{{ $l_orders->kurir }}"
                                                    hidden>

                                                <input type="text" name="awb" value="{{ $l_orders->awb }}"
                                                    hidden>

                                                <button type="submit"
                                                    class="btn btn-sm btn-outline-success">Tracking</button>
                                            </form>
                                        </div>
                                    </td>
                                @endforeach

                                <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip"
                                        title data-original-title="Remove item"><i class="icon-cross"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="mb-4">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>
