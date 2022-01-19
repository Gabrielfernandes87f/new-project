

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1></h1>
    <form action="/depoimento.create" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="image-depoimento">adcione um foto perfil aqui:</label>
        <input type="file" id="image-depoimento" name="image-depoimento" required class="from-control-file">
      </div>
      <div class="form-group">
        <label for="instagram-depoimento">cole a url do seu instagram aqui:</label>
        <input type="text" name="instagram-depoimento" class="form-control" id="instagram-depoimento" required name="title" placeholder="URL do seu instagram">
      </div>
      <div class="form-group">
        <label for="name-depoimento">Seu nome:</label>
        <input type="text" class="form-control" id="nome-depoimento" required name="name" placeholder="Seu nome">
      </div>
      <div class="form-group">
        <label for="profissao">Profissão:</label>
        <input type="text" class="form-control" id="profissao-depoimento" required name="profissao" placeholder="Sua profissão">
      </div>
      <div class="form-group">
        <label for="date">coloque a data de hoje:</label>
        <input type="datetime" class="form-control" id="timestamps" required name="date">
      </div>
      <div class="form-group">
        <label for="city-depoimento">De onde você é?:</label>
        <input type="text" class="form-control" id="city-depoimento" required name="city" placeholder="Sua cidade">
      </div>
      <div class="form-group">
        <label for="description-depoiemnto">Conte sua experiencia comigo ou com website:</label>
        <textarea name="description" id="description-depoiemnto" class="form-control" placeholder="fale um pouco sobre sua experiencia aqui"></textarea>
      </div>
      <input type="submit" class="btn btn-primary" value="Criar depoimento">
    </form>
  </div>
