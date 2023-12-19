<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<style>
    @font-face {
        font-family: 'MyCustomFont';
        src: url('path-to-your-font.woff2') format('woff2'),
            url('path-to-your-font.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 80vh;
        text-align: center;
        animation: fadeIn 1s forwards;
    }

    .verified-text {
        font-family: 'Roboto', sans-serif;
        font-size: 6em;
        font-weight: 900;
        color: #28a745;
        text-shadow: 2px 2px 4px #000000;
        margin-top: -5%;
        opacity: 0;
        animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>
<div class="center-container">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <dotlottie-player src="https://lottie.host/1a6d0e59-d276-4296-8aec-35186fc22071/SLOPM4rXx3.json"
        background="transparent" speed="2" style="width: 700px; height: 700px;" direction="1" mode="normal" loop
        autoplay></dotlottie-player>
    <div class="verified-text">Berhasil Verified</div>
</div>
