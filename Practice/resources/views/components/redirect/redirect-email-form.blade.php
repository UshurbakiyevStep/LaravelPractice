<form action="/redirects/1/emailOne" method="get">
    <label for="mail">
        <input type="email" name="mail">
    </label>
    <input type="submit">
    {{ csrf_field() }}
</form>
