<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body px-4">
                    <h2 class="text-center">{{ $title ?? '' }}</h2>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
