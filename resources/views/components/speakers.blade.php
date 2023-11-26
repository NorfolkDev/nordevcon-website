<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <ol class="grid grid-cols-4">
        @foreach ($speakers as $speaker)
            <li>
                <img src="{{ $speaker["profilePicture"] }}" />

                {{ $speaker["fullName"] }}
            </li>
        @endforeach
    </ol>
</div>
