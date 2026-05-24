<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>
        body {
            background: #f4f6f9;
        }

        .orders-container {
            display: flex;
            justify-content: center;
            width: 100%;
            padding: 30px 0;
        }

        .orders-card {
            width: 100%;
            max-width: 1100px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .orders-header {
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
            padding: 12px;
            text-align: center;
            font-size: 14px;
            color: #111;
        }

        tbody tr {
            background: #ffffff;
            transition: 0.2s;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        tbody tr:hover {
            background: #eef2ff;
        }

        .btn-delivered {
            background: #22c55e;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-delivered:hover {
            background: #16a34a;
        }

        .page-title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #111;
        }
    </style>
</head>

<body>

@include('admin.sidebar')
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">

        <div class="content-wrapper">

       

            <div class="orders-container">

                <div class="orders-card">

                    <div class="orders-header">
                        Order Management
                    </div>

                    <table>

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Product Title</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($order as $orders)

                            <tr>
                                <td>{{ $orders->name }}</td>
                                <td>{{ $orders->phone }}</td>
                                <td>{{ $orders->address }}</td>
                                <td>{{ $orders->product_title }}</td>
                                <td>₱{{ $orders->price }}</td>
                                <td>{{ $orders->quantity }}</td>
                                <td>₱{{ $orders->total_price }}</td>
                                <td>{{ $orders->status }}</td>
                                <td>
                                    <a href="{{ url('/updatestatus', $orders->id) }}"
                                       class="btn-delivered">
                                        Delivered
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
</div>

@include('admin.script')

</body>
</html>