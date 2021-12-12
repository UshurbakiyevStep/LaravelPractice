<form method="get" action="/redirects/one">
    <label for="num">
        <input type="number" name="num">
    </label>
    <input type="submit">
    {{ csrf_field()  }}
</form>
