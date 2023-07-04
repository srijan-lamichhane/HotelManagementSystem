@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                @if ($error === 'The password field is required.')
                    <li>Password must contain at least 1 character, 1 special character, 1 lowercase letter, and 1 uppercase letter.</li>
                @else
                    <li>{{ $error }}</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
