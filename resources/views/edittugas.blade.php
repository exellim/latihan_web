<form action="{{ url('dashboard/update/'.$ambil->id) }}" method="post">
    @csrf
    <input type="hidden" name="method" value="patch">
    <input type="hidden" name="id" value="{{ $ambil->id }}">
    Kelas: <input type="text" name="kelas" value="{{ $ambil->kelas }}">
    Tugas: <input type="text" name="nama_tugas" value="{{ $ambil->nama_tugas }}">
    Deadline: <input type="date" name="tugas_deadline" value="{{ $ambil->tugas_deadline }}">
    <button type="Submit">Simpan Data</button>
</form>
