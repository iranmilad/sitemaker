<div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-right filters-toolbar-item d-flex justify-content-center justify-content-sm-start">
        <div class="search-form mb-3 mb-sm-0">
            <form class="d-flex" action="#">
                <input wire:model.debounce.300ms="searchTerm" class="search-input" type="text" placeholder="جستجوی وبلاگ...">
                <button wire:click="search" type="button" class="search-btn"><i class="icon anm anm-search-l"></i></button>

            </form>
        </div>
    </div>
</div>
