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
        $penduduk->noKtp = "99";
        $penduduk->nama = "Admin Admin";
        $penduduk->tglLahir = "01-01-1970";
		$penduduk->tmptLahir = "Bandung";
        $penduduk->jk = 1;
        $penduduk->agama = "Admin";
        $penduduk->alamat = "Jl. Taman Sari No.55, Lb. Siliwangi, Coblong, Kota Bandung, Jawa Barat 40132, Indonesia";
		$penduduk->noTelp = "0222502898";
        $penduduk->save();
        
        $penduduk = new Penduduk();
        $penduduk->noKtp = "1237687314692234";
        $penduduk->nama = "Febby Febriansyah";
        $penduduk->tglLahir = "17-02-1996";
		$penduduk->tmptLahir = "Bandung";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Randusari Raya VII  No.30D";
		$penduduk->noTelp = "081377881234";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1308304328420859";
        $penduduk->nama = "Agnes Monica";
        $penduduk->tglLahir = "20-04-1986";
		$penduduk->tmptLahir = "Jakarta";
        $penduduk->jk = 2;
        $penduduk->agama = "Kristen";
        $penduduk->alamat = "jl. Jakarta No.40";
		$penduduk->noTelp = "085689001290";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "3019847323109487";
        $penduduk->nama = "Andhika Gilang";
        $penduduk->tglLahir = "12-02-1996";
		$penduduk->tmptLahir = "Bandung";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
		$penduduk->noTelp = "081898910923";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "8976847323100087";
        $penduduk->nama = "Rich Chiga";
        $penduduk->tglLahir = "12-02-1992";
        $penduduk->tmptLahir = "Bogor";
        $penduduk->jk = 1;
        $penduduk->agama = "Kristen";
        $penduduk->alamat = "jl. Puncak No.92";
        $penduduk->noTelp = "081829382343";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "3728423794823449";
        $penduduk->nama = "Bambang Harimurti";
        $penduduk->tglLahir = "10-04-1986";
        $penduduk->tmptLahir = "Semarang";
        $penduduk->jk = 1;
        $penduduk->agama = "Islam";
        $penduduk->alamat = "jl. Ahmadyani No.12";
        $penduduk->noTelp = "082142342343";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1283972147342943";
        $penduduk->nama = "Dian Antro Raharjo";
        $penduduk->tglLahir = "20-04-1999";
        $penduduk->tmptLahir = "Malang";
        $penduduk->jk = 2;
        $penduduk->agama = "Hindu";
        $penduduk->alamat = "jl. Malang No.42";
        $penduduk->noTelp = "082734384738";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1238935247895347";
        $penduduk->nama = "Surya Caang";
        $penduduk->tglLahir = "14-04-1989";
        $penduduk->tmptLahir = "Semarang";
        $penduduk->jk = 1;
        $penduduk->agama = "Islam";
        $penduduk->alamat = "jl. Bukit Sinai No.16";
        $penduduk->noTelp = "087363472840";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1129824720347368";
        $penduduk->nama = "Renanda Monica";
        $penduduk->tglLahir = "20-04-1996";
        $penduduk->tmptLahir = "Bandung";
        $penduduk->jk = 2;
        $penduduk->agama = "Islam";
        $penduduk->alamat = "jl. Katamso No.30";
        $penduduk->noTelp = "083264826230";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1238424499089962";
        $penduduk->nama = "Ajeng Jeng Jeng";
        $penduduk->tglLahir = "20-04-1994";
        $penduduk->tmptLahir = "Bogor";
        $penduduk->jk = 2;
        $penduduk->agama = "Kristen";
        $penduduk->alamat = "jl. Suryasumantri No.12";
        $penduduk->noTelp = "089732846294";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1927432546467589";
        $penduduk->nama = "Andhika Rusmandi";
        $penduduk->tglLahir = "20-04-1988";
        $penduduk->tmptLahir = "Padang";
        $penduduk->jk = 1;
        $penduduk->agama = "Islam";
        $penduduk->alamat = "jl. Padang No.120";
        $penduduk->noTelp = "083442487868";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1234728074243257";
        $penduduk->nama = "Fada Daud";
        $penduduk->tglLahir = "20-04-1987";
        $penduduk->tmptLahir = "Yogyakarta";
        $penduduk->jk = 1;
        $penduduk->agama = "Islam";
        $penduduk->alamat = "jl. Malioboro No.40C";
        $penduduk->noTelp = "087652362840";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = "1264138473429473";
        $penduduk->nama = "Rika Mustang";
        $penduduk->tglLahir = "20-04-1980";
        $penduduk->tmptLahir = "Depok";
        $penduduk->jk = 2;
        $penduduk->agama = "Kristen";
        $penduduk->alamat = "jl. Alun-alun No.40";
        $penduduk->noTelp = "087576576580";
        $penduduk->save();

        $penduduk = new Penduduk();
        $penduduk->noKtp = 12;
        $penduduk->nama = "asdasd";
        $penduduk->tglLahir = "12-02-1996";
        $penduduk->jk = 1;
        $penduduk->agama = "islam";
        $penduduk->alamat = "jl. Astana Anyar No.20";
        $penduduk->save();       

        $penduduk = new Penduduk();
        $penduduk->noKtp = 14999;
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
        $penduduk->noKtp = 1255;
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
    }
}
