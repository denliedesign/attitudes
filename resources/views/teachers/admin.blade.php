@can('update', \App\Teacher::class)

    <hr class="mt-3">
    <div class="d-flex d-inline">
        <div class="mx-2">
            <a class="btn btn-secondary" href="{{ route('teachers.edit', $teacher->id) }}">Edit</a>
        </div>
        <div class="mx-2">
            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>

@endcan
