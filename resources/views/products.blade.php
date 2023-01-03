@extends('masterlayout')
@section( 'content')
    <h2>Products</h2>
    <div class="products">

        @foreach($datas as $data)

        <div class="product-card">
            <div class="product-type">
                {{strtoupper($data->type)}}
            </div>
            <div class="product-title">
                {{$data->title}}
            </div>
            <div class="product-desc">
                {{$data->firstname}} {{$data->mainname}}
            </div>
            <div class="product-desc">
                $ {{$data->price}}
            </div>
            <div class="product-desc">
                {{($data->type)=="book"? "Number of Pages: ".$data->numpages  : "Play Length: ".$data->playlength}}
            </div>
            <div class="product-buttons">
                <a href="{{ url("product/$data->id")}}" class="btn btn-right">Select</a>
            </div>

        </div>
        @endforeach


    </div>

    <h2>Add Products</h2>
    <form method="post" action="{{url('store-form')}}">
        @csrf
        <select name="type" id="">
            <option value="cd">
                Product Type: CD
            </option>
            <option value="book">
                Product Type: Book
            </option>
        </select>


        <div>
            <input type="text" name="title" placeholder="Title" required />
            <input type="text" name="firstname" placeholder="Firstname(optional)" />
            <input type="text" name="surname" placeholder="Surname/Band" required />
            <input type="number" name="price" placeholder="Price" required />
            <input type="number" name="length" placeholder="Pages/Playlength" required />

        </div>

        <div class="product-buttons">
            <button class="btn btn-right" type="submit">
                Add
            </button>
        </div>

    </form>


    @endsection

