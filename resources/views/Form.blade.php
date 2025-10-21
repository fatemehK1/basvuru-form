<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/Form.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form</title>
</head>
<body>


<div class="container my-5">
    <div class="row">
        <div class="col-md-8 col-lg-12 mx-auto">
            <h2 class="mb-4">Başvuru Formu</h2>
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif

            <form method="post">
                @csrf
                <div class="row g-2">
                    <div class="col-md">
                        <input type="text" name="ad" value="{{old('ad')}}" class="form-control @error('ad') is-invalid @enderror" placeholder="Ad">
                        @error('ad')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md">
                        <input type="text" name="soyad" value="{{old('soyad')}}" class="form-control @error('soyad') is-invalid @enderror" placeholder="Soyad">
                        @error('soyad')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail">
                        @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md">
                        <input type="text" name="numara" value="{{old('numara')}}" class="form-control @error('numara') is-invalid @enderror" placeholder="5xxxxxxxxx">
                        @error('numara')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label fw-bold">Ev Adresiniz</label>
                        <input type="text"  name="adres" class="form-control @error('adres') is-invalid @enderror" value="{{old('adres')}}" id="adres">
                        @error('adres')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <label class="form-label fw-bold">Cinsiyet</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="kadin" value="kadin">
                                        <label class="form-check-label" for="kadin">Kadın</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="erkek" value="erkek">
                                        <label class="form-check-label" for="erkek">Erkek</label>
                                    </div>
                                    @error('gender')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="date" class="form-label fw-bold">Doğum Tarihiniz</label>
                                <input type="date" name="date" class="form-control" id="date">
                            </div>

                            <div class="col-md-6">
                                <label for="position" class="form-label fw-bold">Başvurulan Pozisyon</label>
                                <select class="form-select @error('position') is-invalid @enderror" name="position" id="position" required>
                                    <option value="" @disabled(true) @selected(true)>---Lütfen başvurmak istediğiniz pozisyonu seçiniz---</option>
                                    @foreach($positions as $position)
                                        <option value="{{$position['id']}}" @selected(old('position')==$position['id'])>{{$position['name']}}</option>
                                    @endforeach
                                </select>
                                @error('position')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Çalışma Durumunuz</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('work_status') is-invalid @enderror" type="radio" name="work_status" id="employed" value="employed" @checked(old('work_status') == 'employed')>
                                        <label class="form-check-label" for="employed">Çalışan</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('work_status') is-invalid @enderror" type="radio" name="work_status" id="student" value="student" @checked(old('work_status') == 'student')>
                                        <label class="form-check-label" for="student">Öğrenci</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('work_status') is-invalid @enderror" type="radio" name="work_status" id="freelancer" value="freelancer" @checked(old('work_status') == 'freelancer')>
                                        <label class="form-check-label" for="freelancer">Freelancer</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('work_status') is-invalid @enderror" type="radio" name="work_status" id="unemployed" value="unemployed" @checked(old('work_status') == 'unemployed')>
                                        <label class="form-check-label" for="unemployed">Çalışmıyor</label>
                                    </div>
                                </div>

                                @error('work_status')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Eğitim Seviyesi</label>
                                <select class="form-select @error('egitim') is-invalid @enderror" name="egitim" id="egitim" required>
                                    <option value="" @disabled(true) @selected(true)>---Lütfen eğitim seviyenizi seçiniz---</option>
                                    @foreach($statuses as $status)
                                        <option value="{{$status['id']}}" @selected(old('egitim') == $status['id'])>{{$status['name']}}</option>
                                    @endforeach
                                </select>
                                @error('egitim')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Çalışma Tercihiniz</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('expectancy') is-invalid @enderror" type="radio" name="expectancy" value="tam_zamanli">
                                        <label class="form-check-label" for="tam_zamanli">Tam Zamanlı</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('expectancy') is-invalid @enderror" type="radio" name="expectancy" value="yari_zamanli">
                                        <label class="form-check-label" for="yari_zamanli">Yarı Zamanlı</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('expectancy') is-invalid @enderror" type="radio" name="expectancy" value="uzaktan">
                                        <label class="form-check-label" for="uzaktan">Uzaktan</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('expectancy') is-invalid @enderror" type="radio" name="expectancy" value="hybrid">
                                        <label class="form-check-label" for="hybrid">Hibrit</label>
                                    </div>
                                </div>
                                @error('expectancy')
                                <div class="invalid-feedback d-block">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Maaş Beklentiniz (opsiyonel)</label>
                                <input type="text" name="maas" value="{{old('maas')}}" class="form-control @error('maas') is-invalid @enderror" placeholder="30.000">
                                @error('maas')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label fw-bold">Deneyim Süresi (yıl)</label>
                                <input type="text" name="deneyim" value="{{old('deneyim')}}" class="form-control @error('deneyim') is-invalid @enderror" placeholder="Örn: 3">
                                @error('deneyim')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-md-8">
                                <label class="form-label fw-bold">Yabancı Diller</label>
                                <input type="text" name="diller" value="{{old('diller')}}" class="form-control @error('diller') is-invalid @enderror" placeholder="İngilizce, Almanca, Fransızca...">
                                @error('diller')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <label class="form-label fw-bold">Yetenekleriniz</label>
                        <textarea name="yetenekler" class="form-control @error('yetenekler') is-invalid @enderror" rows="3" placeholder="Teknik becerileriniz, güçlü yönleriniz vb.">{{old('yetenekler')}}</textarea>
                        @error('yetenekler')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mt-4">
                        <label class="form-label fw-bold">Referans Kişisi</label>
                        <input type="text" name="referans" value="{{old('referans')}}" class="form-control @error('referans') is-invalid @enderror" placeholder="Ad Soyad - Firma - Telefon">
                        @error('referans')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mt-4">
                        <label class="form-label fw-bold">Dosya Yükleyin (CV / Sertifika)</label>
                        <input type="file" name="cv" value="{{old('cv')}}" class="form-control @error('cv') is-invalid @enderror">
                        @error('cv')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mt-4">
                        <label class="form-label fw-bold">Kendinizi Kısaca Tanıtın</label>
                        <textarea class="form-control @error('hakkinda') is-invalid @enderror" name="hakkinda" rows="4" placeholder="Kariyer hedeflerinizi, ilgi alanlarınız...">{{old('hakkinda')}}</textarea>
                        @error('hakkinda')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mt-5 text-center">
                        <button type="submit" class="btn btn-primary px-5">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
