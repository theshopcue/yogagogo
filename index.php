<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Yogagogo – Find Your Inner Balance</title>

   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69733b1558104b1978d41cb5/1jfl1tjkf';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Poppins',sans-serif;
  background:#0e0e0e;
  color:#eee;
  overflow-x:hidden;
}

/* HEADER */
header{
  position:fixed;
  top:0;
  width:100%;
  padding:28px 0;
  text-align:center;
  background:linear-gradient(90deg,#000,#ff6a00,#000);
  box-shadow:0 0 25px rgba(255,106,0,0.6);
  z-index:1000;
}
header h1{
  font-family:'Playfair Display',serif;
  color:#fff;
  font-size:34px;
  letter-spacing:2px;
}
nav{margin-top:12px;}
nav a{
  color:#fff;
  margin:0 18px;
  text-decoration:none;
  font-size:15px;
  position:relative;
}
nav a::after{
  content:'';
  width:0%;
  height:2px;
  background:#ffae42;
  position:absolute;
  left:0;
  bottom:-6px;
  transition:.4s;
}
nav a:hover::after{width:100%}

/* CONTAINER */
.container{max-width:1200px;margin:auto;padding:170px 20px 60px}
section{margin-bottom:120px;opacity:0;transition:1s ease}
section.show{opacity:1;transform:none}

/* ANIMATION TYPES */
.fade-up{transform:translateY(60px)}
.slide-right{transform:translateX(-80px)}
.zoom-in{transform:scale(.85)}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=1400&q=80') center/cover;
  padding:160px 40px;
  border-radius:12px;
  text-align:center;
  box-shadow:0 0 40px rgba(255,106,0,0.4);
}
.hero h2{
  font-size:46px;
  color:#fff;
  text-shadow:0 0 20px #ff6a00;
}
.hero p{max-width:700px;margin:20px auto;color:#f5f5f5}
.btn{
  background:#ff6a00;
  border:none;
  padding:12px 26px;
  border-radius:30px;
  color:white;
  font-weight:500;
  cursor:pointer;
  box-shadow:0 0 15px #ff6a00;
  transition:.3s;
}
.btn:hover{transform:scale(1.1);background:#ff8c1a}

/* CONTENT BOX */
.box{
  background:rgba(255,255,255,0.05);
  padding:40px;
  border-radius:12px;
  box-shadow:0 0 30px rgba(255,106,0,0.15);
  line-height:1.8;
}

/* CLASS GRID */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:30px;
}
.card{
  background:#1a1a1a;
  border-radius:12px;
  overflow:hidden;
  box-shadow:0 0 20px rgba(255,106,0,0.2);
  transition:.4s;
}
.card:hover{transform:translateY(-8px) scale(1.03)}
.card img{width:100%;height:220px;object-fit:cover}
.card-content{padding:20px;text-align:center}

/* FOOTER */
footer{
  background:linear-gradient(90deg,#000,#ff6a00,#000);
  padding:70px 20px;
  color:#eee;
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:40px;
}
footer h3{margin-bottom:15px;color:#fff}
footer a{display:block;color:#ffe0c2;text-decoration:none;margin-bottom:8px}
footer a:hover{color:#fff}
</style>

<script>
function go(id){document.getElementById(id).scrollIntoView({behavior:'smooth'})}
window.addEventListener('scroll',()=>{
  document.querySelectorAll("section").forEach(sec=>{
    if(sec.getBoundingClientRect().top < window.innerHeight-100){
      sec.classList.add("show")
    }
  })
})
</script>
</head>
<body>

<header>
  <h1>Yogagogo</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('about')">About</a>
    <a onclick="go('classes')">Classes</a>
    <a onclick="go('benefits')">Benefits</a>
    <a onclick="go('trainers')">Trainers</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<section id="home" class="hero fade-up">
  <h2>Balance Your Body & Mind</h2>
  <p>Welcome to Yogagogo — a luxury wellness space where movement, breath, and mindfulness come together to transform your life.</p>
  <button class="btn" onclick="go('classes')">Explore Classes</button>
</section>

<section id="about" class="slide-right">
  <h2 style="color:#ff8c1a;margin-bottom:20px;">About Yogagogo</h2>
  <div class="box">
    Yogagogo is designed to be more than a yoga studio — it’s a sanctuary for mental clarity and physical strength...
  </div>
</section>

<section id="classes" class="zoom-in">
  <h2 style="color:#ff8c1a;margin-bottom:25px;">Our Yoga Classes</h2>
  <div class="grid">
    <div class="card"><img src="https://images.unsplash.com/photo-1518611012118-f1e0c6c1d5c8"><div class="card-content"><h3>Hatha Yoga</h3></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1554344728-77cf90d9ed26"><div class="card-content"><h3>Power Yoga</h3></div></div>
    <div class="card"><img src="https://images.unsplash.com/photo-1599447332417-2f6f9f90d2cb"><div class="card-content"><h3>Meditation Flow</h3></div></div>
  </div>
</section>

<section id="benefits" class="fade-up">
  <h2 style="color:#ff8c1a;margin-bottom:20px;">Benefits of Yoga</h2>
  <div class="box">
    Yoga improves flexibility, strengthens muscles, enhances breathing, reduces stress, and increases mental clarity...
  </div>
</section>

<section id="trainers" class="slide-right">
  <h2 style="color:#ff8c1a;margin-bottom:20px;">Meet Our Trainers</h2>
  <div class="box">
    Our certified instructors bring years of experience in yoga therapy, mindfulness training, and holistic wellness...
  </div>
</section>

<section id="contact" class="zoom-in">
  <h2 style="color:#ff8c1a;margin-bottom:20px;">Get in Touch</h2>
  <div class="box">
    Email: hello@yogagogo.com <br>
    Phone: +1 800 YOGA NOW
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>Yogagogo</h3>
      <p>Luxury yoga and wellness for a balanced life.</p>
    </div>
    <div>
      <h3>Explore</h3>
      <a href="#">Classes</a>
      <a href="#">Workshops</a>
      <a href="#">Membership</a>
    </div>
    <div>
      <h3>Support</h3>
      <a href="#">Contact</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> Yogagogo. All rights reserved.</p>
</footer>

</body>
</html>
