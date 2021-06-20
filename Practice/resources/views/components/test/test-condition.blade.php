<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if($Month == 1 || $Month == 2 || $Month == 12)
        <p>Зима</p>
    @elseif($Month == 3 || $Month == 4 || $Month == 5)
        <p>Весна</p>
    @elseif($Month == 6 || $Month == 7 || $Month == 8)
        <p>Лето</p>
    @elseif($Month == 9 || $Month == 10 || $Month == 11)
        <p>Осень</p>
    @else
        <p>месяц не существует</p>
    @endif

    @if ($dayOfWeek == 7)
          <p>Воскресенье</p>
    @elseif($dayOfWeek == 6)
        <p>Суббота</p>

    @else
        <p>Рабочий день</p>
    @endif

    @unless($age > 18)
        <p>Пользователь несовершеннолетний</p>
    @endunless

    @if(count($arr) > 0)
        Cумма элементов массива равна : @php echo array_sum($arr) @endphp
    @else
        <p>В массиве кол-во элементов равно 0</p>
    @endif


</div>
