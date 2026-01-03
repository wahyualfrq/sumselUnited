<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\MatchResult;
use App\Models\MatchSchedule;
use App\Models\News;
use App\Models\Photo;
use App\Models\Player;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => "Sumsel United Terus Melanjutkan Tren Positif",
            'content' => <<<HTML
                        <p>Manager Tim Sumsel United Syamsuddin Issac Suryamanggala memberikan apresiasi yang tinggi kepada jajaran pelatih, pemain dan official yang telah bekerja keras mempersiapkan tim.</p>
                        <p>Sehingga pada pertandingan pekan kedua Pegadaian Championship 2025/26, Senin (22/9/2025) malam pukul 19.00 WIB melawan Persiraja Banda Aceh. Sumsel United berhasil meraih kemenangan dengan skor 3-2 di Stadion Gelora Sriwijaya Jakabaring (GSJ) Palembang.</p>
                        <p>Namun dia meminta kepada Rachmad Hidayat dkk tidak cepat puas dan tetap fokus. Karena kompetisi masih panjang dan masih banyak pertandingan yang harus dijalani.</p>
                        <p>Oleh sebab itu, Syamsuddin memastikan pihaknya tetap akan melakukan evaluasi terhadap performa tim melawan Persiraja Banda Aceh tadi malam.</p>
                        <p>"Harapan kedepan tim makin solid lagi. Kita nanti akan evaluasi beberapa kesalahan-kesalahan kecil dipertandingan tadi. Salah satunya harus lebih kontrol emosi," ungkapnya usai laga.</p>
                        <p>Diakuinya, penampilan Diego Dall'Oca dkk semakin membaik dan terus berkembang dari pertandingan sebelumnya melawan Persikad Depok dilaga perdana.</p>
                        <p>Komunikasi diantara pemain dan lini per lini sudah mulai terjalin dengan baik. Para pemain sudah saling memahami apa yang diinginkan rekannya dipertandingan.</p>
                        <p>Melihat progres yang diperlihatkan tim pada dua pertandingan terakhir melawan Persikad Depok dan Persiraja Banda Aceh. Syamsuddin yakin dan optimistis, penampilan Sumsel United akan lebih baik lagi kedepannya.</p>
                        <p>"Saya pikir tim kita sebentar lagi sudah mulai mencair, karena tadi sudah main bagus. Tim kita juga sudah bisa tampil full dipertandingan tadi," ucapnya.</p>
                        HTML,
            'published_at' => '2025-09-23 10:30:00',
            'author' => 'Redaksi Sumsel United',
            'image_path' => 'storage/news/sumsel-vs-persiraja.jpg',
            'is_visible' => true,
        ]);

        $matches = [
            [
                'competition_name' => 'Liga 1',
                'match_date' => '2025-09-22',
                'home_team' => 'Sumsel United',
                'away_team' => 'Persiraja Banda Aceh',
                'stadium' => 'Gelora Sriwijaya Jakabaring',
                'tickets_available' => false,
                'status' => 'cancelled',
            ],
            [
                'competition_name' => 'Liga 2',
                'match_date' => '2025-09-15',
                'home_team' => 'Persikad Depok',
                'away_team' => 'Sumsel United',
                'stadium' => 'Stadion Merpati',
                'tickets_available' => false,
                'status' => 'postponed',
            ],
            [
                'competition_name' => 'Liga 1',
                'match_date' => '2025-09-29',
                'home_team' => 'Sumsel United',
                'away_team' => 'PSMS Medan',
                'stadium' => 'Gelora Sriwijaya Jakabaring',
                'tickets_available' => true,
                'status' => 'scheduled',
            ],
        ];

        foreach ($matches as $match) {
            MatchSchedule::create($match);
        }

        $results = [
            [
                'match_schedule_id' => 1, // Sumsel vs Persiraja
                'home_score' => 3,
                'away_score' => 2,
                'goal_scorers' => json_encode([
                    ['name' => 'Diego Dall\'Oca', 'minute' => 12],
                    ['name' => 'Rachmad Hidayat', 'minute' => 45],
                    ['name' => 'Ahmad Rizki', 'minute' => 78],
                ]),
                'referee' => 'Budi Santoso',
            ],
            [
                'match_schedule_id' => 2, // Persikad vs Sumsel
                'home_score' => 1,
                'away_score' => 2,
                'goal_scorers' => json_encode([
                    ['name' => 'Diego Dall\'Oca', 'minute' => 33],
                    ['name' => 'Rachmad Hidayat', 'minute' => 67],
                ]),
                'referee' => 'Andi Wijaya',
            ],
        ];

        foreach ($results as $result) {
            MatchResult::create($result);
        }

        $players = [
            [
                'name' => 'Diego Dall\'Oca',
                'birth_date' => '1998-03-12',
                'position' => 'midfielder',
                'nationality' => 'Argentina',
                'jersey_number' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Rachmad Hidayat',
                'birth_date' => '1992-07-21',
                'position' => 'defender',
                'nationality' => 'Indonesia',
                'jersey_number' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Ahmad Rizki',
                'birth_date' => '2000-11-05',
                'position' => 'goalkeeper',
                'nationality' => 'Indonesia',
                'jersey_number' => 7,
                'is_active' => true,
            ],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }

        $albums = [
            ['title' => 'Debut Sumsel United', 'description' => 'Momen perdana tim di Pegadaian Championship 2025/26'],
            ['title' => 'Kemenangan Dramatis', 'description' => 'Laga melawan Persiraja Banda Aceh'],
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }

        $photos = [
            [
                'album_id' => 1,
                'image_path' => 'storage/albums/debut1.jpg',
                'caption' => 'Pemain memasuki lapangan',
                'order' => 1,
            ],
            [
                'album_id' => 1,
                'image_path' => 'storage/albums/debut2.jpg',
                'caption' => 'Kick-off perdana',
                'order' => 2,
            ],
            [
                'album_id' => 2,
                'image_path' => 'storage/albums/dramatis1.jpg',
                'caption' => 'Gol penentu kemenangan',
                'order' => 1,
            ],
        ];

        foreach ($photos as $photo) {
            Photo::create($photo);
        }

        $videos = [
            [
                'title' => 'Highlight Sumsel vs Persiraja',
                'youtube_url' => 'https://www.youtube.com/watch?v=abc123xyz',
                'published_at' => '2025-09-23 21:00:00',
            ],
            [
                'title' => 'Gol Spektakuler Diego Dall\'Oca',
                'youtube_url' => 'https://www.youtube.com/watch?v=def456uvw',
                'published_at' => '2025-09-24 10:00:00',
            ],
        ];

        foreach ($videos as $video) {
            Video::create($video);
        }
    }
}
