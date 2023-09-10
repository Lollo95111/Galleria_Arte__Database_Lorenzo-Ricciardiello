<x-layout>
<br>
<br>

<style>
    .container{
        position: relative;
        z-index: 99;
    }
</style>



<video class="video-bg" src="/pittura3.mp4" autoplay muted loop></video>

<div class="container my-5">
  <div class="row">

<h1 style="font-size: 70px;" >Dashboard</h1>
<a class="btn addPro" href="{{route('product.create')}}">CREA PRODOTTI</a>
<h3 class="my-3" >Tutti I Prodotti</h3>

  </div>
  <div class="row">
  <div class="col-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Genere</th>
      <th scope="col">prezzo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->category}}</td>
      <td>{{$product->gender}}</td>
      <td>{{$product->price}}</td>
      <td>

<div class="d-flex justify-content-between">

        <a href="{{route('product.edit',compact('product'))}}" class="btn">Modifica</a>

<form action="{{route('product.delete', compact('product'))}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" >Cancella</button>
    </form>
    </div>
  </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>



<div class="container my-4">
        <div class="row">
            <h4>Tutti gli utenti</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</x-layout>
