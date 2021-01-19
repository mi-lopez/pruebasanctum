<form action="{{route('cursos.store')}}" method="post">
    @csrf
    <input type="text" name="nivel" value="">
    <input type="text" name="letra" value="">
    <input type="submit" value="Enviar">
</form>
