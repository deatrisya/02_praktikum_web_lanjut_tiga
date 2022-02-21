<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return ('Selamat datang di halaman Utama');
    }

    public function games1() {
        return ('Halaman Product Games Marbel');
    }
    public function games2(){
        return ('Halaman Product Games Marbel and Friends Kids Games');
    }
    public function games3(){
        return ("Halaman Product Games Riri's Story Book");
    }
    public function games4(){
        return ('Halaman Product Games Kolak Kids Song');
    }
    public function news($id){
        return ('Halaman Berita dengan ID berita ' .$id);
    }

    public function program1(){
        return ('Program karir');
    }
    public function program2(){
        return ('Program magang');
    }
    public function program3(){
        return ('Program kunjungan industri');
    }

    public function about(){
        return ('Ini halaman about us');
    }
}
