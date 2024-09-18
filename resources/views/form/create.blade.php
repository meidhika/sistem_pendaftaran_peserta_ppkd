@extends('layouts.form')
@section('content')
    <form action="{{ route('formulir.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <section>
            <div class="href-target" id="home"></div>
            <h1 class="package-name">Pendaftaran Program Reguler Angkatan III Tahun 2024</h1>
            <p>
                Pusat Pelatihan Kerja Daerah jakarta Pusat membuka kembali pelatihan kerja untuk meningkatkan kompetensi
                warga
                DKI Jakarta agar mampu bersaing di dunia kerja. <br>
                Adapun Pelatiahan yang diselenggarakan adalah :
            </p>

            <div class="row">
                <div class="col-sm-6">
                    <ol>
                        @foreach ($jurusan1 as $key => $item1)
                            <li>{{ $key + 1 }}. {{ $item1->nama_jurusan }}</li>
                        @endforeach
                    </ol>
                </div>
                <div class="col-sm-6">
                    <ol>
                        @foreach ($jurusan2 as $key => $item2)
                            <li>{{ $key + 1 }}. {{ $item2->nama_jurusan }}</li>
                        @endforeach
                    </ol>
                </div>
            </div><br>

            <p>Sebelum melanjutkan ke halaman berikutnya, pastikan syarat pendaftaran berikut sudah disiapkan:</p><br>
            <ol>
                <li>1. Softcopy KTP DKI Jakarta</li>
                <li>2. Softcopy Kartu Keluarga</li>
                <li>3. Softcopy Ijazah Terakhir</li>
                <li>4. Softcopy Pas foto 3 x 4 Latar Belakang Merah</li>
                <li>5. Softcopy Sertifikat Vaksin Covid-19</li>
                <li>6. Surat Keterangan Domisili DKI Jakarta Bagi KTP Luar DKI jakarta</li>
            </ol>
            <strong>
                <p>*Semua persyaratan tersebut diupload di form pendaftaran</p>
            </strong><br>
            <pre>
        Waktu Pelatihan : Daftar Segera
        Hari Pelatihan : Senin - Jumat
        Pukul : 08.00 - 15.00 WIB
        </pre><br>

            <strong>
                *Keputusan hasil seleksi berlaku mutlak dan tidak bisa diganggu gugat
            </strong>

        </section>

        <section>
            <div class="href-target" id="ppkd-program"></div>
            <h1>
                <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 32 32"
                    xml:space="preserve">
                    <style type="text/css">
                        .feather_een {
                            fill: #111918;
                        }

                        .st0 {
                            fill: #0B1719;
                        }
                    </style>
                    <path class="feather_een"
                        d="M20,12.5L20,12.5c0,0.276,0.224,0.5,0.5,0.5h7c0.276,0,0.5-0.224,0.5-0.5v0c0-0.276-0.224-0.5-0.5-0.5
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                h-7C20.224,12,20,12.224,20,12.5z M20.5,15h7c0.276,0,0.5-0.224,0.5-0.5v0c0-0.276-0.224-0.5-0.5-0.5h-7c-0.276,0-0.5,0.224-0.5,0.5
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                v0C20,14.776,20.224,15,20.5,15z M20.5,17h7c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5h-7
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                c-0.276,0-0.5,0.224-0.5,0.5l0,0C20,16.776,20.224,17,20.5,17z M20.5,19h7c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                h-7c-0.276,0-0.5,0.224-0.5,0.5l0,0C20,18.776,20.224,19,20.5,19z M16,18v-6c0-0.552-0.448-1-1-1h-1c-0.552,0-1,0.448-1,1v6h-1v-4
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                c0-0.552-0.448-1-1-1h-1c-0.552,0-1,0.448-1,1v4H8v-5c0-0.552-0.448-1-1-1H6c-0.552,0-1,0.448-1,1v5H4.5C4.224,18,4,18.224,4,18.5
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                l0,0C4,18.776,4.224,19,4.5,19h12c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5H16z M7,18H6v-5h1V18z M11,18h-1v-4h1V18
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                z M15,18h-1v-6h1V18z M29,4H3C1.343,4,0,5.343,0,7v16c0,1.657,1.343,3,3,3h9v3h-1.5c-0.276,0-0.5,0.224-0.5,0.5l0,0
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                c0,0.276,0.224,0.5,0.5,0.5h11c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5H20v-3h9c1.657,0,3-1.343,3-3V7
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                C32,5.343,30.657,4,29,4z M19,29h-6v-3h6V29z M31,23c0,1.105-0.895,2-2,2H3c-1.105,0-2-0.895-2-2V7c0-1.105,0.895-2,2-2h26
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                c1.105,0,2,0.895,2,2V23z" />
                </svg>
                Program PPKD
            </h1>
            <div class="nice-form-group">
                <label>Select</label>
                <select name="id_gelombang" id="">
                    <option>Please select a value</option>
                    @foreach ($gelombangs as $gelombang)
                        <option value="{{ $gelombang->id }}">{{ $gelombang->nama_gelombang }}</option>
                    @endforeach
                </select>
            </div>
            <fieldset class="nice-form-group">
                <label for="">Kejuruan Di PPKD Jakarta Pusat</label>
                <div class="row">
                    <div class="col-sm-6">
                        @foreach ($jurusan1 as $key => $item1)
                            <div class="nice-form-group">
                                <input type="radio" name="id_jurusan" id="{{ $item1->nama_jurusan }}"
                                    value="{{ $item1->id }}" />
                                <label for="{{ $item1->nama_jurusan }}">{{ $item1->nama_jurusan }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-sm-6">
                        @foreach ($jurusan2 as $item2)
                            <div class="nice-form-group">
                                <input type="radio" name="id_jurusan" id="{{ $item2->nama_jurusan }}"
                                    value="{{ $item2->id }}" />
                                <label for="{{ $item2->nama_jurusan }}">{{ $item2->nama_jurusan }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </fieldset>
            <fieldset class="nice-form-group">
                <label for="">Mendapat Info Pelatihan Dari? *</label>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="nice-form-group">
                            <input type="checkbox" id="check-1" name="info_pelatihan[]" value="instagram" />
                            <label for="check-1">Instagram</label>
                        </div>

                        <div class="nice-form-group">
                            <input type="checkbox" id="check-2" name="info_pelatihan[]" value="website" />
                            <label for="check-2">Website</label>
                        </div>
                        <div class="nice-form-group">
                            <input type="checkbox" id="check-3" name="info_pelatihan[]" value="whatsapp" />
                            <label for="check-3">Grup WhatsApp</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="nice-form-group">
                            <input type="checkbox" id="check-4" name="info_pelatihan[]" value="teman" />
                            <label for="check-4">Teman</label>
                        </div>
                        <div class="nice-form-group">
                            <input type="checkbox" id="check-5" name="info_pelatihan[]" value="musrembang" />
                            <label for="check-5">Musrembang</label>
                        </div>
                        <div class="nice-form-group">
                            <input type="checkbox" id="check-6" name="info_pelatihan[]" value="jobfair" />
                            <label for="check-6">Job Fair</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="nice-form-group mb-3">
                <label>Screenshot Follow Instgaram PPKD</label>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <div id="ss_instagramPreview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                </div>
                <input required type="file" name="ss_instagram"
                    onchange="previewFile(event, 'ss_instagramPreview')" /><br>
                <small>
                    * Pengumuman selanjutnya akan diinformasikan di instagram @ppkdjp.<br>
                    Silahkan follow IG @ppkdjp dan Youtube PPKD Jakarta Pusat,<br>
                    lalu screenshot dan upload
                </small>
            </div>


        </section>

        <section>
            <div class="href-target" id="identity"></div>
            <h1>
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="6" r="4" stroke="#1C274C" stroke-width="1.5" />
                    <path
                        d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634"
                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                Identitas Diri
            </h1>
            <div class="nice-form-group">
                <label for="email">Email</label>
                <input type="text" placeholder="Email Anda" id="email" name="email">
            </div>

            <div class="nice-form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" placeholder="Nama Lengkap" id="nama_lengkap" name="nama_lengkap">
            </div>

            <div class="nice-form-group">
                <label for="nik">NIK</label>
                <input type="text" placeholder="NIK Anda" id="nik" name="nik">
            </div>
            <div class="nice-form-group">
                <label for="kartu_keluarga">Nomor Kartu Keluarga</label>
                <input type="text" placeholder="No Kartu Keluarga Anda" id="kartu_keluarga" name="kartu_keluarga">
            </div>
            <fieldset class="nice-form-group">
                <label for="">Jenis Kelamin</label>
                <div class="nice-form-group">
                    <input type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" />
                    <label for="laki-laki">Laki-Laki</label>
                </div>

                <div class="nice-form-group">
                    <input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" />
                    <label for="perempuan">Perempuan</label>
                </div>
            </fieldset>
            <div class="nice-form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
            </div>
            <div class="nice-form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="nice-form-group">
                <label for="nomor_hp">Nomor Hp</label>
                <input type="text" placeholder="Nomor Handphone" id="nomor_hp" name="nomor_hp">
            </div>
            <fieldset class="nice-form-group">
                <label for="">Apakah Anda Penyandang Disabilitas</label>
                <div class="nice-form-group">
                    <input type="radio" name="disabilitas" id="ya_disabilitas" value="ya" />
                    <label for="ya_disabilitas">Ya</label>
                </div>

                <div class="nice-form-group">
                    <input type="radio" name="disabilitas" id="tidak_disabilitas" value="tidak" />
                    <label for="tidak_disabilitas">Tidak</label>
                </div>
            </fieldset>
        </section>

        <section>
            <div class="href-target" id="education"></div>
            <h1>
                <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px"
                    viewBox="0 0 465.185 465.185" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M255.183,26.388c-1.259-0.279-2.452-0.355-3.601-0.335c-2.315-1-4.961-1.468-7.921-1.051
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    C157.708,37.138,77.984,70.77,6.268,119.203c-10.326,6.972-6.568,20.84,1.716,25.044c1.028,2.184,2.679,4.209,5.21,5.799
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c24.844,15.66,51.1,27.421,78.241,36.435c-0.363,1.782-0.602,3.62-0.606,5.626c0,0.193,0.051,0.371,0.056,0.559
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-0.711,1.478-1.251,3.108-1.439,4.981c-2.658,26.284-3.953,52.537-2.772,78.947c0.386,8.668,7.17,13.102,13.926,13.33
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c15.998,7.941,32.535,14.249,49.36,19.032c1.473,19.9,2.897,39.807,4.235,59.717c-19.807,10.491-29.906,28.706-25.89,50.638
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c0.076,4.697,2.562,9.212,6.779,11.908c10.229,6.535,22.516,10.231,34.693,8.815c0.114-0.016,0.224-0.051,0.34-0.066
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c1.559,0.132,3.156,0.041,4.725-0.432c12.9-3.864,24.725-11.791,30.439-24.369c1.036-2.275,1.554-4.662,1.603-6.992
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c1.066-1.904,1.731-4.18,1.673-6.922c-0.223-10.704-3.577-21.145-11.671-28.497c-4.436-4.032-9.689-6.632-15.277-8.227
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-1.115-16.392-2.267-32.778-3.468-49.165c68.223,12.182,139.543-0.279,200.854-36.511c2.976-1.757,4.824-4.077,5.809-6.606
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c2.291-2.219,3.824-5.362,3.824-9.511c0-23.557,0.102-47.108,1.387-70.64c0.076-1.468-0.051-2.803-0.33-4.022
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c0.208-0.945,0.33-1.91,0.33-2.905v-6.926c0-0.355-0.082-0.701-0.112-1.056c22.095-8.871,43.844-18.87,65.277-29.925
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c3.972-2.046,6.073-5.078,6.744-8.343c4.072-4.91,5.017-12.04-1.174-17.564C402.855,69.713,329.961,42.962,255.183,26.388z
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    M114.129,265.799c-0.447-22.643,0.706-45.199,2.978-67.771c0.546-1.127,0.952-2.32,1.17-3.585
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c7.851,2.072,15.777,3.88,23.732,5.581c1.841,26.507,3.786,53.004,5.766,79.506C136.353,275.762,125.095,271.253,114.129,265.799z
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    M178.876,393.922c0.297,0.457,0.579,0.919,0.838,1.396c-0.099,0.035,0.764,2.138,0.848,2.438c0.079,0.426,0.14,0.741,0.188,0.965
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c0.061,0.843,0.109,1.69,0.109,2.539c0.005,0.243,0.066,0.446,0.082,0.686c-0.731,1.497-1.519,2.939-2.438,4.336
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-0.12,0.132-0.229,0.259-0.412,0.473c-0.706,0.792-1.513,1.487-2.308,2.184c-0.135,0.091-0.234,0.162-0.417,0.289
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-0.998,0.69-2.069,1.265-3.136,1.844c-0.183,0.096-1.285,0.568-1.871,0.822c-0.51,0.183-1.031,0.346-1.551,0.508
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-5.122,0.457-9.537-0.219-13.919-2.052c-0.396-8.546,5.195-13.522,13.561-17.899c1.086-0.569,1.975-1.234,2.788-1.935
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c0.759,0.146,2.054,0.35,2.138,0.37c0.17,0.041,1.747,0.614,2.308,0.772c0.815,0.502,1.97,1.233,2.224,1.319
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    C178.274,393.338,178.668,393.744,178.876,393.922z M362.308,192.107c-1.178,21.683-1.351,43.376-1.371,65.085
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-56.619,32.163-122.471,42.827-184.894,29.949c-2.039-27.273-4.044-54.547-5.959-81.826c25.527,4.189,51.407,6.916,77.315,8.851
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c1.249,0.208,2.584,0.3,4.103,0.112c38.349-4.956,75.226-14.219,111.046-26.751c0.086,0.472,0.218,0.929,0.35,1.392
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    C362.598,189.904,362.369,190.95,362.308,192.107z M251.501,186.572c-0.421,0.056-0.787,0.193-1.193,0.274
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-0.522-0.091-1.021-0.233-1.579-0.274c-23.869-1.757-47.689-4.194-71.188-7.921c20.611-18.987,41.553-37.602,62.972-55.695
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c13.665-11.542-6.033-31.037-19.588-19.586c-25.344,21.409-50.166,43.401-74.365,66.09c-1.226,0.681-2.287,1.594-3.196,2.676
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c-36.978-8.272-72.768-20.683-106.178-40.024c63.97-40.339,133.616-68.212,208.816-79.603c0.594,0.208,1.152,0.447,1.817,0.6
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    c64.39,14.269,128.138,35.774,180.192,76.896C372.148,157.572,313.636,178.539,251.501,186.572z" />
                        </g>
                    </g>
                </svg>
                Pendidikan
            </h1>
            <fieldset class="nice-form-group">
                <label for="">Pendidikan terakhir</label>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="nice-form-group">
                            <input value="Tidak-Sekolah" type="radio" name="pendidikan_terakhir" id="tidak_sekolah" />
                            <label for="tidak_sekolah">Tidak Sekolah</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="SD" type="radio" name="pendidikan_terakhir" id="sd" />
                            <label for="sd">SD</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="SMP" type="radio" name="pendidikan_terakhir" id="smp" />
                            <label for="smp">SMP</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="SMA" type="radio" name="pendidikan_terakhir" id="sma" />
                            <label for="sma">SMA</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="SMK" type="radio" name="pendidikan_terakhir" id="smk" />
                            <label for="smk">SMK</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="nice-form-group">
                            <input value="D1" type="radio" name="pendidikan_terakhir" id="d1" />
                            <label for="d1">D1</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="D2" type="radio" name="pendidikan_terakhir" id="d2" />
                            <label for="d2">D2</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="D3" type="radio" name="pendidikan_terakhir" id="d3" />
                            <label for="d3">D3</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="S1" type="radio" name="pendidikan_terakhir" id="s1" />
                            <label for="s1">S1</label>
                        </div>
                        <div class="nice-form-group">
                            <input value="S2-S3" type="radio" name="pendidikan_terakhir" id="s2-s3" />
                            <label for="s2-s3">S2/S3</label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="nice-form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <input type="text" placeholder="Nama Sekolah" name="nama_sekolah" id="nama_sekolah" />
            </div>
            <div class="nice-form-group">
                <label for="kejuruan">Kejuruan</label>
                <small>Contoh : IPA, IPS, Manajemen, RPL, dll</small>
                <input type="text" placeholder="Kejuruan" name="kejuruan" id="kejuruan" />
            </div>
        </section>


        <section>
            <div class="href-target" id="activity"></div>
            <h1>
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 6L21 6.00072M11 12L21 12.0007M11 18L21 18.0007M3 11.9444L4.53846 13.5L8 10M3 5.94444L4.53846 7.5L8 4M4.5 18H4.51M5 18C5 18.2761 4.77614 18.5 4.5 18.5C4.22386 18.5 4 18.2761 4 18C4 17.7239 4.22386 17.5 4.5 17.5C4.77614 17.5 5 17.7239 5 18Z"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Activitas
            </h1>
            <fieldset class="nice-form-group">
                <label for="">Aktivitas Anda Saat Ini</label>
                <div class="nice-form-group">
                    <input type="radio" name="aktivitas_saat_ini" id="sekolah" value="sekolah" />
                    <label for="sekolah">Sekolah / Kuliah</label>
                </div>

                <div class="nice-form-group">
                    <input type="radio" name="aktivitas_saat_ini" id="cari_kerja" value="cari_kerja" />
                    <label for="cari_kerja">Pencari Kerja, Belum Ada Kegiatan di Pagi dan Siang Hari</label>
                </div>
                <div class="nice-form-group">
                    <input type="radio" name="aktivitas_saat_ini" id="bekerja" value="bekerja_malam" />
                    <label for="bekerja">Bekerja Malam Hari</label>
                </div>
            </fieldset>
        </section>

        <section>
            <div class="href-target" id="alamat"></div>
            <h1>
                <svg width="800px" height="800px" viewBox="0 0 1024 1024" fill="#000000" class="icon"
                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z"
                        fill="" />
                </svg>
                Alamat
            </h1>
            <fieldset class="nice-form-group">
                <label for="">Apakah anda tinggal di rumah susun? *</label>
                <div class="nice-form-group">
                    <input type="radio" name="rumah_susun" id="ya_susun" value="ya" />
                    <label for="ya_susun">Ya</label>
                </div>

                <div class="nice-form-group">
                    <input type="radio" name="rumah_susun" id="tidak_susun" value="tidak" />
                    <label for="tidak_susun">tidak</label>
                </div>
            </fieldset>
            <div class="nice-form-group">
                <label for="alamat_rumah">Alamat Rumah Sesuai KTP*</label>
                <small>Nama Jalan dan Nomor Rumah</small>
                <input type="text" placeholder="Alamat Rumah" name="alamat_rumah" id="alamat_rumah" />
            </div>
            <div class="nice-form-group">
                <label for="rt">RT*</label>
                <input type="text" placeholder="RT" name="rt" id="rt" />
            </div>
            <div class="nice-form-group">
                <label for="rw">RW*</label>
                <input type="text" placeholder="RW" name="rw" id="rw" />
            </div>
            <div class="nice-form-group">
                <label for="kelurahan">Kelurahan*</label>
                <input type="text" placeholder="Kelurahan" name="kelurahan" id="kelurahan" />
            </div>
            <div class="nice-form-group">
                <label for="kecamatan">Kecamatan*</label>
                <input type="text" placeholder="Kecamatan" name="kecamatan" id="kecamatan" />
            </div>
            <fieldset class="nice-form-group">
                <label for="">Kota Madya*</label>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="nice-form-group">
                            <input type="radio" name="kota_madya" value="jakarta_pusat" id="jakarta_pusat" />
                            <label for="jakarta_pusat">Jakarta Pusat</label>
                        </div>

                        <div class="nice-form-group">
                            <input type="radio" name="kota_madya" value="jakarta_utara" id="jakarta_utara" />
                            <label for="jakarta_utara">Jakarta Utara</label>
                        </div>
                        <div class="nice-form-group">
                            <input type="radio" name="kota_madya" value="jakarta_selatan" id="jakarta_selatan" />
                            <label for="jakarta_selatan">Jakarta Selatan</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="nice-form-group">
                            <input type="radio" name="kota_madya" value="jakarta_timur" id="jakarta_timur" />
                            <label for="jakarta_timur">Jakarta Timur</label>
                        </div>

                        <div class="nice-form-group">
                            <input type="radio" name="kota_madya" value="jakarta_barat" id="jakarta_barat" />
                            <label for="jakarta_barat">Jakarta Barat</label>
                        </div>
                        <div class="nice-form-group">
                            <input type="radio" name="kota_madya" value="kepulauan_seribu" id="kepulauan_seribu" />
                            <label for="kepulauan_seribu">Kepulauan Seribu</label>
                        </div>
                    </div>
                </div>

            </fieldset>
        </section>


        <section>
            <div class="href-target" id="upload-file"></div>
            <h1>
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5" stroke="#1C274C" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M8 22.0002H16C18.8284 22.0002 20.2426 22.0002 21.1213 21.1215C22 20.2429 22 18.8286 22 16.0002V15.0002C22 12.1718 22 10.7576 21.1213 9.8789C20.3529 9.11051 19.175 9.01406 17 9.00195M7 9.00195C4.82497 9.01406 3.64706 9.11051 2.87868 9.87889C2 10.7576 2 12.1718 2 15.0002L2 16.0002C2 18.8286 2 20.2429 2.87868 21.1215C3.17848 21.4213 3.54062 21.6188 4 21.749"
                        stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                Upload File
            </h1>
            <div class="nice-form-group mb-3">
                <label>KTP (Kartu Tanda Penduduk)</label>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <div id="ktp_preview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                </div>
                <input required type="file" name="file_ktp" onchange="previewFile(event, 'ktp_preview')" />

            </div>
            <div class="nice-form-group mb-3">
                <label>Surat Keterangan Domisili DKI Jakarta</label>
                <small>Untuk yang berKTP Luar DKI Jakarta</small>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <div id="domisili_preview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                </div>
                <input required type="file" name="file_domisili" onchange="previewFile(event, 'domisili_preview')" />
            </div>
            <div class="nice-form-group mb-3">

                <label>KK (Kartu Keluarga)</label>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <div id="kk_preview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                </div>
                <input required type="file" name="file_kk" onchange="previewFile(event, 'kk_preview')" />
            </div>
            <div class="nice-form-group mb-3">
                <label>Ijasah Terakhir</label>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <div id="ijasah_preview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                </div>
                <input required type="file" name="file_ijasah" onchange="previewFile(event, 'ijasah_preview')" />
            </div>
            <div class="nice-form-group mb-3">
                <label>Upload Foto Latar Belakang Merah</label>
                <small>(Mohon perhatikan kualitas foto seperti CONTOH di bawah ini)</small>
                <div id="photo_preview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                    <img src="{{ asset('img/latarbelakang-merah.jpg') }}" alt="" width="150px">
                </div>
                <label>Ukuran 3 x 4</label>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <input required type="file" name="photo" onchange="previewFile(event, 'photo_preview')" />
            </div>
            <div class="nice-form-group mb-3">
                <label>Sertifikat Vaksin Covid-19</label>
                <small>Upload 1 Supported file: PDF, drawing, or image. Max 1 Mb</small>
                <div id="vaksin_preview" class="my-3">
                    <!-- Preview akan muncul di sini -->
                </div>
                <input required type="file" name="file_vaksin" onchange="previewFile(event, 'vaksin_preview')" />
            </div>
        </section>

        <section>
            <div class="href-target" id="persetujuan"></div>
            <h1>
                <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 211.931 211.931" xml:space="preserve">
                    <path
                        d="M145.49,199.781H4c-2.209,0-4-1.791-4-4V16.149c0-2.209,1.791-4,4-4h141.49c2.209,0,4,1.791,4,4v43.488l39.477-39.477
                                                                                                                                                                                                                                                                                                                                                                                                                         c1.563-1.562,4.095-1.562,5.657,0l16.136,16.136c1.562,1.563,1.562,4.095,0,5.657l-61.27,61.269v92.559
                                                                                                                                                                                                                                                                                                                                                                                                                         C149.49,197.99,147.699,199.781,145.49,199.781z M8,191.781h133.49v-80.547l-19.313,19.314c-0.514,0.514-1.159,0.878-1.865,1.054
                                                                                                                                                                                                                                                                                                                                                                                                                         l-21.464,5.329c-0.319,0.079-0.643,0.118-0.964,0.118c-0.004,0-0.007,0-0.011,0c-1.048,0-2.069-0.412-2.829-1.171
                                                                                                                                                                                                                                                                                                                                                                                                                         c-0.992-0.992-1.392-2.431-1.054-3.792l5.329-21.464c0.175-0.706,0.54-1.35,1.054-1.865l41.118-41.117V20.149H8V191.781z
                                                                                                                                                                                                                                                                                                                                                                                                                         M106.826,113.626l-3.459,13.937l13.927-3.458l84.98-84.98l-10.479-10.479L148.491,71.95c-0.055,0.063-0.113,0.125-0.172,0.184
                                                                                                                                                                                                                                                                                                                                                                                                                         L106.826,113.626z M120.084,178.152H25.106c-2.209,0-4-1.791-4-4s1.791-4,4-4h94.978c2.209,0,4,1.791,4,4
                                                                                                                                                                                                                                                                                                                                                                                                                         S122.293,178.152,120.084,178.152z M120.084,155.434H25.106c-2.209,0-4-1.791-4-4s1.791-4,4-4h94.978c2.209,0,4,1.791,4,4
                                                                                                                                                                                                                                                                                                                                                                                                                         S122.293,155.434,120.084,155.434z M83.888,109.997H25.106c-2.209,0-4-1.791-4-4s1.791-4,4-4h58.782c2.209,0,4,1.791,4,4
                                                                                                                                                                                                                                                                                                                                                                                                                         S86.097,109.997,83.888,109.997z M104.555,87.278H25.106c-2.209,0-4-1.791-4-4s1.791-4,4-4h79.449c2.209,0,4,1.791,4,4
                                                                                                                                                                                                                                                                                                                                                                                                                         S106.764,87.278,104.555,87.278z M120.084,41.842H25.106c-2.209,0-4-1.791-4-4s1.791-4,4-4h94.978c2.209,0,4,1.791,4,4
                                                                                                                                                                                                                                                                                                                                                                                                                         S122.293,41.842,120.084,41.842z" />
                </svg>
                Persetujuan & Lainnya
            </h1>

            <fieldset class="nice-form-group">
                <label for="">Alternatif Pilihan Program</label>
                <small>Apabila tidak diterima pada program pelatihan yang dipilih pada halaman pertama,<br>
                    berminat untuk program pelatihan berikut:</small>
                <small>(Boleh Pilih Lebih dari 1)</small>
                <div class="row">
                    <div class="col-sm-6">
                        @foreach ($jurusan1 as $item1)
                            <div class="nice-form-group">
                                <input type="checkbox" id="check-{{ $item1->nama_jurusan }}"
                                    name="alternatif_kejuruan[]" value="{{ $item1->nama_jurusan }}" />
                                <label for="check-{{ $item1->nama_jurusan }}">{{ $item1->nama_jurusan }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-sm-6">
                        @foreach ($jurusan2 as $item2)
                            <div class="nice-form-group">
                                <input type="checkbox" id="check-{{ $item2->nama_jurusan }}"
                                    name="alternatif_kejuruan[]" value="{{ $item2->nama_jurusan }}" />
                                <label for="check-{{ $item2->nama_jurusan }}">{{ $item2->nama_jurusan }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </fieldset>
            <div class="nice-form-group mb-3">


                <label>Pernyataan Menyetujui Keputusan Hasil Seleksi*</label>
                <div class="nice-form-group">
                    <input required type="checkbox" name="persetujuan" id="persetujuan-pelatihan" value="setuju" />
                    <label for="persetujuan-pelatihan">Dengan ini menyatakan bahwa saya menerima segala keputusan hasil
                        seleksi
                        calon peserta pelatihan di PPKD Jakarta Pusat dan tidak akan melakukan gugatan dalam bentuk apapun
                        terhadap keputusan tersebut.</label>
                </div>
            </div>

        </section>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <script>
        function previewFile(event, previewId) {
            var file = event.target.files[0]; // Mendapatkan file yang dipilih
            var preview = document.getElementById(previewId);
            preview.innerHTML = ""; // Mengosongkan area preview sebelumnya

            if (file) {
                var fileType = file.type; // Mendapatkan tipe file
                var fileUrl = URL.createObjectURL(file); // Membuat URL sementara untuk file

                // Untuk gambar (jpg, png)
                if (fileType.startsWith('image/')) {
                    var img = document.createElement("img");
                    img.src = fileUrl; // Menetapkan URL sementara untuk gambar
                    img.style.maxWidth = "300px"; // Batasi ukuran gambar

                    // Bungkus gambar dalam link agar bisa dibuka di tab baru
                    var link = document.createElement("a");
                    link.href = fileUrl; // URL gambar
                    link.target = "_blank"; // Buka di tab baru
                    link.appendChild(img); // Masukkan gambar ke dalam link

                    preview.appendChild(link); // Tampilkan preview gambar yang bisa diklik

                    // Untuk file PDF
                } else if (fileType === 'application/pdf') {
                    var embed = document.createElement('embed');
                    embed.src = fileUrl; // URL sementara untuk PDF
                    embed.type = 'application/pdf';
                    embed.style.width = "400px"; // Batasi lebar PDF
                    embed.style.height = "400px"; // Batasi tinggi PDF

                    // Bungkus PDF dalam link agar bisa dibuka di tab baru
                    var link = document.createElement("a");
                    link.href = fileUrl; // URL PDF
                    link.target = "_blank"; // Buka di tab baru
                    link.textContent = "Klik untuk melihat PDF"; // Teks link untuk PDF

                    preview.appendChild(embed); // Tampilkan preview PDF
                    preview.appendChild(link); // Tambahkan link ke PDF
                } else {
                    preview.innerHTML = "<p>File yang dipilih bukan gambar atau PDF.</p>";
                }
            }
        }
    </script>
@endsection
