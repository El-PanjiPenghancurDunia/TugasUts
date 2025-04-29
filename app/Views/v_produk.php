<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<title>Daftar Produk Sayuran</title>
  
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f5f5f5;
    }
    .product-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }
    .product-card {
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.2s;
    }
    .product-card:hover {
      transform: scale(1.02);
    }
    .product-image img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }
    .product-info {
      padding: 16px;
    }
    .product-name {
      font-size: 20px;
      font-weight: bold;
      margin: 0 0 8px;
    }
    .product-price {
      color: #4CAF50;
      font-size: 18px;
      font-weight: bold;
    }
    .buy-button {
      display: block;
      width: 100%;
      padding: 10px 0;
      background-color: #4CAF50;
      color: #ffffff;
      text-align: center;
      border: none;
      border-radius: 0 0 12px 12px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    .buy-button:hover {
      background-color: #45a049;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .product-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }
    @media (max-width: 768px) {
      .product-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 480px) {
      .product-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>

<h1>Daftar Sayuran Segar</h1>
<br>
<div class="product-grid">
  <div class="product-card">
    <div class="product-image">
      <img src="<?= base_url()?>NiceAdmin/assets/img/bayam.jpg" alt="Bayam">
    </div>
    <div class="product-info">
      <h3 class="product-name">Bayam Segar</h3>
      <p class="product-price">Rp5.000 / ikat</p>
      <button class="buy-button">Beli</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="<?= base_url()?>NiceAdmin/assets/img/sawi.jpg" alt="Kangkung">
    </div>
    <div class="product-info">
      <h3 class="product-name">Sawi</h3>
      <p class="product-price">Rp4.500 / ikat</p>
      <button class="buy-button">Beli</button>  
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="<?= base_url()?>NiceAdmin/assets/img/kangkung.jpg" alt="Wortel">
    </div>
    <div class="product-info">
      <h3 class="product-name">Wortel</h3>
      <p class="product-price">Rp8.000 / 500g</p>
      <button class="buy-button">Beli</button>
    </div>
  </div>

  <div class="product-card">
    <div class="product-image">
      <img src="<?= base_url()?>NiceAdmin/assets/img/brokoli.jpg" alt="Brokoli">
    </div>
    <div class="product-info">
      <h3 class="product-name">Brokoli</h3>
      <p class="product-price">Rp10.000 / bonggol</p>
      <button class="buy-button">Beli</button>  
    </div>
  </div>

</div>

<?= $this->endSection() ?>