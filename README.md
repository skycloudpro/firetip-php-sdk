
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/x-icon" href="/fire-solid.png">

<link rel="icon" type="image/png" sizes="32x32" href="/fire-solid.png">

<link rel="apple-touch-icon" sizes="180x180" href="/fire-solid.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
  
<link rel="manifest" href="/site.webmanifest">

    <meta charset="UTF-8">
    
<style>
    .text-fire-red {
        color: #dc143c !important;
    }

    /* The Red Button Glow */
    .shadow-glow-fire {
        box-shadow: 0 0 25px rgba(220, 20, 60, 0.5);
        transition: all 0.3s ease;
    }
    .shadow-glow-fire:hover {
        box-shadow: 0 0 40px rgba(220, 20, 60, 0.7);
        transform: translateY(-2px);
    }

    /* Input Focus State to match theme */
    .custom-input:focus {
        background-color: #161a1d !important;
        box-shadow: 0 0 0 1px rgba(220, 20, 60, 0.5) !important;
        color: white !important;
    }

    .pulse-animation {
        animation: firePulse 2s infinite ease-in-out;
    }
    @keyframes firePulse {
        0% { opacity: 0.6; transform: scale(0.95); }
        50% { opacity: 1; transform: scale(1.05); }
        100% { opacity: 0.6; transform: scale(0.95); }
    }

    /* Hardware Accelerated Drift Animations for background icons */
    @keyframes structuralDrift {
        0% { transform: translateY(0px) rotate(0deg) scale(1); }
        50% { transform: translateY(-20px) rotate(8deg) scale(1.05); opacity: 0.15; }
        100% { transform: translateY(0px) rotate(0deg) scale(1); }
    }

    .drift-slow { animation: structuralDrift 9s infinite ease-in-out; }
    .drift-medium { animation: structuralDrift 6s infinite ease-in-out; animation-delay: 1.5s; }
    .drift-fast { animation: structuralDrift 4.5s infinite ease-in-out; animation-delay: 0.5s; }
</style>
    <title>Firetip | Unified Email, SMS & Lead Infrastructure</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <link rel="stylesheet" href="/firetip.css">
<meta name="robots" content="index, follow">
    <meta name="author" content="sCloud Pro Ltd">
    <meta name="robots" content="index, follow">
<!-- Security & Caching Headers (Fallback Meta Directives) -->
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <!-- Open Graph / Social Sharing (Facebook, LinkedIn, Discord) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://firetip.pro/">
    <meta property="og:title" content="Firetip Engine | Sovereign Campaign & Infrastructure Hub">
    <meta property="og:description" content="Bypass the success tax with dedicated hardware nodes and real-time email verification telemetry.">
    <meta property="og:image" content="https://firetip.pro/assets/og-image.png">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Firetip Engine | Sovereign Campaign & Infrastructure Hub">
    <meta name="twitter:description" content="Autonomous high-velocity email dispatch and real-time open verification tracking.">
    <meta name="twitter:image" content="https://firetip.pro/assets/twitter-image.png">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>

<script>
	// Verify it's loaded
	if (window.jQuery) {
		console.log("JQUERY_UPLINK_STABLE: Node is ready.");
	} else {
		console.log("JQUERY_UPLINK_OFFLINE: Re-check source path.");
	}
</script>
</head>




<body><!--
	<div class="firetip-launch-banner">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
         
            <div class="d-flex align-items-center">
                <span class="launch-pulse me-3"></span>
                <div class="banner-text">
                    <span class="text-firetip fw-bold ">sCloud Evolution:</span>
                    <span class="text-white">OFFICIAL FIRETIP GLOBAL LAUNCH</span>
                </div>
            </div>

            
            <div class="countdown-wrapper font-monospace">
                <span id="launch-timer" class="text-white fw-bold"></span>
                <small class="text-firetip ms-2" style="font-size: 0.6rem;">T‑MINUS</small>
            </div>

            
            <div class="d-none d-md-block">
                <span class="badge bg-dark border border-firetip text-firetip" style="font-size: 0.6rem;">NODE: SC01</span>
            </div>

        </div>
    </div>
</div>-->

<style>
.firetip-envelope-bg {
    position: relative;
    overflow: hidden;
    background: rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Giant envelope watermark */
.firetip-envelope-bg::before {
    content: "\f0e0"; /* FA envelope unicode */
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    font-size: 18rem;
    color: rgba(255, 59, 59, 0.08); /* Firetip red, soft */
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 0;
    pointer-events: none;
    line-height: 1;
}

/* Ensure content stays above the envelope */
.firetip-envelope-bg > * {
    position: relative;
    z-index: 2;
}

    /* FIRETIP BRAND COLOURS */
    .text-firetip { color: #ff3b3b !important; }
    .border-firetip { border-color: rgba(255, 59, 59, 0.4) !important; }

    /* BANNER BACKGROUND */
    .firetip-launch-banner {
        background: linear-gradient(90deg, #0a0a0a 0%, #141414 50%, #0a0a0a 100%);
        border-bottom: 1px solid rgba(255, 59, 59, 0.35);
        padding: 10px 20px;
        position: relative;
        overflow: hidden;
        z-index: 9999;
    }

    /* SHIMMER SWEEP */
    .firetip-launch-banner::after {
        content: "";
        position: absolute;
        top: 0;
        left: -120%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 59, 59, 0.08), transparent);
        animation: banner-sweep 4s infinite;
    }

    @keyframes banner-sweep {
        0% { left: -120%; }
        20% { left: 120%; }
        100% { left: 120%; }
    }

    /* FIRETIP PULSE DOT */
    .launch-pulse {
        width: 10px;
        height: 10px;
        background: #ff3b3b;
        border-radius: 50%;
        box-shadow: 0 0 12px #ff3b3b;
        animation: firetip-pulse 1.6s infinite ease-in-out;
    }

    @keyframes firetip-pulse {
        0% {
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(255, 59, 59, 0.7);
        }
        70% {
            transform: scale(1.15);
            box-shadow: 0 0 0 10px rgba(255, 59, 59, 0);
        }
        100% {
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(255, 59, 59, 0);
        }
    }

    /* TEXT */
    .banner-text {
        font-size: 0.8rem;
        letter-spacing: 1px;
    }

    #launch-timer {
        font-size: 1.1rem;
        letter-spacing: 2px;
        text-shadow: 0 0 10px rgba(255, 59, 59, 0.25);
    }
</style>

<script>
    function startRealTimeCountdown(targetDateStr) {
        // Parse the target date as UTC
        const targetDate = new Date(targetDateStr + "Z").getTime(); 
        const display = document.querySelector('#launch-timer');

        const interval = setInterval(function () {
            const now = new Date().getTime();
            const distance = targetDate - now;

            // If the date has passed
            if (distance < 0) {
                clearInterval(interval);
                display.textContent = "00:00:00";
                return;
            }

            // Calculate total hours, minutes, seconds
            // Math.floor(distance / (1000 * 60 * 60)) gets the TOTAL hours 
            // instead of just the hours in the current day.
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Add days to hours if you want the total hour count to exceed 24
            let totalHours = (days * 24) + hours;

            // Format with leading zeros
            let displayHours = totalHours < 10 ? "0" + totalHours : totalHours;
            let displayMinutes = minutes < 10 ? "0" + minutes : minutes;
            let displaySeconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = displayHours + ":" + displayMinutes + ":" + displaySeconds;
        }, 1000);
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Keep your target date: June 9, 2026
        startRealTimeCountdown('2026-06-29T18:00:00');
    });
</script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700;900&family=JetBrains+Mono:wght@500;800&display=swap" rel="stylesheet">

<nav class="navbar navbar-expand-lg py-3 sticky-top border-bottom border-white border-opacity-10" style="background: rgba(8, 12, 20, 0.95); backdrop-filter: blur(15px); z-index: 1050;">
	<div class="container">
		<a class="navbar-brand fw-900 text-white d-flex align-items-center gap-2 " href="https://firetip.pro">
			<i class="fas fa-fire-alt text-fire-red "></i> Firetip &trade;
		</a>

		<button class="navbar-toggler border-0 p-2 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#firetipNavbar" aria-controls="firetipNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars-staggered text-white"></i>
		</button>

		<div class="collapse navbar-collapse" id="firetipNavbar">
			<div class="ms-auto d-flex flex-column flex-lg-row align-items-lg-center gap-3 mt-3 mt-lg-0">

			<div class="d-none d-xl-flex align-items-center gap-3 px-3 py-2 rounded-pill bg-dark border border-danger border-opacity-25 me-lg-3 animate__animated animate__fadeIn shadow-sm" style="background: rgba(15, 17, 23, 0.85) !important; backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
   
 
    <div class="d-flex align-items-center gap-2">
        <i class="fas fa-shield-halved text-warning" style="font-size: 0.7rem; filter: drop-shadow(0 0 4px rgba(255,193,7,0.4));"></i>
        <span class="font-monospace text-white  tracking-widest" style="font-size: 0.65rem; letter-spacing: 1px;">GDPR Compliant</span>
    </div>
    <span class="text-danger opacity-50 fw-light">/</span>
    <div class="d-flex align-items-center gap-1.5">
        <span class="spinner-grow spinner-grow-sm text-danger" style="width: 0.4rem; height: 0.4rem;"></span>&nbsp;
        <span class="font-monospace tracking-widest fw-bold text-danger" style="font-size: 0.6rem; letter-spacing: 1px;">   Engine </span>
    </div>
</div>

			<button type="button" class="btn-fire-nav border-0 bg-transparent order-2 order-lg-1" data-bs-toggle="modal" data-bs-target="#firetipDocsModal">
    Docs
    <i class="fas fa-file-code ms-2 text-fire-red opacity-50"></i>
