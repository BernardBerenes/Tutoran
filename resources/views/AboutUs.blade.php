<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/AboutUs.css') }}">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <section id="title1">
        <div>
            <h1>TENTANG</h1>
            <h3>TUTORAN</h3>
            <p>Tutoran berkomitmen untuk memberikan pengalaman</p>
            <p>pembelajaran terbaik bagi setiap siswa.</p>
        </div>
        
    </section>

    <section id="cointainer1">
        <h2>WatcHGoods</h2>
        <p>Welcome to WatcHGoods, the ultimate destination for watch enthusiasts.
            As a premier watch store, we offer a wide selection of exquisite timepieces that exude style, quality, and sophistication.
            Our dedicated team of watch experts is passionate about helping customers find their perfect match, providing personalized service and expert guidance. 
            With a strong commitment to authenticity, we guarantee that every watch in our collection is genuine and sourced directly from trusted brands. 
            Whether you're seeking a classic design or a cutting-edge statement piece, 
            WatcHGoods is here to fulfill your watch desires with unparalleled quality and a seamless shopping experience.
        </p>
        <h2>Why Choose WatchBox?</h2>
        <p>With a carefully curated collection of exquisite watches from renowned brands, we offer a blend of elegance, quality, and style. 
            Our knowledgeable and friendly staff are passionate about watches and are committed to assisting customers in finding the perfect timepiece that suits their 
            individual preferences and lifestyle. At WatcHGoods, we prioritize authenticity, ensuring that every watch we offer is genuine and backed by manufacturer warranties. 
            With our unwavering dedication to customer satisfaction, WatcHGoods is your go-to destination for exceptional watches and personalized service.
        </p>
        <h2>Guaranteed Authenticity</h2>
        <p>
            At WatcHGoods, authenticity is our utmost priority. As a trusted watch store, we are committed to providing our customers with only genuine and authentic timepieces.
            We carefully source our watches from authorized distributors and directly collaborate with renowned watch brands. 
            With WatcHGoods, you can shop confidently, knowing that every watch you purchase is 100% authentic, accompanied by all the necessary documentation and warranties. 
            We take pride in our reputation for integrity and transparency, ensuring that your watch-buying experience is authentic in every aspect.
        </p>
        <h2>Get In Touch</h2>
        <p>
            Our Client Advisors are available to assist you with all of your watch-related needs. 
            Connect with us at your convenience to meet a dedicated advisor by email, live-chat, or at one of our store.
        </p>
    </section>

    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>