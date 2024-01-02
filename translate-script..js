function translateToTurkish() {
   document.querySelector('.heading h3').innerHTML = 'Hoşgeldiniz';
   document.querySelector('.heading p a').innerHTML = 'ana sayfa';
   document.getElementById('about_title').innerHTML = 'Solo Lasagna\'ya Hoş Geldiniz';
   document.querySelector('.about p').innerHTML = 'Lezzetin kolaylıkla buluştuğu yer! Modern dijital menümüz, yemek keyfinizi basitlik ve verimlilikle yükseltmek için burada. Ağız sulandıran lazanyalarımızın tadını çıkarın, her lokma muhteşem lezzetlerin bir simfonisi. Özenle hazırlanmış ve en taze malzemeler kullanılarak, lazanyalarımız sizi daha fazlasını istemeye yönlendirecek bir deneyim vaat ediyor. Solo Lasagna - her öğünün lezzetli bir macera olduğu yer!';
   document.querySelector('.about .btn').innerHTML = 'Menümüz';
   document.querySelector('.steps .title').innerHTML = 'Basit Adımlar';
   document.querySelectorAll('.steps .box h3')[0].innerHTML = 'Sipariş Seçin';
   document.querySelectorAll('.steps .box p')[0].innerHTML = 'Solo Lasagna\'da yemeğinizi seçmek ilk keyifli adımdır! Kullanımı kolay dijital menümüzle çeşitli lezzetli seçenekler arasından hızlıca seçim yapabilirsiniz. Klasik tatları sevenlerden veya yeni bir şeyler denemek isteyenlerden olun, sipariş vermek çok kolaydır. Solo Lasagna basit tutar - sadece tıklayın ve keyfini çıkarın!';
   document.querySelectorAll('.steps .box h3')[1].innerHTML = 'Hızlı Teslimat';
   document.querySelectorAll('.steps .box p')[1].innerHTML = 'Çekici seçiminizi yaptıktan sonra Solo Lasagna\'da hızlı ve kolay bir deneyime hazırlanın! Hızlı teslimat servisimiz, siparişinizin masanıza zamanında ulaşmasını sağlar. Uzun sıralara veda deyin ve hızlı, pratik yemek yemenin keyfine varın. Size sadece lezzetli lazanya sunmakla kalmayıp aynı zamanda hızlı ve harika bir yeme deneyimi sunmaya kararlıyız!';
   document.querySelectorAll('.steps .box h3')[2].innerHTML = 'Yemeğin Keyfini Çıkarın';
   document.querySelectorAll('.steps .box p')[2].innerHTML = 'Solo Lasagna, sadece midesini değil, her lezzetli ısırıkla kalbinizi ısıtan bir yiyecek noktanızdır.';
   
   document.querySelector('.heading h3').innerHTML = 'Alışveriş Sepeti';
   document.querySelector('.heading p a').innerHTML = 'ana sayfa';

   document.querySelectorAll('.box-container .box .name').forEach(element => {
      //Translate item names
      // Example: element.innerHTML = 'Translated Text';
      element.innerHTML = 'Buraya Çevrilen Metni Ekleyin'; // Örneğin: 'Lezzetli Ürün'
   });

   document.querySelectorAll('.box-container .box .price span').forEach(element => {
      //Translate price tags (if any)
      // Example: element.innerHTML = 'Converted Price';
      element.innerHTML = 'Buraya Çevrilen Fiyatı Ekleyin'; // Örneğin: '50 TL'
   });

   document.querySelectorAll('.box-container .box .qty').forEach(element => {
      //Translate quantity labels (if any)
      // Example: element.placeholder = 'Converted Amount';
      element.placeholder = 'Buraya Çevrilen Miktarı Ekleyin'; // Örneğin: 'Adet'
   });

   document.querySelectorAll('.box-container .box .sub-total span').forEach(element => {
      //Translate subtotal labels (if any)
      // Example: element.innerHTML = 'Converted Subtotal';
      element.innerHTML = 'Buraya Çevrilen Alt Toplamı Ekleyin'; // Örneğin: '150 TL'
   });

   document.querySelector('.cart-total p span').innerHTML = '<?= $grand_total; ?>' + ' TL';
   document.querySelector('.cart-total a.btn').innerHTML = 'ödeme yap';
   document.querySelector('.more-btn .delete-btn').innerHTML = 'tümünü sil';
   document.querySelector('.more-btn .btn').innerHTML = 'alışverişe devam et';
   document.querySelector('.title').innerHTML = 'Yemek Kategorisi';
   document.querySelector('.empty').innerHTML = 'Henüz ürün eklenmedi!';
   
   document.querySelectorAll('.box-container .box .name').forEach(element => {
      //Translate product names
      // Example: element.innerHTML = 'Translated Product Name';
      var productName = element.innerHTML.trim(); // Ürün adını al
      // You can use and translate variables coming from PHP here
      if (productName === 'Product 1') {
         element.innerHTML = 'Ürün 1';
      } else if (productName === 'Product 2') {
         element.innerHTML = 'Ürün 2';
      }
   });

   document.querySelectorAll('.box-container .box .price span').forEach(element => {
      //Translate price tags (if any)
      // Example: element.innerHTML = 'Converted Price';
   });

   document.querySelectorAll('.box-container .box .qty').forEach(element => {
      //Translate quantity labels (if any)
      // Example: element.placeholder = 'Converted Amount';
   });

   document.querySelectorAll('.box-container .box .sub-total span').forEach(element => {
      //Translate subtotal labels (if any)
      // Example: element.innerHTML = 'Converted Subtotal';
   });

   document.querySelector('.cart-total p span').innerHTML = ' <?= $grand_total; ?> TL';

   document.querySelector('.cart-total a.btn').innerHTML = 'ödeme yap';
   document.querySelector('.more-btn .delete-btn').innerHTML = 'tümünü sil';
   document.querySelector('.more-btn .btn').innerHTML = 'alışverişe devam et';
   document.querySelector('.heading h3').innerHTML = 'Ödeme Yap';
   document.querySelector('.heading p a').innerHTML = 'ana sayfa';
   document.querySelector('.title').innerHTML = 'Sipariş Özeti';
   document.querySelector('.cart-items h3').innerHTML = 'Sepet Ürünleri';
   document.querySelector('.cart-items .grand-total .name').innerHTML = 'Toplam Tutar :';
   document.querySelector('.btn').innerHTML = 'Sepeti Görüntüle';

   document.querySelector('.user-info h3').innerHTML = 'Bilgileriniz';
   document.querySelector('.user-info p:nth-child(2) span').innerHTML = '<?php echo $fetch_profile["name"]; ?>';
   document.querySelector('.user-info p:nth-child(3) span').innerHTML = '<?php echo $fetch_profile["table_number"]; ?>';
   document.querySelector('#order_note').placeholder = 'Özel talimatlarınızı buraya yazabilirsiniz';

   document.querySelector('.payment-method-select option:nth-child(1)').innerHTML = 'Ödeme yöntemi seçin';
   document.querySelector('.payment-method-select option:nth-child(2)').innerHTML = 'Kapıda Nakit Ödeme';
   document.querySelector('.payment-method-select option:nth-child(3)').innerHTML = 'Kredi Kartı';
   document.querySelector('.payment-method-select option:nth-child(4)').innerHTML = 'Paytm';
   document.querySelector('.payment-method-select option:nth-child(5)').innerHTML = 'PayPal';

   document.querySelector('.btn[name="submit"]').innerHTML = 'Siparişi Tamamla';

   document.querySelector('.form-container h3').innerHTML = 'Şef Girişi';
   document.querySelector('.form-container img').alt = 'Şef Girişi';
   document.querySelector('input[name="username"]').placeholder = 'Kullanıcı adınızı girin';
   document.querySelector('input[name="password"]').placeholder = 'Şifrenizi girin';
   document.querySelector('input[name="submit"]').value = 'Şimdi Giriş Yap';
   document.querySelector('.chef-dashboard h2').innerHTML = 'Sipariş Programı';
   document.querySelectorAll('.chef-dashboard table th')[0].innerHTML = 'Sipariş ID';
   document.querySelectorAll('.chef-dashboard table th')[1].innerHTML = 'Müşteri Adı';
   document.querySelectorAll('.chef-dashboard table th')[2].innerHTML = 'Sipariş Edilen Ürünler';
   document.querySelectorAll('.chef-dashboard table th')[3].innerHTML = 'Sipariş Notu';
   document.querySelectorAll('.chef-dashboard table th')[4].innerHTML = 'Masa Numarası';
   document.querySelectorAll('.chef-dashboard table th')[5].innerHTML = 'Durum';
   document.querySelectorAll('.chef-dashboard table th')[6].innerHTML = 'Programlanmış Zaman';
   document.querySelectorAll('.chef-dashboard table th')[7].innerHTML = 'İşlem';

   document.querySelectorAll('.chef-dashboard table td select option')[0].innerHTML = 'Beklemede';
   document.querySelectorAll('.chef-dashboard table td select option')[1].innerHTML = 'Hazırlanıyor';
   document.querySelectorAll('.chef-dashboard table td select option')[2].innerHTML = 'Hazır';
   document.querySelectorAll('.chef-dashboard table td select option')[3].innerHTML = 'Tamamlandı';

   document.querySelectorAll('.chef-dashboard table td button').forEach(button => {
       button.innerHTML = 'Güncelle';
   });
   document.querySelector('.heading h3').innerHTML = 'Web Sitemizi Değerlendirin';
   document.querySelector('.heading p a').innerHTML = 'ana sayfa';
   document.querySelector('.contact h3').innerHTML = 'Sanal garson web sitemizi kullanırken herhangi bir sorunla karşılaşırsanız, lütfen bize bildirin. Geri bildiriminiz çok değerlidir ve hizmet kalitemizi artırmamıza yardımcı olacaktır!';
   document.querySelector('.contact input[name="name"]').placeholder = 'adınızı girin';
   document.querySelector('.contact input[name="number"]').placeholder = 'numaranızı girin';
   document.querySelector('.contact input[name="email"]').placeholder = 'e-postanızı girin';
   document.querySelector('.contact textarea[name="msg"]').placeholder = 'mesajınızı girin';
   document.querySelector('.contact input[name="send"]').value = 'mesajı gönder';

   document.querySelector('.heading h3').innerHTML = 'Ana Sayfa';
   document.querySelector('.heading p a').innerHTML = 'ana sayfa';
   document.querySelector('.hero .content span').innerHTML = 'sipariş';
   document.querySelector('.hero .content h3').innerHTML = 'italyan yemekleri';
   document.querySelector('.hero .content a.btn').innerHTML = 'menülere göz atın';
   document.querySelector('.hero-slide.slide:nth-child(2) .content span').innerHTML = 'sipariş';
   document.querySelector('.hero-slide.slide:nth-child(2) .content h3').innerHTML = 'lezzetli Lazanya';
   document.querySelector('.hero-slide.slide:nth-child(2) .content a.btn').innerHTML = 'menülere göz atın';
   document.querySelector('.hero-slide.slide:nth-child(3) .content span').innerHTML = 'sipariş';
   document.querySelector('.hero-slide.slide:nth-child(3) .content h3').innerHTML = 'Pizza';
   document.querySelector('.hero-slide.slide:nth-child(3) .content a.btn').innerHTML = 'menülere göz atın';

   document.querySelector('.category .title').innerHTML = 'Yemek Kategorisi';
   document.querySelectorAll('.category .box-container a.box:nth-child(1) h3').innerHTML = 'Pizza';
   document.querySelectorAll('.category .box-container a.box:nth-child(2) h3').innerHTML = 'Lazanya';
   document.querySelectorAll('.category .box-container a.box:nth-child(3) h3').innerHTML = 'sandviçler';
   document.querySelectorAll('.category .box-container a.box:nth-child(4) h3').innerHTML = 'İçecekler';

   document.querySelector('.products .title').innerHTML = 'Son Eklenen Yemekler';

   document.querySelectorAll('.products .box-container form.box img').forEach((img, index) => {
       // You can update the alt text or any other attribute if needed
       img.alt = 'Ürün Resmi ' + (index + 1);
   });

   document.querySelector('.products .more-btn a.btn').innerHTML = 'hepsini gör';
   document.querySelector('.form-container h3').innerHTML = 'Şimdi Giriş Yap';
   document.querySelector('.form-container input[name="email"]').placeholder = 'E-posta adresinizi girin';
   document.querySelector('.form-container input[name="pass"]').placeholder = 'Şifrenizi girin';
   document.querySelector('.form-container input[name="submit"]').value = 'Şimdi Giriş Yap';
   document.querySelector('.form-container p a').innerHTML = 'Hesabınız yok mu? <a href="register.php">Şimdi kaydolun</a>';

   document.querySelector('.heading h3').innerHTML = 'Menümüz';
   document.querySelector('.heading p a').innerHTML = 'Ana Sayfa';
   document.querySelector('.title').innerHTML = 'En Son Yemekler';

   document.querySelector('.heading').innerHTML = 'Mesajlar';
   document.querySelectorAll('.box p')[0].innerHTML = 'İsim: <span><?= $fetch_messages["name"]; ?></span>';
document.querySelectorAll('.box p')[1].innerHTML = 'Numara: <span><?= $fetch_messages["number"]; ?></span>';
document.querySelectorAll('.box p')[2].innerHTML = 'E-posta: <span><?= $fetch_messages["email"]; ?></span>';
document.querySelectorAll('.box p')[3].innerHTML = 'Mesaj: <span><?= $fetch_messages["message"]; ?></span>';
document.querySelector('.delete-btn').innerText = 'Sil';

   document.querySelector('.heading h3').innerHTML = 'Sipariş Onayı';
   document.querySelector('.heading p a').innerHTML = 'anasayfa';
   document.querySelector('.order-details p strong').innerHTML = 'Sipariş Başarıyla Alındı!';
   document.querySelector('.order-details p:nth-child(2)').innerHTML = 'Teşekkür ederiz, <?= $fetch_profile["name"]; ?>, siparişinizi verdiğiniz için. Siparişiniz onaylandı ve kısa süre içinde teslim edilecek.';
   document.querySelector('.order-details p:nth-child(3)').innerHTML = 'Masa Numarası: <?= $fetch_profile["table_number"]; ?>';
   document.querySelector('.order-details p:nth-child(4)').innerHTML = 'Lütfen bir an için <a href="rate_website.php">deneyiminizi değerlendirin</a>.';

   document.querySelector('.user-details p span').innerHTML = '<?= $fetch_profile["name"]; ?>';
   document.querySelectorAll('.user-details p span')[1].innerHTML = '<?= $fetch_profile["table_number"]; ?>';
   document.querySelector('.user-details a.btn').innerHTML = 'bilgiyi güncelle';

   document.querySelector('.title').innerHTML = 'Hızlı Bakış';
   document.querySelector('.empty').innerHTML = 'Henüz ürün eklenmemiş!';
   document.querySelector('.cart-btn').innerHTML = 'Sepete Ekle';

   document.querySelector('.box h1').innerHTML = 'Hızlı Bakış';
   document.querySelector('.box .cat').innerHTML = 'Kategori: '; // Örnek kategori çevirisi
   document.querySelector('.box .name').innerHTML = 'Ürün Adı: ';
   document.querySelector('.box .description').innerHTML = 'Açıklama: ';
   document.querySelector('.box .price').innerHTML = 'Fiyat: ';
   document.querySelector('.box .qty').setAttribute('placeholder', 'Adet');
   document.querySelector('.swiper-button-next').innerHTML = 'Sonraki';
   document.querySelector('.swiper-button-prev').innerHTML = 'Önceki';

   
   document.querySelector('title').innerHTML = 'Deneyiminizi Değerlendirin';
   document.querySelector('h3').innerHTML = 'Deneyiminizi Değerlendirin';

   document.querySelectorAll('.rating label').forEach((label, index) => {
      label.innerHTML = '★';
   });

   document.querySelector('textarea').setAttribute('placeholder', 'Geri bildiriminizi ekleyin');
   document.querySelector('.btn-link').innerHTML = 'Değerlendirmeyi Gönder';
   document.querySelector('.example-class').innerHTML = 'Örnek Çevrilecek Metin';
   document.querySelector('#another-element-id').innerHTML = 'Başka Bir Örnek Çevrilecek Metin';

   document.querySelector('h3').innerHTML = 'Şimdi Kaydolun';
   document.querySelector('input[name="name"]').placeholder = 'adınızı girin';
   document.querySelector('input[name="table_number"]').placeholder = 'masa numaranızı girin';
   document.querySelector('input[name="submit"]').value = 'Şimdi Kaydol';
   document.querySelector('input[name="submit"]').style.fontSize = '1.5rem';
   document.querySelector('input[name="submit"]').style.padding = '0.8rem 0.8rem';

   document.querySelector('input[name="username"]').placeholder = 'yeni kullanıcı adınızı girin';
   document.querySelector('input[name="password"]').placeholder = 'şifrenizi girin';
   document.querySelector('input[name="confirm_password"]').placeholder = 'şifreyi onaylayın';
   document.querySelector('input[name="search_box"]').placeholder = 'burada ara...';

   const productForms = document.querySelectorAll('.box');
   productForms.forEach(form => {
       form.querySelector('.fas.fa-eye').innerText = 'Hızlı Görünüm';
       form.querySelector('.fas.fa-shopping-cart').innerText = 'Sepete Ekle';
       form.querySelector('.qty').placeholder = 'Miktar';
   });

   const emptyMessage = document.querySelector('.empty');
   if (emptyMessage) {
       emptyMessage.innerText = 'Henüz ürün eklenmemiş!';
   }
   document.querySelector('h1').innerText = 'Siparişiniz İçin Teşekkür Ederiz!';
    
   const paragraphs = document.querySelectorAll('p');
   paragraphs.forEach(paragraph => {
       if (paragraph.textContent.includes('questions or concerns')) {
           paragraph.innerHTML = 'Herhangi bir sorunuz veya endişeniz varsa lütfen <a href="contact.php">bizimle iletişime geçin</a>.';
       } else if (paragraph.textContent.includes('Follow us on')) {
           paragraph.innerHTML = 'Bizi <a href="https://www.facebook.com/solo.restorant/about">Facebook</a> üzerinden takip edin.';
       } else {
           paragraph.innerHTML = 'Çok teşekkür ederiz.';
       }
   });

   document.querySelector('.back-to-home a').innerText = 'Ana Sayfa\'ya Dön';

   document.querySelector('.thank-you-image').alt = 'Teşekkür Ederiz Resmi';
   const updateStatusContent = document.body.textContent;
   if (updateStatusContent.includes('Update Order Status')) {
       document.body.innerHTML = updateStatusContent.replace('Update Order Status', 'Sipariş Durumunu Güncelle');
   }
   if (updateStatusContent.includes('Order ID')) {
       document.body.innerHTML = updateStatusContent.replace('Order ID', 'Sipariş ID');
   }
   if (updateStatusContent.includes('Status')) {
       document.body.innerHTML = updateStatusContent.replace('Status', 'Durum');
   }
   if (updateStatusContent.includes('Submit')) {
       document.body.innerHTML = updateStatusContent.replace('Submit', 'Gönder');
   }
   if (updateStatusContent.includes('Status updated successfully!')) {
       document.body.innerHTML = updateStatusContent.replace('Status updated successfully!', 'Durum başarıyla güncellendi!');
   }
   if (updateStatusContent.includes('Error updating status. Please try again.')) {
       document.body.innerHTML = updateStatusContent.replace('Error updating status. Please try again.', 'Durum güncelleme hatası. Lütfen tekrar deneyin.');
   }  


   
   
   
}