<div class="row {{ $class ?? '' }}">
    <div class="col-12">
        <div class="row">
            <div class="col-7">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="{{ $key }}" class="mb-0 font-weight-normal" style="font-size: 14px">{{ $day }}</label>

                    <span>
                        <button
                            id="{{ $key }}"
                            type="button"
                            class="btn btn-sm btn-secondary btn-toggle"
                            data-toggle="button"
                            aria-pressed="false"
                            autocomplete="off"
                            onclick="{{ $onclick ?? '' }}">
                                <div class="handle"></div>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div id="input-{{$key}}" class="row align-items-center d-none">
            <div class="col-4 pr-0">
                <input type="time" class="form-control" name="{{ $name ?? '' }}[0]" id="time">
            </div>
            <span class="px-2">-</span>
            <div class="col-4 pl-0">
                <input type="time" class="form-control" name="{{ $name ?? '' }}[1]" id="time">
            </div>
        </div>
    </div>
</div>
