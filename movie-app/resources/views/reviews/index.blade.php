@extends('layout.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="d-flex justify-content-between mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
        <a href="#">
            <button class="btn btn-success" type="submit">Create Data</button>
        </a>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Film</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Review</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>The Shawshank Redeption</td>
                        <td>Frank Darabont</td>
                        <td>9.0</td>
                        <td>Film ini secara singkatnya berkisah tentang seorang bankir bernama Andy Dufresne, yang dijatuhi hukuman seumur hidup di Penjara Shawshank atas pembunuhan istri dan selingkuhannya, meskipun ia mengklaim tidak pernah melakukan hal tersebut.</td>
                        <td>1994-09-22</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Guardian of the Galaxy</td>
                        <td>James Gun</td>
                        <td>9.7</td>
                        <td>Film ketiga akan melanjutkan kisah petualangan Peter Quill/Star Lord Chris Pratt dan teman-temannya sebagai penjaga galaksi.Masih berduka karena kehilangan Gamora Zoe Saldana, Peter mengumpulkan timnya untuk kembali melindungi alam semesta. Misi kali ini tidaklah mudah, jika tidak berhasil, maka akan menjadi akhir bagi para Guardians.</td>
                        <td>2023-05-03</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fast and Furios 9</td>
                        <td>Justin Lin</td>
                        <td>9.5</td>
                        <td>Dom Toretto (Vin Diesel) menjalani kehidupan yang tenang dengan Letty dan putranya, Brian kecil, tetapi mereka tahu bahwa bahaya selalu mengintai. Kali ini, ancaman itu akan memaksa Dom untuk menghadapi kesalahan dari masa lalunya jika dia ingin menyelamatkan orang yang paling dia cintai. Krunya bergabung bersama untuk menghentikan sesuatu yang dapat menghancurkan dunia. serangan dipimpin oleh pembunuh paling terampil dan pengemudi yang sangat handal dan juga merupakan saudara laki-laki Dom yang ditinggalkan, Jakob (John Cena).</td>
                        <td>2021-06-16</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Evil Dead Rise</td>
                        <td>Lee Cronin</td>
                        <td>9.5</td>
                        <td>Evil Dead Rise menceritakan kisah mengejutkan tentang dua saudara perempuan yang terasing yang reuninya dipersingkat oleh munculnya setan yang merasuki manusia, mendorong mereka ke dalam pertempuran utama untuk bertahan hidup saat mereka menghadapi versi keluarga paling mengerikan yang bisa dibayangkan.</td>
                        <td>2023-05-05</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Avatar The Way of Water</td>
                        <td>James Cameron</td>
                        <td>9.7</td>
                        <td>Lebih dari satu dekade setelah peristiwa film pertama, "Avatar: The Way of Water" mulai menceritakan kisah keluarga Sully (Jake, Neytiri, dan anak-anak mereka), masalah yang mengikuti mereka, sejauh mana mereka pergi. untuk menjaga keamanan satu sama lain, pertempuran yang mereka lakukan untuk tetap hidup, dan tragedi yang mereka alami.</td>
                        <td>2022-12-12</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection