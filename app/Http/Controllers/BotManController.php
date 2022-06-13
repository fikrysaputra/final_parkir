<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
            if ($message == 'hi') {
                $this->askName($botman);
            }elseif ($message =='Info Parkir') {
                $botman->reply("Di Telkom University ada 7 tempat parkir ! FIK, FIT, TUCH, Gedung D, Gedung K, MSU");
            }elseif($message =='Rekomendasi Parkir'){
                $botman->reply("Aku suka parkir di GKU, meskipun panas tapi tempat parkirnya luas lho buat motor dan mobil");  
            }elseif($message =='Parkir Sejuk'){
                $botman->reply("Menurut aku, parkir di MSU sejuk tuh. Bisa ngadem di Masjid juga yekan");  
            }elseif($message =='Alamat Telkom'){
                $botman->reply("Telkom University, Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257");
            }elseif($message =='Fakultas Informatika di mana?'){
                $botman->reply("Gedung D");
            }elseif($message =='Asrama Putra berapa Gedung?'){
                $botman->reply("10 Gedung");
            }elseif($message =='Asrama Putri berapa Gedung?'){
                $botman->reply("8 Gedung");
            }elseif($message =='GKU Berapa lantai?'){
                $botman->reply("10 lantai");
            }elseif($message =='mana'){
                $botman->reply("mana apanya ?");
            }elseif($message =='game'){
                $botman->reply("Game apa ?");
            }elseif($message =='Praktikum'){
                $botman->reply("Rekayasa Perangkat Lunak - Desain dan Implementasi");
            }elseif($message =='igracias'){
                $botman->reply("https://igracias.telkomuniversity.ac.id/");
            }elseif($message =='LMS'){
                $botman->reply("https://lms.telkomuniversity.ac.id/");
            }elseif($message =='Facebook'){
                $botman->reply("Fesbuk siapa nich");
            }elseif($message =='gambar'){
                $botman->reply("aku gak bisa ngirim gambar, jangan paksa aku");
            }
            
            
            else{
                $botman->reply("Wah aku tidak mengerti, coba ketik 'hi' agar aku menyapamu atau 'Tanya' untuk cara gunain aku ;) ");
            }
        });
        
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Eh maaf aku lupa kamu siapa, ketik lagi dong!', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Hallo, aku sayang kamu '.$name);
        });
    }
}