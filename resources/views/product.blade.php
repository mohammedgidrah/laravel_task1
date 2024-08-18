<!DOCTYPE html>
<html>

<head>
    <title>Products</title>
    <link href="{{ url('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ url('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <link href="{{ url('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ url('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="{{ url('css/theme.css') }}">

    <link href="{{ url('css/theme.css') }}" rel="stylesheet" media="all">

</head>
<style>
    /* Custom CSS for table resizing */
    .table-responsive {
        /* overflow-x: auto; Enables horizontal scrolling on smaller screens */
    }

    .table {
        /* width: fit-content%; Full width */

    }

    /* Optional: Adjust table font size */
    .table th,
    .table td {
        font-size: 14px;
        /* Adjust as needed */
        /* padding: 12px; Adjust padding for better spacing */
    }

    /* Optional: Add a border radius for rounded corners */
    .table {
        border-radius: 8px;
        /* overflow: hidden; Ensure the rounded corners show */
    }
</style>

<body>

    <h1>Product List</h1>

    <div class="page-wrapper">

        <div class="col-lg-15">
            <div class="table-responsive table--no-card m-b-80">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>
