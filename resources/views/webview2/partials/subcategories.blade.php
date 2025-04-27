<ul class="list-unstyled mb-3">
    @foreach($subcategories as $subcategory)
        <li class="fw-600 border-bottom pb-2 mb-3">
            <a class="text-reset" href="{{ route('subcategoryproduct', $subcategory->slug) }}">
                {{ $subcategory->sub_category_name	 }}
            </a>
        </li>
    @endforeach
</ul>