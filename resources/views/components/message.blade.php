<div>
    @props(['message'])
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    @if ($message)
    <div class="p-4 m-2 rounded bg-green-100">
        {{$message}}
    </div>
    @endif
</div>