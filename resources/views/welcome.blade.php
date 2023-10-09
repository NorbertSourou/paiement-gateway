<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>
<body>
<script src="https://cdn.kkiapay.me/k.js"></script>
<button id="pay">Payer</button>
<script>
    $(document).ready(function () {
        addSuccessListener(response => {
            console.log(response);

            let transactionId = response.transactionId

            console.log(transactionId)

            // Todo : make ajax call to verify transaction on server side https://docs.kkiapay.me/v1/plugin-et-sdk/admin-sdks-server-side
        });

        addFailedListener(error => {
            console.log(error);

            // Todo : handle error when something wrong happens
        });


    })

    $('#pay').on('click', function () {
        openKkiapayWidget({
            amount: "1",
            key: "55b13c30d5ce11eb83dacb6c77736f83", // A changer et à mettre en variable d'environnement
            url: "",
            position: "center",
            sandbox: "true", // à changer en prod
            callback: "", // tu peux rediriger juste après ta requete ajax
            data: "Frais de dépot oops", // Motif de paiement

        })
    })
</script>

</body>


</html>
