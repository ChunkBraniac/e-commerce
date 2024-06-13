@extends('layouts.app')


@section('content')
    <div class="container col-xl-5 mt-5 pt-5">
        <form action="{{ route('add_item.store') }}" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}
            <div class="row">
                <div class="col-xl-6">
                    <label for="">Item Name:</label>
                    <input type="text" name="item_name" class="form-control" @required(true)>
                </div>

                <div class="col-xl-6">
                    <label for="">Item Price:</label>
                    <input type="number" name="item_price" class="form-control" @required(true)>
                </div>

                <div class="col-xl-12 mt-3">
                    <label for="">Item Image:</label>
                    <input type="file" name="item_image" class="form-control" @required(true)>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-success">Add Item</button>
            </div>
        </form>
    </div>
@endsection