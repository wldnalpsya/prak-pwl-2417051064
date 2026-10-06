<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #eef2ff, #e0f2fe);
            color: #1f2937;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
        }

        .button-wrap {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .btn {
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .primary {
            background: #2563eb;
            color: white;
        }

        .secondary {
            background: #e5e7eb;
            color: #111827;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" id="kelas" name="kelas" required>
            </div>

            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" required>
            </div>

            <div class="button-wrap">
                <button type="submit" class="btn primary">Simpan</button>
                <a href="{{ route('students.index') }}" class="btn secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
