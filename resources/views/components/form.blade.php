<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="my-form">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="numeric" name='price' class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="img" class="form-control">
    </div>
    <button type="submit" class="btn">Aggiungi</button>
</form>
