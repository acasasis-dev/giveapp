@extends("layout.userlayout")

@section('title')
Giveapp | Donate Item
@endsection

<!-- @section('pageHeader')

@endsection

@section('pageHeaderSub')

@endsection -->

@section('content')
<link rel="stylesheet" type="text/css" href={{asset('css/donateitem/donateitem.css')}}>

<div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                </div>
            </nav>

    <!-- name -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
              </div>
              <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

    <!-- address -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
              </div>
              <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

    <!-- email -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Email Address</span>
              </div>
              <input type="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

    <!-- contact number -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Contact Number</span>
              </div>
              <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

     <!-- category picker -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Options</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">Electronic Devices</option>
                <option value="2">Electronic Accessories</option>
                <option value="3">TV & Home Appliances</option>
                <option value="4">Health & Beauty</option>
                <option value="5">Babies & Toys</option>
                <option value="6">Groceries & Pets</option>
                <option value="7">Home & Lifestyle</option>
                <option value="8">Women's Fashion</option>
                <option value="9">Men's Fashion</option>
                <option value="10">Fashion Accessories</option>
                <option value="11">Sports & Travel</option>
                <option value="12">Automotive & Motorcycles</option>
              </select>
            </div>

    <!-- image  -->
            <div class="input-group mb-3">
              <div class="custom-file">
                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                <input type="file" class="custom-file-input" id="inputGroupFile03">
              </div>
            </div>

    <!-- item name -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Item Name</span>
              </div>
              <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

    <!-- reason for donating -->
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Reason for Donating</span>
              </div>
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <button type="button" class="btn btn-outline-success"><a href="/user/profile">Donate Item</a></button>
            <button type="button" class="btn btn-outline-danger"><a href="#">Discard</a></button>

            <!-- end of file -->
        </div>

@endsection

@section('modal')


@endsection