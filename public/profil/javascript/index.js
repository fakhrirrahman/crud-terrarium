// chat wa
function startWhatsAppChat() {
  var phoneNumber = '1234567890'; // Ganti dengan nomor telepon WhatsApp Anda
  var message = 'Halo, saya tertarik dengan produk Anda.';
  var url = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);
  window.open(url, '_blank');
}

// thumbnails
function changeImage(src) {
  document.getElementById('main-img').src = src;
}
