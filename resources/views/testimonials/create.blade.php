@extends('layouts.main')

@section('title', 'Criar Depoimento')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie um Depoimento</h1>
  <form action="/testimonials" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Foto perfil:</label>
      <input type="file" id="image_testimonial" name="image_testimonial" required class="from-control-file">
    </div>
    <div class="form-group">
      <label for="title">Nome:</label>
      <input type="name" class="form-control" id="name" required name="name" placeholder="Seu nome>">
    </div>
    <div class="form-group">
      <label for="profissao">Profissão:</label>
      <input type="profissao" class="form-control" id="profissao" required name="profissao" placeholder="Sua profissão">
    </div>
    <div class="form-group">
      <label for="depoimento">Depoimento:</label>
      <textarea class="form-control" id="depoimento" required name="depoimento" placeholder="Seu depoimento"></textarea>
    </div>
    <div class="form-group">
      <label for="instagram">Instagram:</label>
      <input type="instagram" class="form-control" id="instagram" required name="instagram" placeholder="Seu instagram">
    </div>
    <div class="form-group">
      <label for="title">Gostou do site?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Depoimento">
  </form>
</div>

@endsection
