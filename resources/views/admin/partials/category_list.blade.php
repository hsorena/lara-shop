@foreach($categories as $subCategory)
    <tr>
        <th class="w60">{{ $subCategory->id }}</th>
        <td>{{str_repeat('--' , $level) }} {{ $subCategory->name }}</td>
        <td>{{ $subCategory->meta_title }}</td>
        <td>{{ $subCategory->meta_keywords }}</td>
        <td>{{ $subCategory->meta_desc }}</td>
        <td>
            <a href="{{ route('categories.edit' , ['id' => $subCategory->id])}}" type="button"
               class="btn btn-outline-warning mb-2" title="ویرایش"><span
                    class="sr-only"></span> <i class="fa fa-edit"></i></a>
            <form class="inlineblock" method="post"
                  action="{{ route('categories.destroy' , ['id' => $subCategory->id])}}">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-outline-danger mb-2" title="حذف"><span
                        class="sr-only"></span> <i class="fa fa-trash"></i></button>
            </form>
            <a href="{{ route('categories.indexSetting' , ['id' => $subCategory->id])}}" type="button"
               class="btn btn-outline-primary mb-2" title="ویرایش"><span
                    class="sr-only"></span> <i class="fa fa-cog"></i></a>
        </td>
    </tr>
    @if(count($subCategory->sub_category) > 0)
        @include('admin.partials.category_list' , ['categories' => $subCategory->sub_category , 'level' => $level+1])
    @endif
@endforeach
