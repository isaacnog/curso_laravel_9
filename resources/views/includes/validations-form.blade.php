@if ($errors->any())
    <div class="bg-orange-100 border-1-4 border-orange-500 text-orange-700 p-4">
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif