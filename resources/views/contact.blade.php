@extends('layout')

@section('content')


<div class="container">
    <form id="contact" action="" method="post">
      <h3>Formulario de Contacto</h3>

      <fieldset>
        <input placeholder="Nombre" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Apellido" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Móvil" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Mensaje...." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
      </fieldset>

    </form>
  </div>


@endsection




