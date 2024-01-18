@extends('template/layout_plain')
@section('corosel')
<!-- ======= Hero Section ======= -->
<form method="post" action="{{route('store_profile')}} " enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <label for="floatingInputValue">Tanggal Lahir</label>
        <input type="date" class="form-control" id="floatingInputValue" placeholder="Alamat Perusahaan" name="date_of_birth">
        <label for="floatingInputValue">Tempat Lahir</label>
        <input type="text" class="form-control" id="floatingInputValue" placeholder="Tempat Lahir" name="place_of_birth">
        <label for="floatingInputValue">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="gender">
            <option selected>Jenis Kelamin</option>
            <option value="Wanita">Wanita</option>
            <option value="Pria">Pria</option>
        </select>
        <label for="floatingInputValue">No Telepon</label>
        <input type="text" class="form-control" id="floatingInputValue" placeholder="Nomor Handphone" name="no_hp">
        <label for="floatingInputValue">Usia</label>
        <input type="text" class="form-control" id="floatingInputValue" placeholder="Usia Anda" name="age">
        <label for="floatingInputValue">Photo</label>
        <input type="file" class="form-control" id="floatingInputValue" placeholder="Alamat Perusahaan" name="photo_profile">
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Simpan </button>
    </div>
</form>
@endsection