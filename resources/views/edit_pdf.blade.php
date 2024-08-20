<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Humucare</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/service.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/navbar.css')}}">
</head>

<body>
    <!-- <img src="./images/hero-bg-image.png" alt="hero-bg" /> -->

    @include('sweetalert::alert')
    <main>

        <div id="pspdfkit" style="height: 100vh"></div>

    </main>
</body>
<script type="text/javascript" src="{{ URL::asset('assets/js/navbar.js')}}"></script>

<script src="{{ URL::asset('assets/pspdfkit.js')}}"></script>

<script>
    PSPDFKit.load({
		container: "#pspdfkit",
  		document: "{{$file}}",
        licenseKey: "ZReDVTLiJuFbqlFb27kscJ6qx1EAP1HZlIK8FrV9TNPSSMLXoUoYtplepNagO6Rdw8W2cN5H3-26qbuKOBjoBRVU5g6wZy2yPQV5casyQFR7UaV5V6-x2_3XzMtI8KgbQltH7vWSf7D9jN7eNURKyt7pQrAl3fi5o3kL7aJUmQNCNb0QyVX_5sCftoobUR2RsQG6SAoD3yILX_Sc"
	})
	.then(function(instance) {
		console.log("PSPDFKit loaded", instance);
	})
	.catch(function(error) {
		console.error(error.message);
	});
</script>

</html>
