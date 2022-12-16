<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/adding_card.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- bootstrap -->

    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
    <script src="/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Card</title>
</head>
<body>
    <section class="card_section">
        <div class="the_form">
            <div class="the_info">
                <h1>
                    Adding a card
                </h1>
                <p>
                    To increase the security of your payments, banking systems ask for personal data. They only need to be specified once.
                </p>
            </div>
            <form style="justify-content: space-between" class="row g-3">
                <div class="col-md-8">
                    <label for="inputCard_number" class="form-label">Card number</label>
                    <input type="text" class="form-control" id="inputCard_number">
                </div>
                <div class="col-md-3">
                    <label for="inputCVV" class="form-label">CVV/CVC code</label>
                    <input type="text" class="form-control" id="inputCVV">
                </div>
                <div class="col-md-8"   >
                    <label for="inputName" class="form-label" >Name on card</label>
                    <input type="text" class="form-control" id="inputName">
                </div>
                <div class="col-md-3">
                    <label for="inputExpiry" class="form-label">Expiry</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12 d-flex">
                    <svg style="transform: scale(1.2); margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                    </svg>
                    <p>Save card</p>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <div class="d-flex">
                        <svg style="transform: scale(1.2); margin-right: 10px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                        </svg>
                        <p>Your data is secure</p>
                    </div>
                    <button style="width: 100px" type="submit" class="btn btn-secondary"> Cancel</button>
                    <button style="width: 100px" type="submit" class="btn btn-dark"> Add data</button>
                </div>

            </form>
        </div>

    </section>

</body>
</html>
