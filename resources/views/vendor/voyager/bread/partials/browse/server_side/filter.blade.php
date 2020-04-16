@if ($isServerSide)
    <form method="get" class="form-search">
        <div id="search-input">
            <div class="col-2">
                <select id="search_key" name="key">
                    @foreach($searchNames as $key => $name)
                        <option value="{{ $key }}" @if($search->key == $key || (empty($search->key) && $key == $defaultSearchKey)) selected @endif>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <select id="filter" name="filter">
                    <option value="contains" @if($search->filter == "contains") selected @endif>contains</option>
                    <option value="equals" @if($search->filter == "equals") selected @endif>=</option>
                </select>
            </div>
            <div class="input-group col-md-12">
                <input type="text" class="form-control" placeholder="{{ __('voyager::generic.search') }}" name="s" value="{{ $search->value }}">
                <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="submit">
                                                <i class="voyager-search"></i>
                                            </button>
                                        </span>
            </div>
        </div>
        @if (Request::has('sort_order') && Request::has('order_by'))
            <input type="hidden" name="sort_order" value="{{ Request::get('sort_order') }}">
            <input type="hidden" name="order_by" value="{{ Request::get('order_by') }}">
        @endif
    </form>
@endif
