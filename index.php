<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css" >
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Script PHP</title>
</head>
<body>
    <session class="qr_container">
        <p style="font-size:25px; color:white; font-weight:600;">Generate QRCode<p>
        <div id="confete">
        </div>
        <div class="qr_menu">
            <div class="qr_code_display">
                <div id="caixas_rotatorias" class="caixas_rotatorias">
                    <div class="loader6"></div>
                </div>
                <div id="aviso_qrcode">
                    <p>Insert a Value!</p>
                </div>
                <img id="qrcode" src="" alt="QR Code">
            </div>
            <input id="value_qrcode_generate" placeholder="Value or link" />
            <button onclick="gerarQRCode()">Generate</button>
        </div>
        <p class="powered"><strong>powered</strong> by Vitor Manoel</p>
    </session>
    <script>
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function getRandomNumber() {
            return Math.floor(Math.random() * 401) - 200;        
        }
        function gerar_negativo(min, max){
            return Math.floor(Math.random() * (Math.abs(min) - Math.abs(max) + 1)) + max;
        }
        var items= [1,2,3,4,5,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9,6,7,8,8,9,9]
        var spans = document.getElementById("confete")
        const htmlist= items.map(item => {
            var random = getRandomInt(10,55)
            var teste = -12||+13
            var teste2 = gerar_negativo(-10,-100) || getRandomInt(1,100)
            return `<span style="--g:${teste2};--i:${random}; transform:translateX(${getRandomNumber()}px) rotate(${random-4}deg) rotate(${getRandomNumber()}deg) rotate(${random-8}deg);"></span>`
        })
        spans.innerHTML = htmlist.join('')
        document.addEventListener('DOMContentLoaded', function() {
            var img = document.getElementById('qrcode');
            img.src = "qr.png"
            console.log('O DOM está completamente carregado e analisado.');
            // Aqui você pode colocar o código que deseja executar quando o DOM estiver pronto
        });
        function gerarQRCode() {
            var conteudo = document.getElementById('value_qrcode_generate').value;
            var confete = document.getElementById('confete');
            var aviso = document.getElementById('aviso_qrcode');
            var img = document.getElementById('qrcode');
            aviso.style.display= "none"
            if (conteudo ==""){
                img.style.display = "none"
                setTimeout(function() {
                    aviso.style.display = "flex"
                }, 200);
            }
            else{
                img.style.display = "none"
                var loading = document.getElementById("caixas_rotatorias")
                loading.style.display= "inline-block"
                setTimeout(function() {
                    img.src = 'generate.php?conteudo=' + encodeURIComponent(conteudo);
                    loading.style.display= "none"
                    img.style.display = "flex"
                    setTimeout(() => {
                        confete.style.display="flex"
                        setTimeout(() => {
                            confete.style.display="none"   
                        }, 700);
                    }, 500);
                }, 1000);

            }
        }

    </script>
</body>

<style>


</style>
</html>