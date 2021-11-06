<form action="{{ route('contact-form') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name"> Введите имя</label>
    <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="введите Email" id="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" placeholder="введите имя" id="subject" class="form-control">
  </div>

  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Отправить</button>