</button>

				<!-- NEW: Tools Menu Link (Triggers Popup Modal) -->
				<button type="button" class="btn-fire-nav border-0 bg-transparent order-2 order-lg-1" data-bs-toggle="modal" data-bs-target="#firetipToolsModal">
					Free Tools
					<i class="fas fa-screwdriver-wrench ms-2 text-fire-red opacity-50"></i>
				</button>

				<a href="/Pricing" class="btn-fire-nav order-2 order-lg-1">
					Pricing
					<i class="fas fa-chart-line ms-2 text-fire-red opacity-50"></i>
				</a>

				<a href="/Article" class="btn-fire-nav order-2 order-lg-1">
					Journal
					<i class="fas fa-book-open ms-2 text-fire-red opacity-50"></i>
				</a>

								<div class="dropdown order-lg-2">
					<button class="btn btn-link text-white position-relative p-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; background: rgba(255,255,255,0.03);">
						<i class="fas fa-bell text-white"></i>
						<span class="position-absolute top-0 start-100 translate-middle p-1 bg-fire-red border border-light rounded-circle animate__animated animate__pulse animate__infinite">
							<span class="visually-hidden">New Alerts</span>
						</span>
					</button>

					<ul class="dropdown-menu dropdown-menu-end p-0 border border-white border-opacity-10 shadow-lg" style="background: rgba(8, 12, 20, 0.98); backdrop-filter: blur(20px); min-width: 320px; border-radius: 1rem; overflow: hidden; margin-top: 15px;">
						<li class="p-3 border-bottom border-white border-opacity-5">
							<div class="d-flex justify-content-between align-items-center">
								<span class="text-white-50 fw-bold font-monospace extra-small tracking-widest uppercase" style="font-size: 0.6rem;">System Logs</span>
																<span class="badge bg-danger bg-opacity-10 text-danger extra-small">236 NEW</span>
							</div>
						</li>

												<li>
							<a class="dropdown-item p-3 border-bottom border-white border-opacity-5 transition-all d-flex gap-3" href="#">
								<div class="bg-success bg-opacity-10 p-2 rounded-3 h-100">
									<i class="fas fa-check-circle text-success"></i>
								</div>
								<div>
									<p class="text-white small mb-1 fw-bold">DNS_AUTH_FAIL</p>
									<p class="text-white-50 extra-small mb-0" style="line-height: 1.4;max-width:520px;">
										ERR-104 Mismatch. DNS: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA7ddG++zV2gifq6CJUvKSzF2ECd7Ymyu9T/wI/r1lb2tT4WH8rp+oUmNehtBWZT/zSAHV7qoJHwNVGE5uhI/LKMBynJOmu4RBnt0QrlX5RJ5roc2mKIHvqDsdYIN+Je0S0gPUtl1CYy6Xuh7phW04L7YetxlYtrw8jJnARHws5dJTDuQKzjtcF2W7Gm2knoZXepKm/gQZl674EGB2oZTtPYpxZhzB0FR5Rxv7qoweXLF4zIjrUmyYdXu5jWYQyvEGtywleVsXVDsGfixxS+kx65+4TIAG3ZMAqva5WnKob1Hc7vYF2emzV4mUjCi98MUeRyJBmzwVeJsmX6226UH8SwIDAQAB, DB_DERIVED: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuEbEk6O/aLurK2aYTQqg+H29Xd8U7w6v4mlUnawSQJEdqePohjq1H7WyPZzoKuqYukhOixzitML3J5aXfVgQcaCBpriKcHQ1SxuBGVaS1uZLy1M+yQUBbNntKzA6bCJHWN4OTx1Yn+h2KKRIJRebWeJ6VgEur1GXGXAP57KIb38lNdD9w9iSR/F9Qnqi7FESBAa0tux0G/DaejIr0lGtghLp2tSrTsriZk6p3rTwcp4/fcllLJd1rbAliyF41+PD8xJa106cyA0RrtF1LGxIrkkNV/u5X8unTE9RqwImgdC0BRcThWqtbG3mG9UV2n1z5Orw9PVu9VOT1SKbjulgJwIDAQAB									</p>
									<div class="d-flex justify-content-between align-items-center mt-2">
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">NODE: sc01</span>
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">02:13</span>
									</div>
								</div>
							</a>
						</li>
												<li>
							<a class="dropdown-item p-3 border-bottom border-white border-opacity-5 transition-all d-flex gap-3" href="#">
								<div class="bg-success bg-opacity-10 p-2 rounded-3 h-100">
									<i class="fas fa-check-circle text-success"></i>
								</div>
								<div>
									<p class="text-white small mb-1 fw-bold">DNS_AUTH_FAIL</p>
									<p class="text-white-50 extra-small mb-0" style="line-height: 1.4;max-width:520px;">
										ERR-104 Mismatch. DNS: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA7ddG++zV2gifq6CJUvKSzF2ECd7Ymyu9T/wI/r1lb2tT4WH8rp+oUmNehtBWZT/zSAHV7qoJHwNVGE5uhI/LKMBynJOmu4RBnt0QrlX5RJ5roc2mKIHvqDsdYIN+Je0S0gPUtl1CYy6Xuh7phW04L7YetxlYtrw8jJnARHws5dJTDuQKzjtcF2W7Gm2knoZXepKm/gQZl674EGB2oZTtPYpxZhzB0FR5Rxv7qoweXLF4zIjrUmyYdXu5jWYQyvEGtywleVsXVDsGfixxS+kx65+4TIAG3ZMAqva5WnKob1Hc7vYF2emzV4mUjCi98MUeRyJBmzwVeJsmX6226UH8SwIDAQAB, DB_DERIVED: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuEbEk6O/aLurK2aYTQqg+H29Xd8U7w6v4mlUnawSQJEdqePohjq1H7WyPZzoKuqYukhOixzitML3J5aXfVgQcaCBpriKcHQ1SxuBGVaS1uZLy1M+yQUBbNntKzA6bCJHWN4OTx1Yn+h2KKRIJRebWeJ6VgEur1GXGXAP57KIb38lNdD9w9iSR/F9Qnqi7FESBAa0tux0G/DaejIr0lGtghLp2tSrTsriZk6p3rTwcp4/fcllLJd1rbAliyF41+PD8xJa106cyA0RrtF1LGxIrkkNV/u5X8unTE9RqwImgdC0BRcThWqtbG3mG9UV2n1z5Orw9PVu9VOT1SKbjulgJwIDAQAB									</p>
									<div class="d-flex justify-content-between align-items-center mt-2">
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">NODE: sc01</span>
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">14:19</span>
									</div>
								</div>
							</a>
						</li>
												<li>
							<a class="dropdown-item p-3 border-bottom border-white border-opacity-5 transition-all d-flex gap-3" href="#">
								<div class="bg-success bg-opacity-10 p-2 rounded-3 h-100">
									<i class="fas fa-check-circle text-success"></i>
								</div>
								<div>
									<p class="text-white small mb-1 fw-bold">DNS_AUTH_FAIL</p>
									<p class="text-white-50 extra-small mb-0" style="line-height: 1.4;max-width:520px;">
										ERR-104 Mismatch. DNS: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA7ddG++zV2gifq6CJUvKSzF2ECd7Ymyu9T/wI/r1lb2tT4WH8rp+oUmNehtBWZT/zSAHV7qoJHwNVGE5uhI/LKMBynJOmu4RBnt0QrlX5RJ5roc2mKIHvqDsdYIN+Je0S0gPUtl1CYy6Xuh7phW04L7YetxlYtrw8jJnARHws5dJTDuQKzjtcF2W7Gm2knoZXepKm/gQZl674EGB2oZTtPYpxZhzB0FR5Rxv7qoweXLF4zIjrUmyYdXu5jWYQyvEGtywleVsXVDsGfixxS+kx65+4TIAG3ZMAqva5WnKob1Hc7vYF2emzV4mUjCi98MUeRyJBmzwVeJsmX6226UH8SwIDAQAB, DB_DERIVED: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuEbEk6O/aLurK2aYTQqg+H29Xd8U7w6v4mlUnawSQJEdqePohjq1H7WyPZzoKuqYukhOixzitML3J5aXfVgQcaCBpriKcHQ1SxuBGVaS1uZLy1M+yQUBbNntKzA6bCJHWN4OTx1Yn+h2KKRIJRebWeJ6VgEur1GXGXAP57KIb38lNdD9w9iSR/F9Qnqi7FESBAa0tux0G/DaejIr0lGtghLp2tSrTsriZk6p3rTwcp4/fcllLJd1rbAliyF41+PD8xJa106cyA0RrtF1LGxIrkkNV/u5X8unTE9RqwImgdC0BRcThWqtbG3mG9UV2n1z5Orw9PVu9VOT1SKbjulgJwIDAQAB									</p>
									<div class="d-flex justify-content-between align-items-center mt-2">
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">NODE: sc01</span>
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">00:53</span>
									</div>
								</div>
							</a>
						</li>
												<li>
							<a class="dropdown-item p-3 border-bottom border-white border-opacity-5 transition-all d-flex gap-3" href="#">
								<div class="bg-success bg-opacity-10 p-2 rounded-3 h-100">
									<i class="fas fa-check-circle text-success"></i>
								</div>
								<div>
									<p class="text-white small mb-1 fw-bold">DNS_AUTH_FAIL</p>
									<p class="text-white-50 extra-small mb-0" style="line-height: 1.4;max-width:520px;">
										ERR-104 Mismatch. DNS: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwg7Z4JPE2R2LYTf7nHzyk/cW2HXOIqAHAYeLxyBhvnt5BlhwGXFAaOpUUfA9kO6PP6OGRXdNvPNG++VOioF0bBS53gq/eZoupkrMK8vtz3Xfaw8+VYW9wRWUr7ZiDyskHa71BzbZZP+yf3VpnEwzYQwO4h/kYc5oTz5CIM8dhPYyoqqRRlXynRrbMtl6pbUdZI2t/4KM9DgcTaa8hdsjVrF0unhzKlP97v0Y4YY9YzfyNukQCOlsCHYH88pTO3LtaPaanUHiBw3DO1p/Iqrp8OYO1oF6MgJKbCf69xZkmANXcq7QljId5QreEsts42AOnqLdrHsekpmP1TFphxuIPQIDAQAB, DB_DERIVED: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyNdlJ4oHIHSFph/djA3fE5B52p5s6R30AP5XN+ZdHX0dCtYa4uBh2ISQVGNghb51Fle3hSIEanK15idpEw7Dwj4Bg/d3UkYD1Y/NEbDV+fWq3vNugaio+ZHF9AaZOiD4NmDCfiUYUaIX+b9QIqw0FxcnRxMJn3CYPY9YbunzBJdqwkrkdWjUVOhCh030zk98WzSx76H1vXXrNiCiph2+qj7VNenQlPvuRcsh7uBNewO9nO0ftmjZW1KK3Y77T1+pcMBnW6d5agZf5vKr1ee3xU8kBC7RvvxCwwB4WI85KWmMX3CMuSNoEsFGLplgUd9KZz6Slxt7/DUSA8iwZpmubQIDAQAB									</p>
									<div class="d-flex justify-content-between align-items-center mt-2">
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">NODE: sc01</span>
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">15:31</span>
									</div>
								</div>
							</a>
						</li>
												<li>
							<a class="dropdown-item p-3 border-bottom border-white border-opacity-5 transition-all d-flex gap-3" href="#">
								<div class="bg-success bg-opacity-10 p-2 rounded-3 h-100">
									<i class="fas fa-check-circle text-success"></i>
								</div>
								<div>
									<p class="text-white small mb-1 fw-bold">DNS_AUTH_FAIL</p>
									<p class="text-white-50 extra-small mb-0" style="line-height: 1.4;max-width:520px;">
										ERR-104 Mismatch. DNS: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwg7Z4JPE2R2LYTf7nHzyk/cW2HXOIqAHAYeLxyBhvnt5BlhwGXFAaOpUUfA9kO6PP6OGRXdNvPNG++VOioF0bBS53gq/eZoupkrMK8vtz3Xfaw8+VYW9wRWUr7ZiDyskHa71BzbZZP+yf3VpnEwzYQwO4h/kYc5oTz5CIM8dhPYyoqqRRlXynRrbMtl6pbUdZI2t/4KM9DgcTaa8hdsjVrF0unhzKlP97v0Y4YY9YzfyNukQCOlsCHYH88pTO3LtaPaanUHiBw3DO1p/Iqrp8OYO1oF6MgJKbCf69xZkmANXcq7QljId5QreEsts42AOnqLdrHsekpmP1TFphxuIPQIDAQAB, DB_DERIVED: MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyNdlJ4oHIHSFph/djA3fE5B52p5s6R30AP5XN+ZdHX0dCtYa4uBh2ISQVGNghb51Fle3hSIEanK15idpEw7Dwj4Bg/d3UkYD1Y/NEbDV+fWq3vNugaio+ZHF9AaZOiD4NmDCfiUYUaIX+b9QIqw0FxcnRxMJn3CYPY9YbunzBJdqwkrkdWjUVOhCh030zk98WzSx76H1vXXrNiCiph2+qj7VNenQlPvuRcsh7uBNewO9nO0ftmjZW1KK3Y77T1+pcMBnW6d5agZf5vKr1ee3xU8kBC7RvvxCwwB4WI85KWmMX3CMuSNoEsFGLplgUd9KZz6Slxt7/DUSA8iwZpmubQIDAQAB									</p>
									<div class="d-flex justify-content-between align-items-center mt-2">
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">NODE: sc01</span>
										<span class="text-white-50 font-monospace" style="font-size: 0.5rem;">15:00</span>
									</div>
								</div>
							</a>
						</li>
						
						<li class="bg-black bg-opacity-20">
							<a class="dropdown-item text-center py-2 text-danger font-monospace extra-small fw-bold" href="#">CLEAR ALL LOGS</a>
						</li>
					</ul>
				</div>

								<a href="/Dashboard" class="btn-fire-nav shadow-glow-fire-soft order-1 order-lg-2" style="border-color: rgba(220, 20, 60, 0.4);">
					<i class="fas fa-fingerprint me-2 text-fire-red"></i>
					<span class="font-monospace">SCLOUD PRO LTD</span>
				</a>
				
				<button class="btn-fire-nav bg-fire-red text-white fw-800 border-0 shadow-glow-fire order-0 order-lg-3 py-2 px-4" data-bs-toggle="modal" data-bs-target="#auraHubModal">
					FIRETIP HUB
					<i class="fas fa-bolt-auto ms-2 text-white"></i>
				</button>
			</div>
		</div>
	</div>
