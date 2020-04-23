@php
    /** @var \App\Models\BlogCategory $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
<br>
@if($item->exists)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID: {{ $item->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="created_at">Созданно</label>
                        <input id="created_at" value="{{ $item->created_at }}"
                                type="text"
                                class="form-control"
                                disabled>
                    </div>
                    <div class="form-group">
                        <label for="updated_at">Изменено</label>
                        <input id="updated_at" value="{{ $item->updated_at }}"
                                type="text"
                                class="form-control"
                                disabled>
                    </div>
                    <div class="form-group">
                        <label for="deleted_at">Удалено</label>
                        <input id="deleted_at" value="{{ $item->deleted_at }}"
                                type="text"
                                class="form-control"
                                disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
