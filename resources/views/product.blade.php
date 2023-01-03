@extends('masterlayout')
@section( 'content')

    <h2>Edit Products</h2>
    
    <form class="myForm" method="post" action="/product/{{$data->getId()}}">
        @csrf
        {{  method_field('PATCH')  }}


        <div>
            <input type="text" name="title" placeholder="Title" required  value="{{$data->getTitle()}}"/>
            <input type="text" name="firstname" placeholder="Firstname(optional)"  value="{{$data->getFirstName()}}"/>
            <input type="text" name="surname" placeholder="Surname/Band" required  value="{{$data->getMainName()}}"/>
            <input type="number" name="price" placeholder="Price" required value="{{$data->getPrice()}}" />
            <input type="number" name="numpages" placeholder="Price" required value="{{$data->getNumberOfPages()}}" />
        </div>
        

        <div class="product-buttons">
            <button class="btn btn-right" name="edit-btn"  type="submit" >
                Edit
            </button>
            <button class="btn btn-left" name="delete-btn" type="submit" >
                Delete
            </button>
        </div>

    </form>
    
    
    @endsection