</nav>
<!-- DOCS POPUP MODAL -->
<div class="modal fade" id="firetipDocsModal" tabindex="-1" aria-labelledby="firetipDocsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">
		<div class="modal-content text-white border border-white border-opacity-10 shadow-lg overflow-hidden" style="background: rgba(12, 16, 26, 0.98); backdrop-filter: blur(25px); border-radius: 1.25rem;">

			<div class="row g-0 align-items-stretch">
				
				<!-- LEFT PANEL: Title, Footer, and Documentation Links Box -->
				<div class="col-lg-7 d-flex flex-column border-end border-white border-opacity-5">
					
					<!-- 1. Modal Top Bar -->
					<div class="modal-header border-bottom border-white border-opacity-10 p-3" style="background: rgba(8, 12, 20, 0.95);">
						<div class="d-flex align-items-center gap-2">
							<i class="fas fa-file-code text-fire-red fs-6"></i>
							<h6 class="modal-title fw-bold font-monospace text-white" id="firetipDocsModalLabel" style="letter-spacing: 1px; font-size: 0.85rem;">FIRETIP DOCUMENTATION SUITE</h6>  
						</div>
					</div>

					<!-- 2. Modal Body -->
					<div class="modal-body p-4 flex-grow-1">
						<div class="p-3 rounded-3" style="background: rgba(255,255,255,0.015); border-color: red;">
							
							<div class="row">
								
								<!-- Sub-Column 1: Core Architecture & Setup -->
								<div class="col-md-6 border-end border-white border-opacity-5">
									<span class="font-monospace extra-small tracking-widest uppercase fw-bold d-block mb-3" style="background: rgba(220, 20, 60, 0.15); border: 1px solid rgba(220, 20, 60, 0.4); color: white; padding: 2px 8px; border-radius: 50rem;">
										<i class="fas fa-server me-1"></i> Core Architecture
									</span>
									<ul class="list-unstyled mb-0 d-flex flex-column gap-2">
										<li>
											<a href="https://docs.firetip.pro/" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-book text-white-50 me-2"></i> Getting Started Guide</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/Firetip-HTML-Template-Engine-Specification" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-microchip text-white-50 me-2"></i> Template Engine Specs</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/Marketing" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-microchip text-white-50 me-2"></i> Marketing</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/Email-Template-Builder" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-network-wired text-white-50 me-2"></i> Email Template Builder</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										
										<li>
											<a href="/Consultation" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-network-wired text-white-50 me-2"></i> Architecture/System Consultation</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
									</ul>
								</div>

								<!-- Sub-Column 2: API & Integration -->
								<div class="col-md-6 ps-md-4 mt-4 mt-md-0">
									<span class="font-monospace extra-small tracking-widest uppercase fw-bold d-block mb-3" style="background: rgba(220, 20, 60, 0.15); border: 1px solid rgba(220, 20, 60, 0.4); color: white; padding: 2px 8px; border-radius: 50rem;">
										<i class="fas fa-code me-1"></i> API & Integration
									</span>
									<ul class="list-unstyled mb-0 d-flex flex-column gap-2">
										<li>
											<a href="https://docs.firetip.pro/" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-terminal text-white-50 me-2"></i> REST API Endpoints</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="https://docs.firetip.pro/" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-shield-alt text-white-50 me-2"></i> Authentication & DKIM</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="https://docs.firetip.pro/" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-chart-line text-white-50 me-2"></i> Telemetry & Webhooks</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										
										
											<li>
											<a href="/Migrating" target="_blank" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-chart-line text-white-50 me-2"></i> Migrating</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</div>

					<!-- 3. Modal Footer -->
					<div class="modal-footer border-top border-white border-opacity-10 p-3 justify-content-start gap-4">
						<span class="text-white-50 font-monospace extra-small">NODE: sc01_active</span>
						<a href="https://docs.firetip.pro/" target="_blank" class="text-fire-red font-monospace extra-small text-decoration-none fw-bold">
							OPEN FULL KNOWLEDGE BASE &rarr;
						</a>
					</div>
				</div>

				<!-- RIGHT PANEL: Mascot Image -->
				<div class="col-lg-5 p-0 d-flex align-items-stretch" style="background: rgba(8, 12, 20, 0.98);">
					
					<button type="button" class="btn-close btn-close-white shadow-none position-absolute" data-bs-dismiss="modal" aria-label="Close" style="font-size: 0.75rem; opacity: 0.75; top: 1rem; right: 1rem; z-index: 5;"></button>

					<div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: radial-gradient(circle, rgba(217, 59, 20, 0.08) 0%, rgba(13, 18, 28, 0) 70%); filter: blur(30px); pointer-events: none; z-index: 0;"></div>

					<img src="firetipman_toolbox.png" 
						 alt="Firetip Mascot Logo" 
						 class="img-fluid" 
						 style="width: 100%; height: 100%; object-fit: cover; object-position: center bottom; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.5)) contrast(105%); position: relative; z-index: 1;" />
				</div>

			</div>

		</div>
	</div>
</div>
<!-- TOOLS POPUP MODAL -->
<div class="modal fade" id="firetipToolsModal" tabindex="-1" aria-labelledby="firetipToolsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered"> <!-- Modal increased to XL to accommodate full right-side image -->
		<div class="modal-content text-white border border-white border-opacity-10 shadow-lg overflow-hidden" style="background: rgba(12, 16, 26, 0.98); backdrop-filter: blur(25px); border-radius: 1.25rem;">

			<div class="row g-0 align-items-stretch"> <!-- align-items-stretch ensures columns match height -->
				
				<!-- LEFT PANEL: Title, Footer, and Combined Tools Box -->
				<div class="col-lg-7 d-flex flex-column border-end border-white border-opacity-5">
					
					<!-- 1. Modal Top Bar (Left Aligned) -->
					<div class="modal-header border-bottom border-white border-opacity-10 p-3" style="background: rgba(8, 12, 20, 0.95);">
						<div class="d-flex align-items-center gap-2">
							<i class="fas fa-toolbox text-fire-red fs-6"></i>
							<h6 class="modal-title fw-bold font-monospace text-white" id="firetipToolsModalLabel" style="letter-spacing: 1px; font-size: 0.85rem;">FIRETIP UTILITY SUITE</h6>  
						</div>
					</div>

					<!-- 2. Modal Body: Combined Single Box on Left -->
					<div class="modal-body p-4 flex-grow-1">
						<div class="p-3 rounded-3 " style="background: rgba(255,255,255,0.015); border-color: red;">
							
							<div class="row">
								
								<!-- Sub-Column 1: Deliverability & Health -->
								<div class="col-md-6 border-end border-white border-opacity-5">
									<span class=" font-monospace extra-small tracking-widest uppercase fw-bold d-block mb-3" style="background: rgba(220, 20, 60, 0.15); border: 1px solid rgba(220, 20, 60, 0.4); color: white;  padding: 2px 8px; border-radius: 50rem;">
										<i class="fas fa-heart-pulse me-1"></i> Deliverability & Health
									</span>
									<ul class="list-unstyled mb-0 d-flex flex-column gap-2">
										<li>
											<a href="/Email-server-health-check" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-microchip text-white-50 me-2"></i> Live Diagnostic Listener</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/SpamChecker" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-shield-virus text-white-50 me-2"></i> Spam Score Analyzer</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/BlacklistCheck" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-list-check text-white-50 me-2"></i> Global IP & Domain Blacklist</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
									</ul>
								</div>

								<!-- Sub-Column 2: Authentication & DNS -->
								<div class="col-md-6 ps-md-4 mt-4 mt-md-0">
									<span class=" font-monospace extra-small tracking-widest uppercase fw-bold d-block mb-3" style="background: rgba(220, 20, 60, 0.15); border: 1px solid rgba(220, 20, 60, 0.4); color: white;  padding: 2px 8px; border-radius: 50rem;">
										<i class="fas fa-dns me-1"></i> Authentication & DNS
									</span>
									<ul class="list-unstyled mb-0 d-flex flex-column gap-2">
										<li>
											<a href="/Spf-DKIM-Generator" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-key text-white-50 me-2"></i> SPF & DKIM Record Generator</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/DmarcInspector" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-lock text-white-50 me-2"></i> DMARC Compliance Checker</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
										<li>
											<a href="/Email-DNS-Setup-check" class="text-white text-decoration-none d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
												<span><i class="fas fa-server text-white-50 me-2"></i> MX & RDNS Resolver</span>
												<i class="fas fa-chevron-right text-white-50 small"></i>
											</a>
										</li>
									</ul>
								</div>
							</div> <!-- end combined box inner row -->

						</div> <!-- end combined box -->
					</div> <!-- end modal body -->

					<!-- 3. Modal Footer (Left Aligned Status/Links) -->
					<div class="modal-footer border-top border-white border-opacity-10 p-3 justify-content-start gap-4">
						<span class="text-white-50 font-monospace extra-small">NODE: sc01_active</span>
						<a href="https://docs.firetip.pro/" target="_blank" class="text-fire-red font-monospace extra-small text-decoration-none fw-bold">
							API & TOOL DOCUMENTATION &rarr;
						</a>
					</div>
				</div>

				<!-- RIGHT PANEL: Mascot Image (Filling all space) -->
				<div class="col-lg-5 p-0 d-flex align-items-stretch" style="background: rgba(8, 12, 20, 0.98);">
					
					<!-- Close button is anchored to the top-right of the image panel -->
					<button type="button" class="btn-close btn-close-white shadow-none position-absolute" data-bs-dismiss="modal" aria-label="Close" style="font-size: 0.75rem; opacity: 0.75; top: 1rem; right: 1rem; z-index: 5;"></button>

					<!-- Subtle Glow overlay behind image to make flames pop -->
					<div style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: radial-gradient(circle, rgba(217, 59, 20, 0.08) 0%, rgba(13, 18, 28, 0) 70%); filter: blur(30px); pointer-events: none; z-index: 0;"></div>

					<!-- Full-Bleed Mascot Image -->
					<img src="firetipman_toolbox.png" 
						 alt="Firetip Mascot Logo" 
						 class="img-fluid" 
						 style="width: 100%; height: 100%; object-fit: cover; object-position: center bottom; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.5)) contrast(105%); position: relative; z-index: 1;" />
				</div>

			</div> <!-- end row -->

		</div>
	</div>
