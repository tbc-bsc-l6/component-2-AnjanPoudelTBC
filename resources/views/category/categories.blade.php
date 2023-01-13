@extends('layouts.masterlayout')

@section('content')


<div class="container">
    <table class="view-table">
        <thead>
            <tr>
                <th>ID</th>

                <th>Category Name</th>
                <th>Slug </th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>

            @foreach($categories as $category)

            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td class="action-row">

                    <a class="action-icon" href="categories/{{$category->id}}/edit"> <img
                            src="/assets/editicon.png" /></a>
                    <form action="categories/{{$category->id}}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-icon"> <img src="/assets/deleteicon.png" /></button>
                    </form>
                </td>
            </tr>
            @endforeach




        </tbody>
    </table>
    @if(count($categories)==0)
    <div class="empty-state">
        No items to view.
    </div>
    @endif
</div>


@endsection