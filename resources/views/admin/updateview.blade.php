<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include('admin.css')

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0f172a;
            color: white;
        }

        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 80px;
        }

        .title {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-size: 14px;
            margin-bottom: 6px;
            color: #cbd5f5;
        }

        .input-group input,
        .input-group select {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #334155;
            background: #1e293b;
            color: white;
            outline: none;
        }

        .full-width {
            grid-column: span 2;
        }

        .submit-btn {
            margin-top: 30px;
            padding: 14px;
            width: 200px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            cursor: pointer;
        }

        img {
            border-radius: 10px;
        }
    </style>
</head>

<body>

@include('admin.sidebar')
@include('admin.navbar')

<div class="container-fluid page-body-wrapper">

    <div class="main-container">

        <h1 class="title">Update Product</h1>

        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form action="{{ url('updateproduct', $data->id) }}"
              method="post"
              enctype="multipart/form-data">

            @csrf

            <div class="form-grid">

                <!-- TITLE -->
                <div class="input-group">
                    <label>Product Name</label>
                    <input type="text"
                           name="title"
                           value="{{ $data->title }}"
                           required>
                </div>

                <!-- PRICE -->
                <div class="input-group">
                    <label>Price</label>
                    <input type="number"
                           name="price"
                           value="{{ $data->price }}"
                           required>
                </div>

                <!-- QUANTITY -->
                <div class="input-group">
                    <label>Quantity</label>
                    <input type="number"
                           name="quantity"
                           value="{{ $data->quantity }}"
                           required>
                </div>

                <!-- DESCRIPTION -->
                <div class="input-group">
                    <label>Description</label>
                    <input type="text"
                           name="description"
                           value="{{ $data->description }}"
                           required>
                </div>

                <!-- IMAGE PREVIEW -->
                <div class="input-group full-width">
                    <label>Current Image</label>
                    <img height="200"
                         width="200"
                         src="/productimage/{{ $data->image }}">
                </div>

                <!-- CHANGE IMAGE -->
                <div class="input-group full-width">
                    <label>Change Product Image</label>
                    <input type="file" name="file">
                </div>

                <!-- ⭐ PRODUCT TYPE (THIS WAS MISSING BEFORE) -->
                <div class="input-group">
                    <label>Product Type</label>

                    <select name="type" required>

                        <option value="regular"
                            {{ $data->type == 'regular' ? 'selected' : '' }}>
                            Regular
                        </option>

                        <option value="sale"
                            {{ $data->type == 'sale' ? 'selected' : '' }}>
                            Sale
                        </option>

                        <option value="new"
                            {{ $data->type == 'new' ? 'selected' : '' }}>
                            New Arrival
                        </option>

                    </select>
                </div>

            </div>

            <button type="submit" class="submit-btn">
                Update Product
            </button>

        </form>

    </div>

</div>

@include('admin.script')

</body>
</html>