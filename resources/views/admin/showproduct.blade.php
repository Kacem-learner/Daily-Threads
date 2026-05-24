<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>
        body {
            background: #f4f6f9;
        }

        .products-container {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 30px 0;
        }

        .products-card {
            width: 100%;
            max-width: 1100px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .products-header {
            background: #ffffff;
            color: #111;
            text-align: center;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
            border-bottom: 1px solid #e5e7eb;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            color: #111;
        }

        thead {
            background: #f3f4f6;
            color: #111;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #111;
        }

        tbody tr {
            background: #ffffff;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #eef2ff;
        }

        img {
            border-radius: 8px;
        }

        .btn {
            font-size: 13px;
        }
    </style>
</head>

<body>

@include('admin.sidebar')
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">

    <div class="content-wrapper">

        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" style="width:90%; margin:10px auto;">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="products-container">

            <div class="products-card">

                <div class="products-header">
                    Product Management
                </div>

                <table>

                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                    @foreach ($data as $product)

                        <tr>

                            <td>{{ $product->title }}</td>
                            <td>₱{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->description }}</td>

                            <!-- TYPE COLUMN -->
                            <td>
                                <span style="
                                    padding:5px 10px;
                                    border-radius:6px;
                                    background:#e5e7eb;
                                    font-size:12px;">
                                    {{ $product->type }}
                                </span>
                            </td>

                            <td>
                                <img src="productimage/{{ $product->image }}"
                                     style="width:80px; height:auto;">
                            </td>

                            <td>
                                <a href="{{ url('updateview', $product->id) }}"
                                   class="btn btn-primary btn-sm">
                                    Update
                                </a>
                            </td>

                            <td>
                                <a href="{{ url('deleteproduct', $product->id) }}"
                                   class="btn btn-danger btn-sm">
                                    Delete
                                </a>
                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

@include('admin.script')

</body>
</html>