
<form action="{{ route('site.contact') }}" method="post">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="">
    <br>
    <input name="telephone" type="text" placeholder="Telefone" class="">
    <br>
    <input name="email" type="text" placeholder="Email" class="">
    <br>
    <select name="reason" class="">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="" placeholder="Preencha aqui a sua mensagem"></textarea>
    <br>
    <button type="submit" class="">Enviar</button>
</form>

