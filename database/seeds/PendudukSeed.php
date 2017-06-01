<?php

use Illuminate\Database\Seeder;
use App\Penduduk;

class PendudukSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penduduk = new Penduduk();
        $penduduk->noKtp = 1237687314692234;
        $penduduk->nama = "Febby Febriansyah";
        $penduduk->tglLahir = "17-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Randusari Raya VII  No.30D";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 1308304328420859;
        $penduduk->nama = "Agnes Monica";
        $penduduk->tglLahir = "20-04-1986";
        $penduduk->jk = 2;
        $penduduk->agama = "Kristen";
        $penduduk->alamat = "jl. Jakarta No.40";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 3019847323109487;
        $penduduk->nama = "Andhika Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();
<<<<<<< HEAD

        $penduduk = new Penduduk();
        $penduduk->noKtp = 12;
        $penduduk->nama = "asdasd";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();       

        $penduduk = new Penduduk();
        $penduduk->noKtp = 14;
        $penduduk->nama = "12 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save(); 

        $penduduk = new Penduduk();
        $penduduk->noKtp = 1214;
        $penduduk->nama = "22211";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 314412413;
        $penduduk->nama = "22224 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 8;
        $penduduk->nama = "8 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 9;
        $penduduk->nama = "9 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 10;
        $penduduk->nama = "10 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 11;
        $penduduk->nama = "11 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 12;
        $penduduk->nama = "12 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 13;
        $penduduk->nama = "13 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 14;
        $penduduk->nama = "14 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 15;
        $penduduk->nama = "15 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 16;
        $penduduk->nama = "16 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 17;
        $penduduk->nama = "17 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 18;
        $penduduk->nama = "18 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 19;
        $penduduk->nama = "19 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 20;
        $penduduk->nama = "20 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 21;
        $penduduk->nama = "21 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 22;
        $penduduk->nama = "22 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 23;
        $penduduk->nama = "23 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 24;
        $penduduk->nama = "24 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 25;
        $penduduk->nama = "25 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 26;
        $penduduk->nama = "26 Gilang";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();
=======
>>>>>>> 7d27c98e7c03d349487d5ff0976548ce9f351fcd
    }
}
