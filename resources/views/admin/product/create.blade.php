@extends('admin.layout.admin')
@section('content')
    <h3>Add Product</h3>
    <div class="row">

        <form action="" method="post" enctype="multipart/form-data">
            Product Name <input type="text" name="product_name" id=""><br><br>
            Description <input type="text" name="description" id=""><br><br>
            Size <select name="size">
                    <option value="xl">xl</option>
                    <option value="l">L</option>
                    <option value="l">M</option>
            </select>
<br><br>
            Color <select name="color">
                    <option value="red">Red</option>
                    <option value="blue">Blud</option>
                    <option value="yellow">Yellow</option>
            </select>
<br><br>
            Product Picture <input type="file" name="image" id=""><br><br>
            <input type="submit" value="Add Product">

        </form>
    </div>
@endsection