</div>
<!-- FIRE ENGINE FULL SDK & REST API DOCUMENTATION SECTION -->
<section id="firetip-php-sdk" class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f1117 0%, #1a1d24 100%);">
    <!-- Background Glow Orbs -->
    <div class="position-absolute rounded-circle" style="width: 500px; height: 500px; background: rgba(220, 53, 69, 0.1); filter: blur(100px); top: 10%; right: -10%; pointer-events: none;"></div>
    <div class="position-absolute rounded-circle" style="width: 400px; height: 400px; background: rgba(255, 193, 7, 0.05); filter: blur(90px); bottom: 10%; left: -10%; pointer-events: none;"></div>

    <div class="container py-4 position-relative z-1">
        <!-- Section Header -->
      <!-- FIRE ENGINE SDK DOCUMENTATION HEADER -->
 <!-- Background Glow Orbs -->
    <div class="position-absolute rounded-circle" style="width: 500px; height: 500px; background: rgba(220, 53, 69, 0.1); filter: blur(100px); top: 10%; right: -10%; pointer-events: none;"></div>
    <div class="position-absolute rounded-circle" style="width: 400px; height: 400px; background: rgba(255, 193, 7, 0.05); filter: blur(90px); bottom: 10%; left: -10%; pointer-events: none;"></div>

    <div class="container py-4 position-relative z-1">
        <!-- Section Header -->
        <div class="row mb-5">
            <div class="col-lg-8">
                <span class="badge rounded-pill px-3 py-1.5 font-monospace mb-3 fw-bold shadow-sm" style="font-size: 0.75rem; background: #42cb3b; color: #ffffff;">
                    <i class="fa-solid fa-code me-1"></i> PHP SDK & REST API REFERENCE
                </span>
                <h2 class="fw-bold text-white mb-3"><i class="fa-brands fa-php text-primary"></i> Firetip PHP SDK & REST API Documentation <i class="fa-solid fa-shield-halved text-success"></i></h2>
                <p class="text-white-50 lead fs-6 mb-0">
                    The official <strong>Firetip PHP SDK v2.01</strong> and REST API provide a secure, hardware-aligned interface for Firetip users to execute high-performance sovereign outreach, manage automated email and SMS campaigns, capture leads, and interface directly with your <strong class="text-warning">SC01</strong> infrastructure using the <strong>HMAC‑SC01 Signature System</strong> for zero API key exposure, payload integrity, and replay protection.
                </p>
            </div>
        </div>

        <!-- Verification & Capabilities Grid -->
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-3 p-2.5 d-flex align-items-center justify-content-center shadow-sm" style="background: rgba(40, 167, 69, 0.2); border: 1px solid rgba(40, 167, 69, 0.4); color: #28a745;">
                            <i class="fa-solid fa-signature fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-0" style="font-size: 0.9rem;">HMAC-SC01 Pipeline</h5>
                            <span class="text-success font-monospace" style="font-size: 0.7rem;">Active & Secure</span>
                        </div>
                    </div>
                    <p class="text-white-50 small mb-0 font-monospace">
                        Headers <code class="text-warning">X-SC01-Signature</code> and <code class="text-warning">X-SC01-Timestamp</code> are automatically generated using <code class="text-warning">hash_hmac('sha256', ...)</code> with zero plaintext API key transmission over transport layers.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-3 p-2.5 d-flex align-items-center justify-content-center shadow-sm" style="background: rgba(220, 53, 69, 0.2); border: 1px solid rgba(220, 53, 69, 0.4); color: #ff4d5a;">
                            <i class="fa-solid fa-network-wired fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-0" style="font-size: 0.9rem;">Core Endpoints Mapped</h5>
                            <span class="text-danger font-monospace" style="font-size: 0.7rem;">Verified Routing</span>
                        </div>
                    </div>
                    <ul class="text-white-50 small font-monospace mb-0 ps-3" style="line-height: 1.8;">
                        <li><code class="text-light">collector.php</code> (Lead Capture)</li>
                        <li><code class="text-light">email/send</code> (Direct Dispatch)</li>
                        <li><code class="text-light">sms/send</code> & <code class="text-light">otp_send</code> (SMS/OTP)</li>
                        <li><code class="text-light">v1/bridge/provision</code> (DKIM/DNS)</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 rounded-4 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.08);">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="rounded-3 p-2.5 d-flex align-items-center justify-content-center shadow-sm" style="background: rgba(255, 193, 7, 0.2); border: 1px solid rgba(255, 193, 7, 0.4); color: #ffc107;">
                            <i class="fa-solid fa-triangle-exclamation fa-lg"></i>
                        </div>
                        <div>
                            <h5 class="text-white fw-bold mb-0" style="font-size: 0.9rem;">Exception Handling</h5>
                            <span class="text-warning font-monospace" style="font-size: 0.7rem;">Robust Error Codes</span>
                        </div>
                    </div>
                    <p class="text-white-50 small mb-0 font-monospace">
                        Mapped error codes from <code class="text-warning">1001</code> (Unauthorized) through <code class="text-warning">2003</code> (Reputation Drop) encapsulated inside <code class="text-warning">FiretipException</code>.
                    </p>
                </div>
            </div>
        </div>

        <!-- Quick Summary Box -->
        <div class="mt-4 p-4 rounded-4 shadow-lg" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.06);">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div class="font-monospace text-white-50 small">
                    <i class="fa-solid fa-circle-info text-info me-1"></i> SDK v2.01 ready for deployment on your <strong class="text-white">sc01 node</strong> infrastructure.
                </div>
                <div class="font-monospace text-warning small">
                    <i class="fa-solid fa-server me-1"></i> Sovereign Architecture v2.01
                </div>
            </div>
        </div>
    </div>

        <!-- Documentation Layout Grid -->
        <div class="row g-4">
            <!-- Navigation Sidebar / Quick Links -->
            <div class="col-lg-3">
                <div class="p-4 rounded-4 shadow-lg sticky-top" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.08); top: 2rem;">
                    <h6 class="font-monospace text-uppercase tracking-widest text-warning mb-3" style="font-size: 0.75rem;">Documentation Index <i class="fa-solid fa-list"></i></h6>
                    <nav class="nav flex-column gap-2 font-monospace small">
                        <a href="#install-init" class="nav-link text-white-50 px-0 py-1 hover-text-danger">1. Installation & Init</a>
                        <a href="#hmac-auth" class="nav-link text-white-50 px-0 py-1 hover-text-danger">2. HMAC-SC01 Auth</a>
                        <a href="#error-handling" class="nav-link text-white-50 px-0 py-1 hover-text-danger">3. Error Handling</a>
                        <a href="#core-methods" class="nav-link text-white-50 px-0 py-1 hover-text-danger">4. Core SDK Methods</a>
                        <a href="#domain-provisioning" class="nav-link text-white-50 px-0 py-1 hover-text-danger">5. Domain Bridge</a>
                        <a href="#multi-tenant" class="nav-link text-white-50 px-0 py-1 hover-text-danger">6. Multi‑Tenant & Arch</a>
                        <a href="#rest-api-index" class="nav-link text-white-50 px-0 py-1 hover-text-danger">7. REST API Index</a>
                    </nav>
                    <div class="mt-4 pt-4 border-top border-secondary border-opacity-25 font-monospace">
                        <a href="https://firetip.pro/developer" class="text-decoration-none d-block position-relative overflow-hidden p-3 rounded-4 transition-all hover-glow-card" style="background: linear-gradient(135deg, rgba(220, 53, 69, 0.08) 0%, rgba(15, 17, 23, 0.9) 100%); border: 1px solid rgba(220, 53, 69, 0.3);">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-danger opacity-0 transition-all hover-bg-glow" style="pointer-events: none; filter: blur(20px);"></div>
                            <div class="d-flex align-items-center justify-content-between position-relative z-1">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="rounded-3 p-2.5 d-flex align-items-center justify-content-center shadow-sm" style="background: rgba(220, 53, 69, 0.2); border: 1px solid rgba(220, 53, 69, 0.4); color: #ff4d5a;">
                                        <i class="fa-solid fa-server fa-lg"></i>
                                    </div>
                                    <div>
                                        <div class="text-white fw-bold mb-0" style="font-size: 0.8rem; letter-spacing: 0.5px;">DEVELOPER CONSOLE</div>
                                        <div class="text-warning opacity-75" style="font-size: 0.65rem;">Manage SC01 node routing lanes, API keys, and server health.</div>
                                    </div>
                                </div>
                                <div class="rounded-circle p-2 d-flex align-items-center justify-content-center text-white transition-all hover-translate-icon" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                                    <i class="fa-solid fa-arrow-right" style="font-size: 0.7rem;"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Documentation Content Area -->
            <div class="col-lg-9">
                <div class="p-4 p-md-5 rounded-4 shadow-lg" style="background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.08);">
                    
                    <!-- Section 1: Installation & Initialization -->
                    <div id="install-init" class="mb-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 1</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Installation & Initialization</h3>
                        </div>
                        <p class="text-white-50 small mb-2">Require the SDK via Composer:</p>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>composer require firetip/sdk</code></pre>
                        
                        <p class="text-white-50 small mb-2">Initialize the client in your application:</p>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>&lt;?php
use Firetip\SDK\Firetip;

$client = new Firetip('FT_LIVE_xxxxxxxx', '123', 'example.com');
?&gt;</code></pre>

                        <div class="table-responsive">
                            <table class="table table-dark table-striped align-middle mb-0 font-monospace small" style="background: transparent; border-color: rgba(255,255,255,0.08);">
                                <thead>
                                    <tr style="border-bottom: 2px solid rgba(220,53,69,0.3);">
                                        <th class="text-danger py-3">Parameter</th>
                                        <th class="text-white py-3">Description</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white-50">
                                    <tr><td class="text-warning fw-bold">apiKey</td><td>Your Firetip API key (used only to generate signatures).</td></tr>
                                    <tr><td class="text-warning fw-bold">campaignId</td><td>Default campaign context for lead capture and dispatch.</td></tr>
                                    <tr><td class="text-warning fw-bold">domainKey</td><td>Optional domain routing identifier for multi‑tenant systems.</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Section 2: HMAC-SC01 Auth -->
                    <div id="hmac-auth" class="mb-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 2</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Authentication Model (HMAC‑SC01)</h3>
                        </div>
                        <p class="text-white-50 small mb-3">
                            Firetip no longer uses <code>Authorization: Bearer</code>. All requests must include the following headers to bind the SDK to your SC01 hardware node:
                        </p>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>X-SC01-Signature: &lt;hmac_signature&gt;
X-SC01-Timestamp: &lt;unix_epoch&gt;</code></pre>

                        <h4 class="text-white fs-6 fw-bold mb-3">Signature Generation Steps:</h4>
                        <ol class="text-white-50 small font-monospace mb-4">
                            <li class="mb-2">Convert the payload to JSON.</li>
                            <li class="mb-2">Generate a timestamp nonce.</li>
                            <li class="mb-2">Build the canonical string: <code class="text-warning">&lt;timestamp&gt;\n&lt;json_payload&gt;</code></li>
                            <li class="mb-2">Compute: <code class="text-warning">HMAC_SHA256(api_key, canonical_string)</code></li>
                            <li class="mb-2">Send the hex‑encoded signature in the header.</li>
                        </ol>
                        
                        <p class="text-white-50 small mb-0">
                            <i class="fa-solid fa-link text-info me-1"></i> For the full specification, see the <a href="ca://s?q=Generate_Firetip_Signature_Spec" class="text-danger text-decoration-none">Firetip Signature Spec</a>.
                        </p>
                    </div>

                    <!-- Section 3: Error Handling -->
                    <div id="error-handling" class="mb-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 3</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Error Handling</h3>
                        </div>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>&lt;?php
try {
    $client->sendDirectEmail(...);
} catch (FiretipException $e) {
    echo $e->getMessage();
    echo $e->getFiretipCode();
}
?&gt;</code></pre>

                        <div class="table-responsive">
                            <table class="table table-dark table-striped align-middle mb-0 font-monospace small" style="background: transparent; border-color: rgba(255,255,255,0.08);">
                                <thead>
                                    <tr style="border-bottom: 2px solid rgba(220,53,69,0.3);">
                                        <th class="text-danger py-3">Error Code</th>
                                        <th class="text-white py-3">Description</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white-50">
                                    <tr><td class="text-warning fw-bold">1001</td><td>Unauthorized — invalid signature or API key.</td></tr>
                                    <tr><td class="text-warning fw-bold">1002</td><td>Malformed JSON payload.</td></tr>
                                    <tr><td class="text-warning fw-bold">1003</td><td>Missing required parameters.</td></tr>
                                    <tr><td class="text-warning fw-bold">1004</td><td>Invalid email format.</td></tr>
                                    <tr><td class="text-warning fw-bold">1005</td><td>Campaign not found.</td></tr>
                                    <tr><td class="text-warning fw-bold">1006</td><td>Domain key invalid or unprovisioned.</td></tr>
                                    <tr><td class="text-warning fw-bold">2001</td><td>SC01 hardware node offline.</td></tr>
                                    <tr><td class="text-warning fw-bold">2002</td><td>Queue saturation — outbound cluster full.</td></tr>
                                    <tr><td class="text-warning fw-bold">2003</td><td>Reputation drop — warmup or blocklist issue.</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Section 4: Core SDK Methods -->
                    <div id="core-methods" class="mb-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 4</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Core SDK Methods</h3>
                        </div>

                        <!-- 4.1 Capture Lead -->
                        <h4 class="text-white fs-6 fw-bold mt-4 mb-2 border-start border-danger border-3 ps-2">4.1 Capture Lead</h4>
                        <p class="text-white-50 small mb-2">Captures a subscriber into the active campaign.</p>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$client->captureLead('user@example.com', [
    'full_name' => 'John Doe',
    'country'   => 'UK'
]);</code></pre>

                        <!-- 4.2 Send Direct Email -->
                        <h4 class="text-white fs-6 fw-bold mt-4 mb-2 border-start border-danger border-3 ps-2">4.2 Send Direct Email</h4>
                        <p class="text-white-50 small mb-3">Required for transactional dispatch. Authentication is handled via <code>X-SC01-Signature</code> and <code>X-SC01-Timestamp</code> headers generated from your API key.</p>
                        
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$client->sendDirectEmail(
    $toEmail,       // string: Target address
    $subject,       // string: Email subject
    $htmlContent,   // string|int: Raw HTML or Template ID
    $recipientName, // string: Display name
    $options        // array: Configuration & routing
);</code></pre>

                        <p class="text-white-50 fw-bold small mb-2">Extended $options Configuration:</p>
                        <div class="table-responsive mb-4">
                            <table class="table table-dark table-striped align-middle mb-0 font-monospace small" style="background: transparent; border-color: rgba(255,255,255,0.08);">
                                <thead>
                                    <tr style="border-bottom: 2px solid rgba(220,53,69,0.3);">
                                        <th class="text-danger py-2">Key</th>
                                        <th class="text-white py-2">Type</th>
                                        <th class="text-white-50 py-2">Description</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white-50">
                                    <tr><td class="text-warning">sender_alias</td><td>string</td><td>Custom sender display name.</td></tr>
                                    <tr><td class="text-warning">reply_to</td><td>string</td><td>Custom reply-to address.</td></tr>
                                    <tr><td class="text-warning">list_id</td><td>int</td><td>Target list ID (triggers list-based routing).</td></tr>
                                    <tr><td class="text-warning">tracking</td><td>int</td><td>1=Enabled, 0=Disabled.</td></tr>
                                    <tr><td class="text-warning">country</td><td>string</td><td>ISO 2-letter code (en/fr/etc).</td></tr>
                                    <tr><td class="text-warning">interest</td><td>string</td><td>Subscriber niche tagging.</td></tr>
                                    <tr><td class="text-warning">metadata</td><td>array</td><td>JSON-serializable custom data.</td></tr>
                                    <tr><td class="text-warning">priority</td><td>string</td><td>'normal' or 'high'.</td></tr>
                                    <tr><td class="text-warning">scheduled_at</td><td>int</td><td>Unix timestamp for delayed dispatch.</td></tr>
                                    <tr><td class="text-warning">message_id</td><td>string</td><td>Custom 16-char hex ID for tracking.</td></tr>
                                    <tr><td class="text-warning">retry_policy</td><td>string</td><td>'standard' (default) or 'persistent'.</td></tr>
                                    <tr><td class="text-warning">template_id</td><td>int</td><td>Explicit template ID override.</td></tr>
                                    <tr><td class="text-warning">main_cta</td><td>string</td><td>Primary Call-to-Action link injection.</td></tr>
                                    <tr><td class="text-warning">attachments</td><td>array</td><td>Array of file paths for outbound payload.</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="text-white-50 fw-bold small mb-2">Implementation Example:</p>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$options = [
    'sender_alias' => 'bithotel.com', // Your domain name
    'reply_to'     => 'contact@bithotel.com', // Reply to
    'list_id'      => 34, // user list id
    'tracking'     => 1,  // (OPTIONAL) enable tracking
    'country'      => 'en',
    'interest'     => 'Hotel Guest',
    'metadata'     => ['user_id' => 123, 'node_id' => 'sc01'], // (OPTIONAL) Payload as array
    'main_cta'     => 'https://bithotel.com?uid=876543&campaignid=123' // Example CTA link
];

