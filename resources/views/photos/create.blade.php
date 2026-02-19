<form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="title" placeholder="Judul Foto">

    <input type="file" name="image" required>

    <button type="submit">Upload</button>
</form>
