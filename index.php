<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopier Komisyon Hesaplama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1>Shopier Komisyon Hesaplama</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text">Ürün Fiyatı</span>
                    <input type="number" id="urunFiyati" class="form-control" aria-label="Ürün Fiyatını Girin">
                </div>
            </div>
        </div>
      <div class="row">
        <div class="col-md-4 col-xs-12"><div class="alert alert-warning">Shopier Komisyon Oranı: %4,99</div></div>
        <div class="col-md-4 col-xs-12"><div class="alert alert-warning">Shopier Hizmet Bedeli: 0,49₺</div></div>
        <div class="col-md-4 col-xs-12"><div class="alert alert-warning">KDV %20</div></div>
      </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary" id="komisyonTutari">
                    Komisyon: ₺ 0.00
                </div>
            </div>
            <div class="col-md-6">
            <h2>Eğer Komisyon Oranları Müşteri Tarafından Karşılanacaksa</h2>
             <div class="alert alert-success" id="netTutar">
                    Net Tutar: ₺ 0.00
             </div>
            </div>
            <div class="col-md-6">
            <h2>Eğer Komisyon Oranları Bizim Tarafımızdan Karşılanacaksa</h2>
                <div class="alert alert-danger" id="netTutar2">
                    Net Tutar: ₺ 0.00
                </div>
            </div>
        </div>
      <div class="row">
          

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#urunFiyati").keyup(function() {
                hesapla();
            });
        });

        function hesapla() {
            var urunFiyati = parseFloat($("#urunFiyati").val());
            var komisyonOrani = 0.0499;
            var sabitKomisyon = 0.49;
            var kdv = 1.20;
            var ilkHesap = urunFiyati * komisyonOrani;
            var ikinciHesap = ilkHesap + sabitKomisyon;
            var ucuncuHesap = ikinciHesap * kdv;
            var alinmasiGerekenTutar = urunFiyati + ucuncuHesap;
            var alinmasiGerekenTutar2 = urunFiyati - ucuncuHesap;
            $("#komisyonTutari").text("Komisyon: ₺" + ucuncuHesap.toFixed(2));
            $("#netTutar").text("Net Tutar: ₺" + alinmasiGerekenTutar.toFixed(2));
            $("#komisyonTutari2").text("Komisyon: ₺" + ucuncuHesap.toFixed(2));
            $("#netTutar2").text("Net Tutar: ₺" + alinmasiGerekenTutar2.toFixed(2));
        }
    </script>
</body>
</html>