$firetip->sendDirectEmail(
    'rocketman@gmail.com', 
    'Bit Hotels', 
    '1', // 1 uses your html template from firetip account, otherwise inject HTML direct
    'John Joe', 
    $options
);</code></pre>

                        <!-- Additional Methods -->
                        <h4 class="text-white fs-6 fw-bold mt-4 mb-2 border-start border-danger border-3 ps-2">4.3 Delivery Status</h4>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$status = $client->getDeliveryStatus('MSG_8842');</code></pre>

                        <h4 class="text-white fs-6 fw-bold mt-4 mb-2 border-start border-danger border-3 ps-2">4.4 Fetch Logs</h4>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$logs = $client->fetchLogs(50, 'errors');</code></pre>

                        <h4 class="text-white fs-6 fw-bold mt-4 mb-2 border-start border-danger border-3 ps-2">4.5 Node Health Check</h4>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$health = $client->checkNodeHealth();</code></pre>
                    </div>

                    <!-- Section 5: Domain Provisioning -->
                    <div id="domain-provisioning" class="mb-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 5</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Provision a Domain Bridge</h3>
                        </div>
                        <p class="text-white-50 small mb-3">
                            The PHP SDK allows you to provision a domain directly from your backend. This operation binds the domain to Firetip’s sovereign routing layer using the <strong>Domain Bridge Handshake</strong>.
                        </p>
                        
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$client->provisionDomain('example.com', 'primary');</code></pre>

                        <p class="text-white-50 small mb-2">This performs the following actions automatically via <code class="text-warning">POST /api/v1/bridge/provision</code>:</p>
                        <ul class="text-white-50 small font-monospace mb-4">
                            <li>Validates domain ownership</li>
                            <li>Assigns a sovereign routing path</li>
                            <li>Creates a hardware‑anchored trust binding</li>
                            <li>Enables outbound dispatch for the domain</li>
                        </ul>

                        <div class="table-responsive mb-3">
                            <table class="table table-dark table-striped align-middle mb-0 font-monospace small" style="background: transparent; border-color: rgba(255,255,255,0.08);">
                                <thead>
                                    <tr style="border-bottom: 2px solid rgba(220,53,69,0.3);">
                                        <th class="text-danger py-2">Parameter</th>
                                        <th class="text-white py-2">Description</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white-50">
                                    <tr><td class="text-warning">target_domain</td><td>The domain to provision.</td></tr>
                                    <tr><td class="text-warning">routing_path</td><td>Routing lane: <code>primary</code>, <code>redundant</code>, or <code>high-throughput</code>.</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="text-white-50 small mb-0">
                            <i class="fa-solid fa-link text-info me-1"></i> For the full handshake specification, see: <a href="ca://s?q=Domain_Bridge_Handshake_Spec" class="text-danger text-decoration-none">Domain Bridge Handshake</a>.
                        </p>
                    </div>

                    <!-- Section 6: Multi-Tenant & Architecture -->
                    <div id="multi-tenant" class="pt-3 border-top border-secondary border-opacity-25 mb-5">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 6</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Multi‑Tenant Routing & Architecture</h3>
                        </div>
                        <p class="text-white-50 small mb-3">
                            The PHP SDK is synchronized with the Firetip sovereign dispatch engine, SC01 hardware trust layer, and sCloud routing matrices. This ensures deterministic routing, hardware‑anchored identity, and zero shared‑cloud dependencies. Each domain maintains independent warmup, reputation, and routing lanes.
                        </p>
                        
                        <pre class="m-0 font-monospace text-light p-3 rounded-3 mb-4" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>$dispatcher = new Firetip($apiKey, '123');

// Switch context to Domain A
$dispatcher->setDomainKey('alpha-marketing.com');
$dispatcher->sendDirectEmail(...);

// Switch context to Domain B
$dispatcher->setDomainKey('faigen-media.net');
$dispatcher->sendDirectEmail(...);</code></pre>

                        <p class="text-white-50 fw-bold small mb-2">Complete Flow Example:</p>
                        <pre class="m-0 font-monospace text-light p-3 rounded-3" style="font-size: 0.75rem; background: rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.08);"><code>&lt;?php
use Firetip\SDK\Firetip;

$client = new Firetip('FT_LIVE_998x81723acb', '123', 'scloud.xyz');

