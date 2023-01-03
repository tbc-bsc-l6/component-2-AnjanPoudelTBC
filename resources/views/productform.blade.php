
@extends('masterlayout')
@section( 'content')
<form>
    <select name="product-selection" id="">
        <option value="cd">
            Product Type: CD
        </option>
        <option value="book">
            Product Type: Book
        </option>
    </select>


    <div>
        <input type="text" placeholder="Title" />
        <input type="text" placeholder="Firstname(optional)" />
        <input type="text" placeholder="Surname/Band" />
        <input type="text" placeholder="Price" />
        <input type="text" placeholder="Pages/Playlength" />

    </div>

    <div class="product-buttons">
        <button class="btn btn-right">
            Select
        </button>
    </div>

</form>
@endsection


