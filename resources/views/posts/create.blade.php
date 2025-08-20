<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
    </div>

    <div class="form-group">
        <label for="body">Content</label>
        <textarea name="content" id="content" class="form-control" required>{{ old('content') }}</textarea>
    </div>

    <div class="form-group">
        <label for="country_id">Country</label>
        <select name="country_id" id="country_id" class="form-control" required>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" {{ old('country_id') == $country->id ? 'selected' : '' }}>
                    {{ $country->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tags">Tags</label>
        <select name="tags[]" id="tags" class="form-control" multiple required>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>
