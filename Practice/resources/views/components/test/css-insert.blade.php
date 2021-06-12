<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <button class = "{{$cssClass}}" style="color:{{$cssColor}}">
       Test button
    </button>

    <label>
        <input type = "button" value="{{$input1}}" style="color:{{$cssColor}}">
    </label>

    <label>
        <input type = "button" value="{{$input2}}" style="color:{{$cssColor}}">
    </label>

    <label>
        <input type = "button" value="{{$input3}}" style="color:{{$cssColor}}">
    </label>

    <a href="{{$href}}">{{$text}}</a>
</div>

The current date is {{date('Y-m-d')}}

