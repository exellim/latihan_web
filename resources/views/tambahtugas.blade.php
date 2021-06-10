<form action="{{ route('dashboard.store') }}" method="post">
    @csrf
    Kelas: <input type="text" name="kelas">
    Tugas: <input type="text" name="nama_tugas">
    Deadline: <input type="date" name="tugas_deadline">
    <button type="Submit">Simpan Data</button>
</form>
