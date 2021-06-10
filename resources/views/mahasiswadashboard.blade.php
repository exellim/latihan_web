<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as Student!
                    <table class>
                        <thead>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Tugas</th>
                            <th>Deadline</th>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($coba as $tgs)                            
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $tgs->kelas}}</td>
                                <td>{{ $tgs->nama_tugas}}</td>
                                <td>{{ $tgs->tugas_deadline }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }
    thead {
    background-color: #f2f2f2;
    }
    th, td {
    text-align: left;
    padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .tambah{
    padding: 8px 16px ;
    text-decoration: none;
    }
</style>
