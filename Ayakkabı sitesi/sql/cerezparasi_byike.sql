-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 24 May 2021, 23:24:19
-- Sunucu sürümü: 10.3.24-MariaDB
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cerezparasi_byike`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(1) NOT NULL,
  `admin_mail` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(450) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(450) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_mail`, `admin_sifre`, `ad`, `soyad`) VALUES
(0, 'admin', '1234', 'Nike ', 'Shoes');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_firma` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum_tel` int(2) NOT NULL,
  `durum_gsm` int(2) NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_firma`, `ayar_title`, `ayar_tel`, `ayar_gsm`, `ayar_mail`, `durum_tel`, `durum_gsm`, `ayar_ilce`, `ayar_il`, `ayar_adres`) VALUES
(0, 'BYIKE', 'Her zaman. Her yerde. Her koşulda. Nike ayakkabı ile her zaman en iyi performans.', '(0553) 556-45-45', '(0553) 154-16-51', 'yildirimburak1103@gmail.com', 1, 1, 'Kadiköy', 'İstanbul', 'Şair Arşi cad. Merdivenköy mah. ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(111) NOT NULL,
  `ad_soyad` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `gsm` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(111) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_tc` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(111) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_gsm` varchar(240) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` varchar(2) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_tc`, `kullanici_ad`, `kullanici_soyad`, `kullanici_adres`, `kullanici_mail`, `kullanici_gsm`, `kullanici_yetki`, `kullanici_password`) VALUES
(48, '2021-05-24 12:21:28', '', 'hakan', 'kir', '', 'mr.hakan@windowslive.com', '05324308047', '1', 'd43550cf7dac22b88731f6e70e85f27e'),
(49, '2021-05-24 23:15:27', '', 'Osman', 'Yıldırım', '', 'oyvalorant@gmail.com', '05534675', '1', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsal`
--

