@include('layout.header')

<h3>Edit Buku</h3>
<form action="{{route('buku.update', $buku->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="">Judul Buku : </label>
        <input type="text" name="judul" id="" value="{{$buku->judul}}">
    </div>
    <div class="form-group">
        <label for="">Pengarang : </label>
        <input type="text" name="pengarang" id="" value="{{$buku->pengarang}}">
    </div>
    <div class="form-group">
        <label for="">Tahun Terbit : </label>
        <input type="text" name="tahun_terbit" id="" value="{{$buku->tahun_terbit}}">
    </div>
    <div class="form-group">
        <label for="">Penerbit  : </label>
        <select name="penerbit_id" id="">
            @foreach ($penerbit as $p)
                <option value="{{$p->id}}" {{ ($p->id == $buku->penerbit_id) ? 'selected' : ''}}>{{$p->nama_penerbit}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Kategori  : </label>
        <select name="kategori_id" id="">
            @foreach ($kategori as $k)
                <option value="{{$k->id}}" {{ ($k->id == $buku->kategori_id) ? 'selected' : ''}}>{{$k->nama_kategori}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="tombol">Update</button>
</form>

@include('layout.footer')

