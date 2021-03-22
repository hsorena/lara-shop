@if(isset($selected_category))
    @foreach($categories as $child_category)
        <option value="{{ $child_category->id }}" @if($selected_category->parent_id == $child_category->id) selected @endif>{{ str_repeat('--  ', $level) }}{{ $child_category->name }}</option>
        @if (count($child_category->sub_category))
            @include('admin.partials.category' , ['categories' => $child_category->sub_category , 'level' => $level+1, 'selected_category'=>$selected_category])
        @endif
    @endforeach
@else
    @foreach($categories as $child_category)
        <option value="{{ $child_category->id }}">{{ str_repeat('--  ', $level) }}{{ $child_category->name }}</option>
        @if (count($child_category->sub_category))
            @include('admin.partials.category' , ['categories' => $child_category->sub_category , 'level' => $level+1])
        @endif
    @endforeach
@endif
