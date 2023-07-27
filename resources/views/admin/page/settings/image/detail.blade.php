<table class="table no-border d-flex">
    <tbody>
        <tr>
            <td class="card-title">Template</td>
            <td>{{ $page->template }}</td>
        </tr>
        <tr>
            <td class="card-title">Title</td>
            <td>{{ $page->title }}</td>
        </tr>
        <tr>
            <td class="card-title">Slug</td>
            <td>{{ $page->slug }}</td>
        </tr>
        <tr>
            <td class="card-title">Meta Title</td>
            <td>{{ $page->metaTitle }}</td>
        </tr>
        <tr>
            <td class="card-title">Meta Description</td>
            <td>{{ $page->metaDescription }}</td>
        </tr>
        <tr>
            <td class="card-title">Status</td>
            <td>{{ $page->status }}</td>
        </tr>
        <tr>
            <td class="card-title">Content</td>
            <td>{{ $page->content }}</td>
        </tr>
    </tbody>
</table>