CREATE TABLE `kurumsal` (
  `kurumsal_id` int(11) NOT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kurumsal`
--

INSERT INTO `kurumsal` (`kurumsal_id`, `hakkimizda`) VALUES
(0, '<div>1972 yılında sırt çantası üreterek işe başlayan BYIKE’nın Türk tüketicisi ile buluştuğu ilk mağazası 1973 yılında Erenköy’de açılır ve Türk tüketicisi ilk defa omuzdan askılı bayan çantası ile tanışır.</div><div><br></div><div>1980’li yıllarda globalleşme yolunda attığı önemli adımlar BYIKE’yı dünyadaki büyük firmalar için üretim yapan başarılı bir tedarikçi haline getirir. 1986 yılında New York’ta açılan BYIKE ofisi gibi global ölçekli girişimler sonucunda marka, ABD, Avrupa ülkeleri ve İngiltere’de tanınan ve bu ülkelere ihracat yapan bir isim haline gelir.</div><div><br></div><div>1990 yılında, üretim bugün hala Sefaköy’de bulunan 15.000 metrekarelik modern tesise taşınır. BYIKE’ da imal edilen ürünlerin derilerinin, 1991 yılında Çorlu’da bulunan 28.000 metrekarelik deri tabaklama tesisinde üretilmeye başlanması ile de DESA, ham deriden başlayarak mağazalarında müşterilere nihai ürünün sunum ve satış aşamasını da kapsayan zincirin tüm halkalarını bünyesinde taşıyan entegre bir yapıya sahip olur.</div><div><br></div><div>Dünyanın en saygın iş dergisi Fortune’ nın 1955 yılından bu yana hazırladığı Fortune 500 listesinin 2. Türkiye değerlendirmesinde BYIKE, önceki yıla göre 6 basamak birden yükselerek 449. sıradan 443. sırada yer alır.</div><div><br></div><div>2004 yılı Nisan ayında başarılı bir halka arz gerçekleştiren BYIKE, bugün 12 bine yakın yatırımcı ortağıyla Türkiye ve yurtdışındaki yatırımlarına devam etmektedir. Yatırımcılarına karşı olan sorumluluğunun bilinci ile kendisine yeni iş hedefleri belirleyen, sektörde katma değer yaratmak ve istihdam sağlamak için çalışmalarına hız veren DESA, 2006 yılında 20.050 metrekarelik toplam, 9.280 metrekarelik kapalı alanda modern üretim imkanları ile donatılmış Düzce fabrikasını faaliyete geçirir. Üç milyon dolar yatırım ile hayata geçen bu proje üretim kapasitesini %60 oranında arttırır.</div><div><br></div><div>Comfort &amp; Style sloganı ile rahatlığı ve şıklığı bir arada sunan ayakkabı markası Aerosoles’ün distribütörlüğü 2004 yılında alınır ve marka dünyada olduğu gibi Türkiye’de de büyük bir hayran kitlesi kazanır.</div><div><br></div><div>BYIKE, 2004 yılında desa.com.tr sitesinden online satışa başlayarak, Türkiye’de moda sektöründe online alışverişin öncülerinden biri olur.</div><div><br></div><div>Her zaman yüksek üretim kalitesi ve çağdaş tasarımı ilke edinen ve Türkiye\'de olduğu gibi dünyada da öncü olmayı hedefleyen BYIKE 2005 yılında, Türkiye Superbrands seçim kurulu tarafından Super Marka olarak değerlendirilir.</div><div><br></div><div>2006 yılında “10 yılda 10 dünya markası yaratma” hedefiyle oluşturulan Turquality programına seçilen BYIKE dünya markası olma hedefine somut adımlarla ilerleyebilmek için logosundan kurumsal kimliğine, mağaza konseptlerinden koleksiyona kadar pek çok değişiklik üzerinde çalışmalara başlar. Özellikle koleksiyondaki değişiklikleri gerçekleştirmek ve BYIKE’yı bir moda markası haline getirmek için Londra ofisinin kadrosu genişletilir.</div><div><br></div><div>2007 yılında, BYIKE’nın sahibi olduğu, 24 yıldır Türkiye’nin yanı sıra Suriye, Ermenistan, Azerbaycan, Gürcistan ve KKTC pazarlarında Samsonite ürünlerinin satış pazarlama ve dağıtım faaliyetlerini üstlenen Birleşik Seyahat Ürünleri A.Ş.’nin %60 hissesi Samsonite Europe N.V.’ ye satılır. Bu ortaklık doğrultusunda 7 DESA mağazası Samsonite’ a devredilir.</div><div><br></div><div>BYIKE’ da 2008 İlkbahar/Yaz sezonuyla birlikte büyük bir dönüşüm yaşanır. Logosundan mağaza konseptine ve hazırlamış olduğu hazır giyim koleksiyonuna kadar hayranlık uyandıran bir dönüşüme uğrayan DESA, artık sadece bir deri markası olarak değil, baştan ayağa moda sunan bir marka olarak hayatımızdadır.</div><div><br></div><div>Bir dünya markası olma yolunda emin adımlarla ilerleyen BYIKE, 2009 yılında Londra Hampstead’ te ve 2010 yılında Covent Garden’ da dünya markalarıyla aynı bölgede açtığı mağazasıyla bu hedefini uygulamaya geçirir.</div><div><br></div><div>2010, 2011 ve 2012 yıllarında BYIKE’ nın yurt içindeki başarısı, üç yıl üst üste aldığı Deri ihracatçıları Birliği’nin verdiği İhracat 1.lik ödülü ile taçlanır.</div><div><br></div><div>2011 yılında ürünün asıl değerinin tasarımdan geldiği düşüncesiyle, tasarıma verdiği önemi daha da arttırarak dünyaca ünlü markalardan Giorgio Armani, Salvatore Ferragamo ve Hugo Boss’ a kreatif direktörlük yapmış olan Graeme Black’ i kreatif ekibinin başına getirerek tasarım ekibini genişletir.</div><div><br></div><div>2012 yılından günümüze kadar ise Kreatif Direktör olarak Max Mara ve daha bir çok uluslararası markada çeşitli görevlerde bulunmuş Yossi Cohen görevi devralmıştır.</div><div><br></div><div>2014 yılı itibariyle, BYIKE Türkiye’de 100’e yakın mağazası ile ve İngiltere Londra’da bulunan 2 Desa mağazasında ve online alışveriş sitesi aracılığı ile müşterilerine, her yerde her saatte mutlak bir şıklık ve kendine özgü bir tarz oluşturma imkanı veren koleksiyonunu sunmaktadır.</div><div><br></div><div>Gerçekleştirdiği dönüşümle uluslararası platformda da büyük takdirle karşılanan BYIKE’ nın Londra Covent Garden mağazası, dünyanın dört bir yanından en iyi projelerin yarıştığı VMSD Uluslararası Mağaza Dekorasyon Yarışması’nda en iyi 60 mağaza arasına girmeyi başararak, dereceye giren mağazaların tanıtıldığı Retail Spaces/Small Stores adlı kitapta geniş yer alır.</div><div><br></div><div>Ürün haline getirdiği işlenmiş tüm derileri, gıda sektöründe kullanılan hayvanlardan elde eden BYIKE’ nın varoluş amacı; moda ve kaliteyi en iyi şekilde birleştirerek uygun fiyatlarla Türkiye ve dünyadaki müşterilerine, Desa markası ile perakende ve toptan satış noktaları aracılığı ile ulaştırmaktır.</div>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(111) NOT NULL,
  `slider_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_anabaslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_resimyol`, `slider_baslik`, `slider_anabaslik`, `slider_sira`, `slider_durum`) VALUES
(27, 'slider/173280306shoe1.jpg', 'Hisset', 'Airmax', 1, 1),
(28, 'slider/115234313shoe2.jpg', 'Kesfet', 'Airmax', 2, 1),
(29, 'slider/108272380shoe3.jpg', 'Performans', 'Airmax', 3, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `id` int(5) NOT NULL,
  `urun_resimyol` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL,
  `baslik` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` int(10) NOT NULL,
  `detay` text COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `urun_resimyol`, `durum`, `baslik`, `fiyat`, `detay`, `cinsiyet`) VALUES
