<form method="post" action="NumInput">
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
