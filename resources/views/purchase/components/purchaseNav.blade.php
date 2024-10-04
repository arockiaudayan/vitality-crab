<div class="btn-group my-3" role="group" aria-label="Basic radio toggle button group">
    <a href="{{ route('purchase/purchase-list') }}"
        class="btn {{ $tab == 0 ? 'btn-primary text-white disabled' : 'btn-outline-primary text-primary' }} btn-sm">
        Purchase List
    </a>
    <a href="{{ route('purchase/purchase-list') }}"
        class="btn {{ $tab == 1 ? 'btn-primary text-white disabled' : 'btn-outline-primary text-primary' }} btn-sm">
        Vendor List
    </a>
    <a href="{{ route('purchase/purchase-list') }}"
        class="btn {{ $tab == 2 ? 'btn-primary text-white disabled' : 'btn-outline-primary text-primary' }} btn-sm">
        Meat Grade List
    </a>
    <a href="{{ route('purchase/purchase-list') }}"
        class="btn {{ $tab == 3 ? 'btn-primary text-white disabled' : 'btn-outline-primary text-primary' }} btn-sm">
        Cooking Zone List
    </a>
</div>
