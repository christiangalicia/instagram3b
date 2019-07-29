@extends("usuarios.layout.templateUsuario")

@section("panelPrincipal")
<h1>{{$titulo}}</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, deserunt veritatis pariatur accusamus nulla tempora. Harum, maiores ut similique veniam deserunt tempore officiis dignissimos quasi molestiae quam? Doloremque, ullam, in, commodi iste harum est numquam recusandae aut delectus iusto id quo fuga voluptates vel adipisci maxime neque consectetur atque magnam eligendi fugiat accusamus nihil eum maiores impedit. Sint, sequi, porro, cupiditate, libero mollitia dolorum magnam repellat sed nam reprehenderit animi praesentium iste sunt eligendi earum illum blanditiis necessitatibus unde obcaecati repellendus sapiente eaque adipisci culpa dolorem quisquam. Nemo, quos, quis, eos molestiae enim delectus distinctio nobis in aliquam quidem magni?
<br>
@if($autor<>"")
<b>{{$autor}}</b>
@else
<b>Anonimo</b>
@endif


@for ($i = 0; $i < 10; $i++)
The current value is {{ $i }}<br>
@endfor

<h2>Usuarios Conectados:</h2>
@forelse ($usuarios as $user)
    <p>{{ $user->correo }}</p>
@empty
    <p>No users</p>
@endforelse

@endsection