
<!DOCTYPE html>
<html>
    <head>
        <title>
                App-Test - @yield('title')
        </title>
    </head>
<body>

<aside>
    <p>ParentAside</p>
     @yield('aside')
</aside>

<main>

        <p>ParentMain</p>
         @yield('main')
</main>

<footer>
    <div>2</div>
    @yield('footer')
</footer>

</body>

</html>
