@switch($type)
    @case('select')
        <div class="form-group">
            @if ($label)
                <label for="{{ $name }}">{{ $label }}</label>
            @endif
            <select class="form-control {{ $class }}" id="id-{{ $name }}" name="{{ $name }}"
                {{ $attributes }}>
                <option value="">Pilih {{ ucwords($label) }}</option>
                @foreach ($options as $key => $value)
                    <option value="{{ $value }}" @selected(old($name, $default) == $value)>{{ $key }}</option>
                @endforeach
            </select>
            @error($name)
                <!--begin::Description-->
                <div class="text-danger ml-2 small mt-2">{{ $message }}</div>
                <!--end::Description-->
            @enderror
        </div>
    @break

    @case('nominal')
        <div class="form-group m-form__group">
            @if ($label)
                <label for="{{ $name }}">{{ $label }}</label>
            @endif
            <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">Rp.</span>
                </div>
                <input class="form-control {{ $class }}" type="text" name="{{ $name }}" id="nominal"
                    value="{{ old($name, $default) }}" placeholder="{{ $placeholder ?? $name }}" {{ $attributes }}>
            </div>
            @error('nominal')
                <!--begin::Description-->
                <div class="text-danger ml-2 small mt-2">{{ $message }}</div>
                <!--end::Description-->
            @enderror
        </div>
    @break


@break

@default
    <div class="form-group">
        @if ($label)
            <label for="{{ $name }}">{{ $label }}</label>
        @endif
        <input type="{{ $type ?? 'text' }}" class="form-control {{ $class }}"
            placeholder="{{ $placeholder ?? $name }}" id="id-{{ $name }}" name="{{ $name }}"
            value="{{ old($name, $default) }}" {{ $attributes }}>
        @error($name)
            <!--begin::Description-->
            <div class="text-danger ml-2 small mt-2">{{ $message }}</div>
            <!--end::Description-->
        @enderror
    </div>
@endswitch
