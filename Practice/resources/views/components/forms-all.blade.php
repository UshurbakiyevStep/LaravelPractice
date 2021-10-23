
<form method="post" action="/forms/catchAll/{{$id}}">
    Введите два числа
    <label>
        Первое <input type="number" name="num1">
    </label>

    <label>
        Второе <input type="number" name="num2">
    </label>

    <label>
        <input type="submit">
    </label>
    {{ csrf_field()  }}
</form>
