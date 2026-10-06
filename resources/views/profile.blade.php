<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
<<<<<<< HEAD
            background: linear-gradient(135deg, #dbeafe, #3b82f6);
=======
            background: #6c6868;
>>>>>>> 910b4f2 (Initial project setup)
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            width: 100%;
<<<<<<< HEAD
            max-width: 850px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .header {
            background: linear-gradient(135deg, #1d4ed8, #2563eb);
            color: white;
            text-align: center;
            padding: 40px 20px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            background: white;
            color: #2563eb;
=======
            max-width: 800px;
            background: #e0e0e0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        .header {
            background: #841717;
            color: #eeeeee;
            text-align: center;
            padding: 35px 20px;
        }

        .avatar {
            width: 90px;
            height: 90px;
            background: #c0c0c0;
            color: #b71c1c;
>>>>>>> 910b4f2 (Initial project setup)
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
<<<<<<< HEAD
            font-size: 40px;
=======
            font-size: 36px;
>>>>>>> 910b4f2 (Initial project setup)
            font-weight: bold;
        }

        .header h1 {
<<<<<<< HEAD
            font-size: 30px;
=======
            font-size: 28px;
>>>>>>> 910b4f2 (Initial project setup)
            margin-bottom: 8px;
        }

        .header p {
<<<<<<< HEAD
            opacity: 0.9;
        }

        .content {
            padding: 35px;
        }

        .title {
            color: #1e3a8a;
            margin-bottom: 20px;
            font-size: 24px;
=======
            font-size: 15px;
            color: #c0bcbc;
        }

        .content {
            padding: 30px;
            background: #8f8d8d;
        }

        .title {
            color: #9b111e;
            margin-bottom: 20px;
            font-size: 22px;
>>>>>>> 910b4f2 (Initial project setup)
        }

        .info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
<<<<<<< HEAD
            gap: 20px;
        }

        .card {
            background: #eff6ff;
            padding: 20px;
            border-radius: 12px;
            border-left: 5px solid #2563eb;
        }

        .card h3 {
            color: #1e40af;
            margin-bottom: 8px;
        }

        .card p {
            color: #475569;
            word-break: break-word;
=======
            gap: 15px;
        }

        .card {
            background: #706a6a;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #b71c1c;
        }

        .card h3 {
            color: #9b111e;
            margin-bottom: 8px;
            font-size: 17px;
        }

        .card p {
            color: #333333;
>>>>>>> 910b4f2 (Initial project setup)
        }

        .footer {
            text-align: center;
<<<<<<< HEAD
            padding: 20px;
            background: #f8fafc;
            color: #64748b;
=======
            padding: 18px;
            background: #a9a9a9;
            color: #333333;
            font-size: 14px;
>>>>>>> 910b4f2 (Initial project setup)
        }

        @media (max-width: 700px) {
            .info {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 24px;
            }

            .content {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">

            <div class="avatar">
<<<<<<< HEAD
                P
=======
                A
>>>>>>> 910b4f2 (Initial project setup)
            </div>

            <h1>Profile Mahasiswa</h1>

            <p>Praktikum Pemrograman Web Lanjut</p>

        </div>

        <div class="content">

            <h2 class="title">Data Mahasiswa</h2>

            <div class="info">

                <div class="card">
<<<<<<< HEAD
                    <h3>nama</h3>
                    <p>{{ $nama }}</p>
                </div>

                <div class="card">
                    <h3>kelas</h3>
                    <p>{{ $kelas }}</p>
                </div>

                <div class="card">
                    <h3>npm</h3>
                    <p>{{ $npm }}</p>
=======
                    <h3>Nama</h3>
                    <p>Wildan Humam Alpasya</p>
                </div>

                <div class="card">
                    <h3>Kelas</h3>
                    <p>B</p>
                </div>

                <div class="card">
                    <h3>NPM</h3>
                    <p>2417051064</p>
>>>>>>> 910b4f2 (Initial project setup)
                </div>

            </div>

        </div>

        <div class="footer">
<<<<<<< HEAD
             2026 Pemrograman Web Lanjut
=======
            2026 Pemrograman Web Lanjut
>>>>>>> 910b4f2 (Initial project setup)
        </div>

    </div>

</body>
</html>