$client->sendDirectEmail(
    'user@test.com',
    'Welcome to sCloud',
    '&lt;p&gt;Hello!&lt;/p&gt;'
);
?&gt;</code></pre>
                    </div>

                    <!-- Section 7: REST API Index -->
                    <section id="rest-api-index" class="pt-4 border-top border-secondary border-opacity-25">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-25 text-danger font-monospace px-2 py-1" style="font-size: 0.65rem;">SECTION 7</span>
                            <h3 class="fw-bold text-white fs-4 mb-0">Firetip REST API Index</h3>
                        </div>
                        <p class="text-white-50 small mb-4">
                            Complete reference for all REST endpoints powering Firetip’s sovereign dispatch engine. Includes provisioning, routing, dispatch control, telemetry, and administrative cluster operations.
                        </p>

                        <!-- Category Navigation -->
                        <nav class="mb-4 p-3 rounded-3" style="background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05);">
                            <ul class="list-unstyled mb-0 font-monospace small" style="line-height: 2;">
                                <li><a href="#identity-api" class="text-danger text-decoration-none fw-bold"><i class="fa-solid fa-chevron-right me-1 fs-xs"></i> Identity & Domain Provisioning</a></li>
                                <li><a href="#dispatch-api" class="text-danger text-decoration-none fw-bold"><i class="fa-solid fa-chevron-right me-1 fs-xs"></i> Outbound Dispatch Endpoints</a></li>
                                <li><a href="#telemetry-api" class="text-danger text-decoration-none fw-bold"><i class="fa-solid fa-chevron-right me-1 fs-xs"></i> Telemetry & Verification</a></li>
                                <li><a href="#cluster-api" class="text-danger text-decoration-none fw-bold"><i class="fa-solid fa-chevron-right me-1 fs-xs"></i> Cluster Control & System Operations</a></li>
                                <li><a href="#utility-api" class="text-danger text-decoration-none fw-bold"><i class="fa-solid fa-chevron-right me-1 fs-xs"></i> Utility & Diagnostic Endpoints</a></li>
                            </ul>
                        </nav>

                        <!-- SECTION 1: IDENTITY -->
                        <div id="identity-api" class="mb-4 pt-3">
                            <h4 class="text-white fw-bold fs-6 mb-2 border-start border-danger border-3 ps-2">7.1 Identity & Domain Provisioning</h4>
                            <p class="text-white-50 small mb-3">Endpoints responsible for domain authority, routing identity, and sc01 hardware binding.</p>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">
                                    <a href="#bridge-details" class="text-danger text-decoration-none">POST /api/v1/bridge/provision</a>
                                </h5>
                                <p class="text-white-50 small mb-0 font-monospace">Provision domain identity and assign routing authority.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">GET /api/v1/bridge/status</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Retrieve provisioning state, authority level, and DNS validation status.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">DELETE /api/v1/bridge/revoke</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Revoke domain authority and detach routing identity.</p>
                            </div>
                        </div>

                        <!-- SECTION 2: DISPATCH -->
                        <div id="dispatch-api" class="mb-4 pt-3">
                            <h4 class="text-white fw-bold fs-6 mb-2 border-start border-danger border-3 ps-2">7.2 Outbound Dispatch Endpoints</h4>
                            <p class="text-white-50 small mb-3">REST endpoints for transactional messages, batch dispatching, and queue management.</p>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">POST /api/v1/email/send</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Send a single transactional email via sc01 routing.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">POST /api/v1/sms/send</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Send SMS messages through Firetip’s GSM‑linked dispatch engine.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">POST /api/v1/otp/generate</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Generate and dispatch OTP codes with hardware‑bound identity.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">POST /api/v1/otp/verify</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Verify OTP codes using Firetip’s cryptographic validation engine.</p>
                            </div>
                        </div>

                        <!-- SECTION 3: TELEMETRY -->
                        <div id="telemetry-api" class="mb-4 pt-3">
                            <h4 class="text-white fw-bold fs-6 mb-2 border-start border-danger border-3 ps-2">7.3 Telemetry & Verification</h4>
                            <p class="text-white-50 small mb-3">Endpoints for message status, open tracking, and real‑time verification.</p>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">
                                    <a href="#verification-details" class="text-danger text-decoration-none">POST /api/v1/webhook/verification</a>
                                </h5>
                                <p class="text-white-50 small mb-0 font-monospace">Receive open, click, and validation events.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">GET /api/v1/message/status</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Query delivery, open, and verification state for any message.</p>
                            </div>
                        </div>

                        <!-- SECTION 4: CLUSTER CONTROL -->
                        <div id="cluster-api" class="mb-4 pt-3">
                            <h4 class="text-white fw-bold fs-6 mb-2 border-start border-danger border-3 ps-2">7.4 Cluster Control & System Operations</h4>
                            <p class="text-white-50 small mb-3">Administrative endpoints for managing dispatch clusters, queues, and node health.</p>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">
                                    <a href="#triage-details" class="text-danger text-decoration-none">PUT /api/v1/cluster/triage</a>
                                </h5>
                                <p class="text-white-50 small mb-0 font-monospace">Pause queues, flush relays, or isolate nodes.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">GET /api/v1/cluster/health</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Retrieve node health, latency metrics, and cluster load.</p>
                            </div>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">POST /api/v1/cluster/restart</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Restart a node or cluster segment.</p>
                            </div>
                        </div>

                        <!-- SECTION 5: UTILITY -->
                        <div id="utility-api" class="pt-3">
                            <h4 class="text-white fw-bold fs-6 mb-2 border-start border-danger border-3 ps-2">7.5 Utility & Diagnostic Endpoints</h4>
                            <p class="text-white-50 small mb-3">Supporting endpoints for logs, diagnostics, and system metadata.</p>

                            <div class="p-3 mb-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">GET /api/v1/logs/recent</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Retrieve recent dispatch logs for debugging.</p>
                            </div>

                            <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                                <h5 class="font-monospace text-danger fw-bold mb-1" style="font-size: 0.85rem;">GET /api/v1/system/info</h5>
                                <p class="text-white-50 small mb-0 font-monospace">Return system metadata, versioning, and hardware identity.</p>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .transition-all { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .hover-glow-card:hover { border-color: rgba(220, 53, 69, 0.8) !important; box-shadow: 0 10px 30px -10px rgba(220, 53, 69, 0.3); transform: translateY(-2px); }
    .hover-glow-card:hover .hover-bg-glow { opacity: 0.15; }
    .hover-glow-card:hover .hover-translate-icon { background: #dc3545 !important; border-color: #dc3545 !important; transform: translateX(3px); }
    .tracking-widest { letter-spacing: 0.1em; }
    .fs-xs { font-size: 0.65rem; }
</style><script>
async function startRace() {
    const btn = document.getElementById('race-btn');
    btn.disabled = true;
    btn.innerText = "INITIATING_REAL_TIME_HANDSHAKE...";

    let legacyTimer = 0;
    let firetipTimer = 0;
    let raceComplete = false;
    
    // Start the visual clocks
    const interval = setInterval(() => {
        if (!raceComplete) {
            legacyTimer += 0.07;
            document.getElementById('legacy-timer').innerText = legacyTimer.toFixed(2) + 's';
            document.getElementById('legacy-progress').style.width = Math.min((legacyTimer / 15 * 100), 100) + '%';
        }
    }, 70);

    // THE REAL HANDSHAKE: Hit your SMTP test script
    const startTime = performance.now();
    try {
        const response = await fetch('api/test_connection.php', {
            method: 'POST',
            body: JSON.stringify({ "test": "handshake" })
        });
        const result = await response.json();
        
        const endTime = performance.now();
        firetipTimer = (endTime - startTime) / 1000;
        raceComplete = true;
        clearInterval(interval);

        // Update SC01 Lane with Actual Data
        document.getElementById('firetip-timer').innerText = firetipTimer.toFixed(2) + 's [PASS]';
        document.getElementById('firetip-timer').classList.add('text-success');
        document.getElementById('firetip-progress').style.width = '100%';

        // Finish Legacy Lane (Simulate the contrast)
        const legacyFinal = firetipTimer * 18.5; // Visualizing the 18x speed gap
        document.getElementById('legacy-timer').innerText = legacyFinal.toFixed(2) + 's [FAIL]';
        document.getElementById('legacy-timer').classList.add('text-danger');
        
        btn.innerText = "RACE_COMPLETE: " + result.status;
        btn.disabled = false;

    } catch (error) {
        btn.innerText = "INFRASTRUCTURE_ERROR";
        btn.disabled = false;
    }
}
</script>

<footer class="py-5 border-top border-white border-opacity-5" style="background: #05070a;">
	<div class="container">
		<div class="row align-items-center g-4 mb-5">
    <!-- LEFT SIDE: LOGO & BRAND METRICS -->
    <div class="col-md-6 text-center text-md-start">
        <div class="d-flex align-items-center gap-3 justify-content-center justify-content-md-start">
            <div class="p-3 bg-fire-red rounded-4 shadow-glow-red">
                <i class="fas fa-fire-alt text-white fa-lg"></i>
            </div>
            <div>
                <div class="d-flex align-items-center gap-2">
                    <div style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1.8rem; font-weight: 800; color: #dc143c; letter-spacing: -1px; line-height: 1;">
                        Firetip
                    </div>
                    <i class="fas fa-envelope text-fire-red" style="font-size: 1.4rem; transform: translateY(1px); opacity: 0.9;"></i>
                    <i class="fas fa-comment-sms text-fire-red" style="font-size: 1.4rem;"></i>
                </div>

                <a href="https://scloud.live" target="_blank" class="text-decoration-none d-block mt-1">
                    <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 0.75rem; color: rgba(255,255,255,0.4); font-weight: 600; letter-spacing: 1px;">
                        By sCloud
                    </span>
                </a>
            </div>
        </div>
        <div class="mt-4">
            <a href="https://firetip.pro/Guide" title="Firetip Guide" class="btn-fire-premium">
                Firetip Guide
                <i class="fas fa-external-link-alt ms-2"></i>
            </a>
         
        </div>  <div class="text-white-50 font-monospace text-uppercase tracking-widest d-block" style="font-size: 0.65rem; letter-spacing: 1px;position:relative;top:10px;"><b>Information Commissioner Office -<br /> ICO Registration Number: ZC087305</b></div><div class="text-white-50 font-monospace text-uppercase tracking-widest d-block" style="font-size: 0.65rem; letter-spacing: 1px;position:relative;top:20px;"><b>SIC Code: 62012</b></div>
           
    </div>

    <!-- RIGHT SIDE: UK SOVEREIGN TRUST BADGES & CORE ACCOUNTS -->
    <div class="col-md-6 text-center text-md-end">
        <div class="d-flex flex-column align-items-center align-items-md-end gap-3" >
            
            <div class="d-flex flex-wrap justify-content-center justify-content-md-end gap-3 align-items-center" >
                <!-- UK SOVEREIGN BADGE -->
                <div class="d-inline-flex align-items-center bg-dark p-2 rounded border border-secondary text-start" style="min-width: 220px;">
                    <img src="https://upload.wikimedia.org/wikipedia/en/a/ae/Flag_of_the_United_Kingdom.svg" class="sovereign-flag me-3" style="width: 30px; height: auto;">
                    <div>
                        <div style="font-size: 0.7rem; color: #aaa; font-family: monospace; line-height: 1;">INFRASTRUCTURE ORIGIN:</div>
                        <div style="font-size: 0.85rem; font-weight: bold; color: #fff; letter-spacing: 1px;">UK SOVEREIGN</div>
                        <div style="font-size: 0.7rem; color: #ff0000; font-family: 'Courier New', monospace; font-weight: bold; letter-spacing: 1.5px; margin-top: 2px;">DREADNOUGHT-01</div>
                    </div>
                </div>

                <!-- POWERING BADGE -->
                <div class="status-badge-box d-inline-flex align-items-center bg-dark p-2 rounded border border-secondary text-start" style="min-width: 220px;">
                    <div class="status-icon-box me-3 px-1">
                        <i class="fas fa-heart text-fire-red" style="font-size: 0.9rem;"></i>
                    </div>
                    <div>
                        <div style="font-size: 0.7rem; color: #aaa; font-family: monospace; line-height: 1;">MISSION STATUS:</div>
                        <div style="font-size: 0.85rem; font-weight: bold; letter-spacing: 0.5px;">
                            <a href="/Sovereign" style="color: red; text-decoration: none;">POWERING BRITISH BUSINESSES</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ACCESS SYSTEM CTAs -->
            <div class="mt-2 text-center text-md-end">
               <a href="https://docs.firetip.pro" title="Firetip Guide" class="btn-fire-premium">
                API
                <i class="fas fa-external-link-alt ms-2"></i>
            </a>
            
                <a href="https://account.scloud.live" title="sCloud" class="btn-fire-premium mb-2 d-inline-block">
                    Access sCloud Core
                    <i class="fas fa-external-link-alt ms-2"></i>
                </a>
                <div class="text-white-50 font-monospace text-uppercase tracking-widest d-block" style="font-size: 0.65rem; letter-spacing: 1px;">
                    Firetip is built on the sCloud sc01 Infrastructure.
                </div>
            </div>

        </div>
    </div>
</div>

<!-- COMPREHENSIVE LINK INDEX FOOTER CATEGORIES -->
<div class="row mt-5 pt-4 border-top border-secondary border-opacity-25 justify-content-center">
    <div class="col-md-12 text-center">
        <div class="d-flex flex-column gap-5 align-items-center">
             <div class="text-white-50 font-monospace text-uppercase tracking-widest d-block" style="font-size: 0.65rem; letter-spacing: 1px;">Firetip is the world’s first Sovereign Outbound Infrastructure Running on SC01<br />
            — a hardware‑anchored, deterministic dispatch engine built for<br /> regulated and high‑volume systems.</div>
          
          
          
          <div id="sovereign-seal" style="background: linear-gradient(135deg, #0a0f1d 0%, #0f172a 100%); border: 1px solid rgba(56, 189, 248, 0.3); border-radius: 12px; padding: 20px; max-width: 320px; font-family: 'Courier New', Courier, monospace; color: #f8fafc; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); position: relative; overflow: visible; transform-style: preserve-3d; will-change: transform; animation: sealFloat 4s ease-in-out infinite;">
    
    <!-- Fireworks Container (Absolute Overlays) -->
    <div class="firework fw-1"></div>
    <div class="firework fw-2"></div>

    <!-- Automatic Ambient Holographic Shimmer Overlay -->
    <div id="holo-shimmer" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at 50% 50%, rgba(56, 189, 248, 0.3) 0%, rgba(168, 85, 247, 0.2) 40%, transparent 75%); mix-blend-mode: screen; animation: holoMove 4s ease-in-out infinite alternate; pointer-events: none; border-radius: 12px;"></div>

    <!-- Background Watermark Glow -->
    <div style="position: absolute; top: -50px; right: -50px; width: 120px; height: 120px; background: rgba(56, 189, 248, 0.05); border-radius: 50%; filter: blur(20px);"></div>
    
    <!-- Header -->
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding-bottom: 12px; margin-bottom: 14px; position: relative; z-index: 2;">
        <div style="display: flex; align-items: center; gap: 8px;">
         <style>
    @keyframes continuousRotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .fa-spin-slow {
        animation: continuousRotate 8s linear infinite;
    }
</style>

<i class="fa-solid fa-certificate fa-spin-slow text-success"></i>
            <span style="font-size: 0.75rem; font-weight: bold; letter-spacing: 0.1em; color: #cfc917;">SOVEREIGN SEAL</span>
        </div>
        <span style="font-size: 0.6rem; color: #94a3b8; background: rgba(255, 255, 255, 0.05); padding: 2px 6px; border-radius: 4px; border: 1px solid #cfc917;">VERIFIED</span>
    </div>

    <!-- Title & Description -->
    <div style="font-size: 0.9rem; font-weight: bold; margin-bottom: 6px; color: #ffffff; position: relative; z-index: 2;">UK Sovereign Compliance</div>
    <div style="font-size: 0.7rem; color: #94a3b8; line-height: 1.4; margin-bottom: 16px; position: relative; z-index: 2;">
        Cryptographically signed &amp; routed via dedicated sovereign infrastructure sC01.
    </div>

    <!-- Domain ID Box -->
    <div style="background: rgba(15, 23, 42, 0.9); border: 1px dashed rgba(56, 189, 248, 0.3); border-radius: 6px; padding: 10px; display: flex; flex-direction: column; gap: 4px; position: relative; z-index: 2;">
        <span style="font-size: 0.6rem; color: #64748b; letter-spacing: 0.05em;">CERTIFIED DOMAIN ID</span>
        <span style="font-size: 0.75rem; color: #cfc917; font-weight: bold; letter-spacing: 0.05em; word-break: break-all;">FT-SOV-9948-X72Q-LIVE</span>
    </div>
</div>

<style>
@keyframes sealFloat {
    0% {
        transform: perspective(1000px) rotateX(4deg) rotateY(-4deg) translateY(0px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 10px rgba(56, 189, 248, 0.1);
    }
    50% {
        transform: perspective(1000px) rotateX(-4deg) rotateY(4deg) translateY(-8px);
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.6), 0 0 20px rgba(56, 189, 248, 0.25);
    }
    100% {
        transform: perspective(1000px) rotateX(4deg) rotateY(-4deg) translateY(0px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 10px rgba(56, 189, 248, 0.1);
    }
}

@keyframes holoMove {
    0% {
        transform: translate(-30%, -30%) scale(0.9);
        opacity: 0.4;
    }
    50% {
        transform: translate(20%, 20%) scale(1.2);
        opacity: 0.8;
    }
    100% {
        transform: translate(-10%, 25%) scale(1);
        opacity: 0.5;
    }
}

/* Micro Firework Spark Effects */
.firework, .firework::before, .firework::after {
    position: absolute;
    width: 3px;
    height: 3px;
    border-radius: 50%;
    box-shadow: 9999px 9999px #ff1702;
    z-index: 10;
    pointer-events: none;
}

.firework.fw-1 {
    top: -10px;
    left: 20%;
    animation: fireworkBurst 2s infinite ease-out;
}

.firework.fw-2 {
    top: -5px;
    right: 25%;
    animation: fireworkBurst 2.5s infinite ease-out 1s;
}

@keyframes fireworkBurst {
    0% {
        box-shadow: 
            0 0 #38bdf8, 0 0 #22c55e, 0 0 #a855f7, 0 0 #ffffff;
        opacity: 1;
        transform: scale(0.2);
    }
    50% {
        opacity: 1;
    }
    100% {
        box-shadow: 
            -25px -25px transparent, 25px -30px transparent, 
            -30px 15px transparent, 30px 20px transparent,
            -10px -40px transparent, 15px -40px transparent;
        opacity: 0;
        transform: scale(1.2);
    }
}
</style>
          
          
          
          
          
          
          
            <!-- HEADER INDEX QUICKLINKS -->
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
                <a href="/About" class="text-white text-decoration-none font-monospace hover-fire" style="font-size: 0.95rem; letter-spacing: 2px;">ABOUT FIRETIP</a>
                <a href="/Support" class="text-white text-decoration-none font-monospace hover-fire" style="font-size: 0.95rem; letter-spacing: 2px;">SYSTEM SUPPORT</a>
                <a href="/Pricing" class="text-white text-decoration-none font-monospace hover-fire" style="font-size: 0.95rem; letter-spacing: 2px;">PRICING</a>
              <a href="/Sovereign" class="text-white text-decoration-none font-monospace hover-fire" style="font-size: 0.95rem; letter-spacing: 2px; display: inline-flex; align-items: center; gap: 8px;">
   
    <span style="background: rgba(220, 20, 60, 0.15); border: 1px solid rgba(220, 20, 60, 0.4); color: #ff3d3d;  padding: 2px 8px; border-radius: 50rem; font-weight: bold;"> UK SOVEREIGN </span>
</a>
                <a href="/Support#faqs" class="text-white text-decoration-none font-monospace hover-fire" style="font-size: 0.95rem; letter-spacing: 2px;">FAQ's</a>
            </div>
            
            <!-- SEPARATOR -->
            <div class="opacity-25" style="border-top: 1px solid #dc143c; width: 100%; max-width: 1140px;"></div>
            
            <!-- WIDE-SPACED 4 COLUMN FOOTER DIRECTORY -->
            <div class="row w-100 text-start justify-content-center gx-5 gy-4" style="max-width: 1140px;">
                
                <!-- COL 1: KNOWLEDGE & DOCUMENTATION -->
                <div class="col-12 col-sm-6 col-md-3 px-4">
                    <div class="font-monospace mb-3 text-white opacity-40 tracking-wider" style="font-size: 0.75rem; letter-spacing: 1.5px;">DOCUMENTATION</div>
                    <div class="d-flex flex-column gap-3">
                        <a href="https://docs.firetip.pro" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Documentation & API</b></a>
                        <a href="https://firetip.pro/Guide" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>User Guide</b></a>
                        <a href="https://firetip.pro/What-Is-Firetip" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>What Is Firetip</b></a>
                        <a href="https://firetip.pro/About#firetip-updates" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Firetip Updates</b></a>
                        <a href="https://firetip.pro/Article/" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>BLOG</b></a>
                    </div>
                </div>

                <!-- COL 2: DEVELOPER TOOLKITS -->
                <div class="col-12 col-sm-6 col-md-3 px-4">
                    <div class="font-monospace mb-3 text-white opacity-40 tracking-wider" style="font-size: 0.75rem; letter-spacing: 1.5px;">Developer Tools</div>
                    <div class="d-flex flex-column gap-3">
                        <a href="https://firetip.pro/Toolkits" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Toolkit's</b></a>
                        <a href="https://firetip.pro/Showcase-SDK" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>SDK's</b></a>
                        <a href="https://firetip.pro/Firetip-DNS" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Firetip DNS</b></a>
                        <a href="https://firetip.pro/Android" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Android App</b></a>
                         <a href="https://firetip.pro/Email-server-health-check" title="Email server health check" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Email Server Health Check</b></a>
                    <a href="https://firetip.pro/Firetip-HTML-Template-Engine-Specification " title="HTML Template Engine Specification " target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>HTML Template Engine Specification </b></a> </div>
       <a href="https://firetip.pro/Email-DNS-Setup-check" title="Email-DNS-Setup-check" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Email DNS Setup check</b></a>            
                 
                </div>

                <!-- COL 3: SMTP RELAYS & GATEWAYS -->
                <div class="col-12 col-sm-6 col-md-3 px-4">
                    <div class="font-monospace mb-3 text-white opacity-40 tracking-wider" style="font-size: 0.75rem; letter-spacing: 1.5px;">CORE PIPELINES</div>
                    <div class="d-flex flex-column gap-3">
                        <a href="https://firetip.pro/SMTP" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>SMTP SERVER</b></a>
                        <a href="https://firetip.pro/Free-SMTP" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>FREE OUTBOUND SMTP SERVER</b></a>
                        <a href="https://firetip.pro/SMTP" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Sovereign Relay</b></a>
                        <a href="https://firetip.pro/SMS-Gateway" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>SMS GATEWAY</b></a>
                          <a href="https://firetip.pro/SMTP" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>MTA</b></a>
                          
                               <a href="https://firetip.pro/Offer" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Exclusive Offer</b></a>
                    </div>
                </div>

                <!-- COL 4: NETWORK ECOSYSTEM -->
                <div class="col-12 col-sm-6 col-md-3 px-4">
                    <div class="font-monospace mb-3 text-white opacity-40 tracking-wider" style="font-size: 0.75rem; letter-spacing: 1.5px;">ECOSYSTEM</div>
                    <div class="d-flex flex-column gap-3">
                        <a href="/Email-Template-Builder" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>Email Template Builder</b></a>
                        <a href="https://faigen.live" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>FAIGEN AI</b></a>  
                        <a href="https://firetip.pro/White-Label" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>WHITE LABEL</b></a>
                        <a href="https://firetip.pro/Invite" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>NETWORK INVITE</b></a>
                        <a href="https://firetip.pro/Consultation" target="_blank" class="text-fire-red text-decoration-none font-monospace hover-fire" style="font-size: 0.85rem; letter-spacing: 0.5px;"><b>CONSULTATION</b></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- SHARED ELEMENT UTILITIES STYLE BLOCK -->
<style>
    .text-fire-red { color: #dc143c !important; }
    .bg-fire-red { background-color: #dc143c !important; }
    .shadow-glow-red { box-shadow: 0 0 15px rgba(220, 20, 60, 0.4); }
    
    .hover-fire {
        transition: color 0.15s ease-in-out, opacity 0.15s ease-in-out, transform 0.15s ease-in-out;
        line-height: 1.4;
    }
    .hover-fire:hover {
        color: #dc143c !important;
        opacity: 1 !important;
        transform: translateX(3px);
    }

    @media(max-width: 767px) {
        .row.text-start {
            text-align: center !important;
        }
        .hover-fire:hover {
            transform: scale(1.02);
        }
    }
</style>
		<div class="mt-5 pt-4 border-top border-white border-opacity-5">
			<div class="row g-3 justify-content-between align-items-center">
				<div class="col-lg-7">
					<div class="font-monospace text-white-50 opacity-50" style="font-size: 0.6rem; line-height: 1.6;">
						<span class="text-white opacity-75">LEGAL_DISCLOSURE:</span> Firetip™ is a high-velocity dispatch engine operated by sCloud Pro Ltd. All transmissions via the SC01 node are subject to global anti-spam regulations (CAN-SPAM, GDPR). Users are responsible for maintaining valid opt-in records and compliant SPF/DKIM handshakes.
					</div>
				</div>
				<div class="col-lg-5 text-lg-end">
					<div class="d-flex gap-3 justify-content-center justify-content-lg-end">
						<a href="https://seed.scloud.live" target="_blank" class="text-decoration-none extra-small font-monospace text-fire-red opacity-75 hover-white">PARTNERS</a>
						<a href="https://firetip.pro" target="_blank" class="text-decoration-none extra-small font-monospace text-fire-red opacity-75 hover-white">GLOBAL OUTREACH</a>
						<a href="https://firetip.pro" target="_blank" class="text-decoration-none extra-small font-monospace text-fire-red opacity-75 hover-white">LEAD GENERATION</a>
					<a href="https://firetip.pro/Guide#firetip-migration" target="_blank" class="text-decoration-none extra-small font-monospace text-fire-red opacity-75 hover-white">MIGRATION GUIDE</a>	<a href="https://firetip.pro/Terms#t&cs" target="_blank" class="text-decoration-none extra-small font-monospace text-fire-red opacity-75 hover-white">TERMS OF SERVICE</a>
						<a href="https://scloud.live/Privacy-Policy" target="_blank" class="text-decoration-none extra-small font-monospace text-fire-red opacity-75 hover-white">PRIVACY PROTOCOL</a>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-4 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
			<div style="font-family: 'Plus Jakarta Sans', sans-serif; font-size: 0.65rem; color: rgba(255,255,255,0.2); font-weight: 400; letter-spacing: 0.5px;">
				&copy; 2026 FIRETIP &sdot; HYBRID NODE SC01 - sCloud Pro Ltd &sdot; REGISTERED IN ENGLAND & WALES
			</div>

			<div class="d-flex gap-4 opacity-50">
				<i class="fas fa-shield-virus text-fire-red fa-xs" title="Encrypted"></i>
				<i class="fas fa-server text-fire-red fa-xs" title="Hybrid Node"></i>
				<i class="fas fa-satellite-dish text-fire-red fa-xs" title="Pulse Telemetry"></i>
				<i class="fas fa-fingerprint text-fire-red fa-xs" title="Device Verified"></i>
			</div>
		</div>
	</div>
</footer>
<style>
    /* Premium UI Styling */
    .btn-fire-premium {
        font-family: 'Plus Jakarta Sans', sans-serif;
        display: inline-flex;
        align-items: center;
        background: transparent;
        color: #fff !important;
        padding: 14px 32px;
        border-radius: 14px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none !important;
        border: 1px solid rgba(220, 20, 60, 0.4);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .btn-fire-premium:hover {
        background: #dc143c;
        border-color: #dc143c;
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(220, 20, 60, 0.4);
    }

    .shadow-glow-red {
        box-shadow: 0 0 25px rgba(220, 20, 60, 0.4);
    }

    /* Clean reset for parent link */
    a { transition: opacity 0.3s ease; }
    a:hover { opacity: 0.8; }
</style>

<style>
    /* Clean UI Overrides */
    .btn-red-minimal {
        font-family: 'Plus Jakarta Sans', sans-serif;
        display: inline-flex;
        align-items: center;
        background: #dc143c;
        color: #fff !important;
        padding: 12px 28px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-decoration: none !important;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        box-shadow: 0 4px 15px rgba(220, 20, 60, 0.3);
    }

    .btn-red-minimal:hover {
        background: #ff1a4a;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(220, 20, 60, 0.5);
    }

    .shadow-glow-red {
        box-shadow: 0 0 15px rgba(220, 20, 60, 0.6);
    }

    /* Remove standard link styles */
    a { text-decoration: none !important; }
</style>

<style>
    /* Adding these minor utility classes to your existing <style> block */
    .hover-red-glow {
        transition: all 0.3s ease;
    }
    .hover-red-glow:hover {
        border-color: var(--fire-red) !important;
        box-shadow: 0 0 15px rgba(220, 20, 60, 0.3);
        background: rgba(220, 20, 60, 0.05) !important;
    }
    .hover-text-fire:hover {
        color: var(--fire-red) !important;
    }
    .transition-all {
        transition: all 0.3s ease;
    }
</style>

<style>
    /* Firetip Hub Typography Scaling */
    .hub-title {
        color: var(--fire-red);
        font-size: 0.75rem; /* Increased from 0.55rem */
        font-weight: 900;
        letter-spacing: 2px;
        margin-bottom: 6px;
        text-transform: uppercase;
    }

    .hub-description {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.85rem; /* Increased from 0.65rem for better readability */
        font-weight: 600;
        line-height: 1.3;
        font-family: 'Courier New', Courier, monospace;
    }

    .hub-item-glass {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-align: center;
        min-height: 140px; /* Increased height to accommodate larger text */
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px !important;
    }

    .hub-item-glass:hover {
        background: rgba(220, 20, 60, 0.08);
        border-color: rgba(220, 20, 60, 0.5);
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
    }

    /* Icon size boost */
    .hub-item-glass i {
        font-size: 1.8rem; 
        margin-bottom: 12px !important;
    }
</style>
<div class="modal fade" id="auraHubModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content overflow-hidden border-0"
             style="background: #0a0a0d; border: 1px solid rgba(220, 20, 60, 0.3); border-radius: 40px;">

			<div style="height: 4px; width: 100%; background: var(--fire-red); box-shadow: 0 0 20px var(--fire-red);"></div>

			<div class="modal-body p-4 p-md-5">
				<h4 class="text-white text-center fw-900 " style="letter-spacing: 4px;">
					<i class="fas fa-fire-alt text-fire-red"></i> Firetip HUB<span class="text-fire-red">.</span>
				</h4>

				<div class="row g-3">
					<div class="col-6">
						<a href="#" class="hub-item-glass rounded-4 text-decoration-none">
							<i class="fas fa-envelope text-fire-red"></i>
							<div class="hub-title">Firetip</div>
							<div class="hub-description">Professional Email Campaigns</div>
						</a>
					</div>

					<div class="col-6">
						<a href="#" class="hub-item-glass rounded-4 text-decoration-none">
							<i class="fas fa-comment-sms text-success"></i>
							<div class="hub-title" style="color: #198754;">Gateway</div>
							<div class="hub-description">SMS Gateway Engine</div>
						</a>
					</div>

					<div class="col-6">
						<a href="https://faigen.live" class="hub-item-glass rounded-4 text-decoration-none" style="border: 1px solid rgba(255, 193, 7, 0.2);">
							<i class="fas fa-brain" style="color: #ffc107;"></i>
							<div class="hub-title" style="color: #ffc107;">FAIGEN</div>
							<div class="hub-description">Sovereign Intelligence Core</div>
						</a>
					</div>

					<div class="col-6">
						<a href="#" class="hub-item-glass rounded-4 text-decoration-none">
							<i class="fas fa-layer-group text-info"></i>
							<div class="hub-title" style="color: #0dcaf0;">Aura</div>
							<div class="hub-description">Email Template Builder</div>
						</a>
					</div>

					<div class="col-6">
						<a href="#" class="hub-item-glass rounded-4 text-decoration-none">
							<i class="fas fa-shield text-warning"></i>
							<div class="hub-title" style="color: #ffc107;">OTP Vault</div>
							<div class="hub-description">Secure 2FA Injection</div>
						</a>
					</div>

					<div class="col-6">
						<a href="https://scloud.live" class="hub-item-glass rounded-4 text-decoration-none">
							<i class="fas fa-cloud text-primary"></i>
							<div class="hub-title" style="color: #0d6efd;">sCloud</div>
							<div class="hub-description">Sovereign Data Storage</div>
						</a>
					</div>
				</div>

				<div class="mt-4 text-center">
					<h4 class="text-white text-center fw-900 " style="letter-spacing: 4px;">
						sCloud
					</h4>
					<div class=" text-fire-red" style="font-size: 0.85rem; letter-spacing: 2px;">
						<b>Products & Services by sCloud Pro Ltd</b>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
    const container = document.querySelector('.p-5.rounded-5.glass-panel-dark');
    const otpCodeElement = document.getElementById('otp-code-reveal');
    
    function startSequence() {
        // 1. Kill the animation state
        container.setAttribute('data-anim-state', 'idle');
        
        
        
        
        // 2. Force a DOM Reflow (The "Flash" fix)
        void container.offsetWidth; 
        
        // 3. Set new random code
        otpCodeElement.textContent = Math.floor(1000 + Math.random() * 9000);
        
        // 4. Re-activate
        container.setAttribute('data-anim-state', 'active');
    }

    // Set timestamps for logs once (so they are visible when active)
    const logs = container.querySelectorAll('.log-entry');
    logs.forEach((log, i) => {
        log.style.animationDelay = (i * 4) + 's'; // Spreads log reveals
    });

    // Start
    startSequence();
    // Loop every 15 seconds
    setInterval(startSequence, 15000); 
});
</script><!-- CONVERSION INTEL BUBBLE -->
<!--<div id="intelBubble" class="firetip-intel-bubble p-4 rounded-4"
     style="background: #0f0f0f; border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6); max-width: 360px; position: fixed; bottom: 20px; right: 20px; z-index: 10000;">

	<div class="d-flex align-items-start mb-3">
		<div class="position-relative me-3">
			<div class="intel-pulse"></div>
			<div class="icon-core d-flex align-items-center justify-content-center bg-black border border-fire-red rounded-circle" style="width: 44px; height: 44px; box-shadow: 0 0 20px rgba(255, 69, 0, 0.4);">
				<i class="fas fa-fire-alt text-fire-red" style="font-size: 1.3rem;"></i>
			</div>
		</div>

		<div class="flex-grow-1">
			<h6 class="text-white fw-bold mb-0" style="font-size: 0.85rem; letter-spacing: 0.5px; text-transform: uppercase;">
				Firetip Intel Core
			</h6>
			<div class="text-fire-red small fw-bold mb-2" style="font-size: 0.65rem;">SYSTEM ACTIVE</div>
			<p class="text-white opacity-75 m-0" style="font-size: 0.85rem; line-height: 1.4;">
				How Firetip fuels your ROI:
			</p>
		</div>
		<button onclick="closeIntel()" class="btn-close btn-close-white ms-2" style="font-size: 0.6rem; filter: invert(1) grayscale(100%) brightness(200%);" aria-label="Close"></button>
	</div>

	<div class="intel-content bg-black bg-opacity-50 p-3 rounded-3 border border-white border-opacity-10">
		<ul class="list-unstyled mb-0">
			
			<li class="d-flex align-items-start mb-3">
				<div class="me-3 mt-1 text-center" style="width: 20px;">
					<i class="fas fa-envelope-open-text text-fire-red"></i>
				</div>
				<div>
					<div class="text-white small fw-bold">1,2 second Email Delivery</div>
					<div class="text-white opacity-50" style="font-size: 0.75rem;">Hit customers while they're hot to double your conversion rates.</div>
				</div>
			</li>
			
			<li class="d-flex align-items-start mb-3">
				<div class="me-3 mt-1 text-center" style="width: 20px;">
					<i class="fas fa-sms text-info"></i>
				</div>
				<div>
					<div class="text-white small fw-bold">Instant Outreach</div>
					<div class="text-white opacity-50" style="font-size: 0.75rem;">Triple-Auth ensures you bypass spam filters for max visibility.</div>
				</div>
			</li>
			
			<li class="d-flex align-items-start">
				<div class="me-3 mt-1 text-center" style="width: 20px;">
					<i class="fas fa-chart-line text-success"></i>
				</div>
				<div>
					<div class="text-white small fw-bold">Live ROI Analytics</div>
					<div class="text-white opacity-50" style="font-size: 0.75rem;">Track sales in real-time and pivot to high-performing content.</div>
				</div>
			</li>
		</ul>
	</div>


	<div class="mt-4 d-flex justify-content-between align-items-center">
		<div class="text-white-50 fw-bold" style="font-size: 0.65rem;">OPTIMIZED FOR GROWTH</div>
		<a href="https://firetip.pro/Signup" class="btn btn-sm px-4 py-2 rounded-pill fw-bold" style="font-size: 0.7rem; background: #ff4500; color: #fff; border: none; box-shadow: 0 4px 12px rgba(255, 69, 0, 0.4); text-decoration: none;">
			Maximize My ROI
			<i class="fas fa-chevron-right ms-2"></i>
		</a>
	</div>
</div>-->

<script>
	// Logic to handle closing the bubble
	function closeIntel()
	{
		const bubble = document.getElementById('intelBubble');
		bubble.style.transition = '0.3s opacity ease, 0.3s transform ease';
		bubble.style.opacity = '0';
		bubble.style.transform = 'translateY(20px)';
		setTimeout(() => {
			bubble.style.display = 'none';
		}, 300);
	}
</script>

<style>
	.text-fire-red {
		color: #ff4500 !important;
	}

	/* The Glow/Pulse Effect */
	.intel-pulse {
		position: absolute;
		top: 0;
	left: 0;
	right: 0;
	bottom: 0;
		border-radius: 50%;
		background: #ff4500;
		animation: pulse-ring 2.5s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
		z-index: -1;
	}

	@keyframes pulse-ring {
		0% {
			transform: scale(.33);
	opacity: 0.7;
		}
		80%, 100% {
			transform: scale(1.6);
	opacity: 0;
		}
	}
</style>
<script>
	// Show the bubble after 2 seconds for a "pro-active" feel
	//window.onload = function() {
	//	setTimeout(function() {
	//		document.getElementById('intelBubble').style.display = 'block';
	//	}, 2000);
	//};

	// Simple dismiss function
	function closeIntel()
	{
		const bubble = document.getElementById('intelBubble');
		bubble.style.transition = '0.4s ease';
		bubble.style.transform = 'translateY(20px)';
		bubble.style.opacity = '0';
		setTimeout(() => bubble.remove(), 400);
	}
</script><!-- sovereign_privacy_protocol.html -->

<div id="sovereign-privacy-banner" class="position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-4 w-100 px-3" style="z-index: 9999; pointer-events: none; max-width: 500px;">
    <div class="d-flex align-items-center justify-content-center gap-2 gap-sm-3 px-3 py-2 px-md-4 py-md-3 border rounded-pill glass-capsule-engine text-nowrap mx-auto" 
         style="pointer-events: auto; background: rgba(15, 17, 23, 0.65); backdrop-filter: blur(14px) saturate(180%); -webkit-backdrop-filter: blur(14px) saturate(180%); border-color: rgba(220, 20, 60, 0.2) !important; width: fit-content;">
        
        <div class="d-flex align-items-center gap-1.5 gap-sm-2 font-monospace tracking-wider text-warning" style="font-size: 0.7rem; font-size: calc(0.65rem + 0.1vw); font-weight: 700;">
            <i class="fas fa-shield-halved text-fire-red"></i>
            <span> Privacy</span>
        </div>

        <div class="opacity-25" style="border-left: 1px solid rgba(255, 255, 255, 0.4); height: 12px;"></div>

        <div class="d-flex align-items-center gap-2 font-monospace text-white-50" style="font-size: 0.65rem; font-size: calc(0.6rem + 0.1vw); letter-spacing: 0.5px;">
            <span>Zero Cookies - No Tracking</span>
            <span class="d-inline-block rounded-circle position-relative pulse-dot-indicator" style="width: 5px; height: 5px; background-color: #dc143c;"></span>
        </div>

    </div>

    <style>
        .text-fire-red { color: #dc143c !important; }
        
        /* Premium Soft Edge Box Shadow */
        .glass-capsule-engine {
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.8), 0 0 15px rgba(220, 20, 60, 0.05);
            transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.2s ease;
        }
        .glass-capsule-engine:hover {
            border-color: rgba(220, 20, 60, 0.45) !important;
            box-shadow: 0 12px 35px -8px rgba(0, 0, 0, 0.9), 0 0 20px rgba(220, 20, 60, 0.15);
            transform: translateY(-1px);
        }

        /* Tactical Live Node Pulse Effect */
        @keyframes dynamicPulse {
            0% { box-shadow: 0 0 0 0 rgba(220, 20, 60, 0.7); }
            70% { box-shadow: 0 0 0 5px rgba(220, 20, 60, 0); }
            100% { box-shadow: 0 0 0 0 rgba(220, 20, 60, 0); }
        }
        .pulse-dot-indicator::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            border-radius: 50%;
            animation: dynamicPulse 2s infinite ease-in-out;
        }
    </style>
</div>

    <script>
    const canvas = document.getElementById('fireworksCanvas1');
    const ctx = canvas.getContext('2d');

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        // Set font once here or when canvas changes size, rather than inside the particle loop
        ctx.textBaseline = 'middle';
        ctx.textAlign = 'center';
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    const icons = ['💬', '✉']; 
    const particles = [];

    // Helper to convert hex colors to dynamic RGBA strings without changing canvas states
    function hexToRgb(hex) {
        const bigint = parseInt(hex.slice(1), 16);
        return {
            r: (bigint >> 16) & 255,
            g: (bigint >> 8) & 255,
            b: bigint & 255
        };
    }

    const baseColors = ['#dc143c', '#ff4d6d', '#ffb703', '#ffffff'].map(hexToRgb);

    class BurstParticle {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.char = icons[Math.floor(Math.random() * icons.length)];
            
            const angle = Math.random() * Math.PI * 2;
            const speed = Math.random() * 4 + 2;
            this.vx = Math.cos(angle) * speed;
            this.vy = Math.sin(angle) * speed;
            
            this.alpha = 1;
            this.decay = Math.random() * 0.015 + 0.01;
            this.size = Math.floor(Math.random() * 12 + 14);
            this.rgb = baseColors[Math.floor(Math.random() * baseColors.length)];
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            this.vy += 0.04; 
            this.alpha -= this.decay;
        }

        draw() {
            // High-performance approach: Avoid save/restore and draw directly using canvas fillStyle
            ctx.fillStyle = `rgba(${this.rgb.r}, ${this.rgb.g}, ${this.rgb.b}, ${this.alpha})`;
            ctx.font = `${this.size}px Arial`;
            ctx.fillText(this.char, this.x, this.y);
        }
    }

    function createExplosion() {
        const x = Math.random() * canvas.width;
        const y = Math.random() * (canvas.height * 0.6) + (canvas.height * 0.1); 
        // Reduced slightly from 24 to 18 for perfect mobile/low-end device frame rates
        for (let i = 0; i < 16; i++) {
            particles.push(new BurstParticle(x, y));
        }
    }

    let lastLaunch = 0;
    function animateFrame(timestamp) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if (timestamp - lastLaunch > Math.random() * 600 + 900) {
            createExplosion();
            lastLaunch = timestamp;
        }

        for (let i = particles.length - 1; i >= 0; i--) {
            const p = particles[i];
            p.update();
            p.draw();
            
            if (p.alpha <= 0) {
                particles.splice(i, 1);
            }
        }
        requestAnimationFrame(animateFrame);
    }

    requestAnimationFrame(animateFrame);
</script>
</body>
</html>