(1, 'galeri/60ab5d33adbd9grid9.jpg', 1, 'Nike 1225', 226, 'Baştan tasarlanan Nike Air Max 90 NIC Erkek Ayakkabısı, 1990\'lardaki koşu köklerine sadık kalıyor. Max Air birimi her adımı yastıklamaya yardımcı olurken sert kauçuk Waffle dış taban tutuşu en üst düzeye çıkarır.', 1),
(2, 'galeri/60ab5dfecdab3grid3.jpg', 1, 'Nike 6628', 227, 'Nike React Element 55\'in benzersiz stilinden ilham alan Nike Explore Strada, günlük kullanıma uygun modern bir stil ve rahatlık için dokuma üst kısım, çift tonlu renkler ve hafızalı köpüğe sahip taban astarı ile üretilmiştir.', 1),
(3, 'galeri/60ab5e2a89359grid4.jpg', 1, 'Nike 1227', 199, '1990\'ların koşu şampiyonuna saygı duruşu. Nike MD Runner 2, nefes alabilen file ve yumuşak deri ayrıntılarıyla OG öğeleri korur. Düşük bilekli tasarım, klasik waffle tabanı ve köpük yastıklamasıyla rahatlık sunar.', 1),
(4, 'galeri/60ab5e3b3cb14grid5.jpg', 1, 'Nike 1233', 199, 'Retro esintiler taşıyan yeni Nike Air Heights ile 1990\'lar geri döndü. Modern ayrıntılarla bezeli büyük, kalın tasarım, bu hafif ve rahat ayakkabıyı bir üst seviyeye çıkarıyor.', 2),
(5, 'galeri/60ab5e49c1fa8grid6.jpg', 1, 'Nike 1233', 288, 'Klasik sadeliği ve rahatlığıyla sokakların vazgeçilmezi olan Nike Blazer Low \'77, düşük profilli, klasik basketbol stiliyle geri dönüyor. Sanat ve DIY stilini kutlayan sıçramış boya görünümlü üst kısım, seni kendi sanatçı yönünü göstermeye davet eder. Stili olduğu gibi de kullanabilir ve gardıropların vazgeçilmezi bu eşsiz tasarımla dikkatleri üzerine çekmeye devam edebilirsin.', 1),
(6, 'galeri/60ab5e5a4bf8egrid7.jpg', 1, 'Nike 1255', 266, 'Baştan tasarlanan Nike Air Max 90 NIC Erkek Ayakkabısı, 1990\'lardaki koşu köklerine sadık kalıyor. Max Air birimi her adımı yastıklamaya yardımcı olurken sert kauçuk Waffle dış taban tutuşu en üst düzeye çıkarır.', 1),
(7, 'galeri/60ab5e69d4d6egrid8.jpg', 1, 'Nike 1245', 267, 'Baştan tasarlanan Nike Air Max 90 NIC Erkek Ayakkabısı, 1990\'lardaki koşu köklerine sadık kalıyor. Max Air birimi her adımı yastıklamaya yardımcı olurken sert kauçuk Waffle dış taban tutuşu en üst düzeye çıkarır.', 1),
(8, 'galeri/60ab5e7ec22dagrid10.jpg', 1, 'Nike  3345', 211, 'Nike SB Charge Canvas, düşük bilekli silüeti esnek kanvasla birleştirerek üst düzey performans sunar. Çift yoğunluklu iç taban kayarken ayaklarını destekler ve etkileyici numaralarını sergilerken yastıklama sunar.', 1),
(9, 'galeri/60ab5e91b0108grid12.jpg', 1, 'Nike  2234', 299, 'Nike SB Charge Canvas, düşük bilekli silüeti esnek kanvasla birleştirerek üst düzey performans sunar. Çift yoğunluklu iç taban kayarken ayaklarını destekler ve etkileyici numaralarını sergilerken yastıklama sunar.', 1),
(10, 'galeri/60ab5ea737d9fgrid13.jpg', 1, 'Nike  2230', 270, 'Nike SB Charge Canvas, düşük bilekli silüeti esnek kanvasla birleştirerek üst düzey performans sunar. Çift yoğunluklu iç taban kayarken ayaklarını destekler ve etkileyici numaralarını sergilerken yastıklama sunar.', 1),
(11, 'galeri/60ab5ec559efcgrid14.jpg', 1, 'Nike  2235', 255, 'Nike SB Charge Canvas, düşük bilekli silüeti esnek kanvasla birleştirerek üst düzey performans sunar. Çift yoğunluklu iç taban kayarken ayaklarını destekler ve etkileyici numaralarını sergilerken yastıklama sunar.', 1),
(12, 'galeri/60ab5ed75272dgrid11.jpg', 1, 'Nike  2233', 233, 'Nike SB Charge Canvas, düşük bilekli silüeti esnek kanvasla birleştirerek üst düzey performans sunar. Çift yoğunluklu iç taban kayarken ayaklarını destekler ve etkileyici numaralarını sergilerken yastıklama sunar.', 1),
(13, 'galeri/60ac018dce87a4876f9d0-3187-4d05-9cd2-71ea1576b1da_size530x530_quality90_cropCenter.jpg', 1, 'Nike Revolution 5 Running Erkek Spor Ayakkabı - Siyah', 499, 'Gücü hisset', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `kurumsal`
--
ALTER TABLE `kurumsal`
  ADD PRIMARY KEY (`kurumsal_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
