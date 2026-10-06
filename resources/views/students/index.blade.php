<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            color: #1f2937;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            border-radius: 14px;
            padding: 32px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        }

        h1 {
            margin-bottom: 18px;
            color: #111827;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px 14px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #d1d5db;
            padding: 12px 10px;
            text-align: left;
        }

        th {
            background: #e5e7eb;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="topbar">
            <h1>Daftar Mahasiswa</h1>
            <a href="{{ route('students.create') }}" class="btn">Tambah Data</a>
        </div>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>NPM</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student['nama'] }}</td>
                        <td>{{ $student['kelas'] }}</td>
                        <td>{{ $student['npm'] }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Belum ada data mahasiswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
