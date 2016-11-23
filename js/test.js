
paypal.Button.render({
    env: 'sandbox', // Optional: specify 'sandbox' environment

    client: {
        sandbox: 'AfFRS3jrsy0B2NzJjUjhEscrdqtU7CtC5-zT2BtU0AYlbrI5b7v6g3Qttj6thQMV9ANQFIcF2xNAaBE3',
        production: 'xxxxxxxxx'
    },
    payment: function () {

        var env = this.props.env;
        var client = this.props.client;
        return paypal.rest.payment.create(env, client, {
            "intent": "sale",
            "payer": {
                "payment_method": "paypal"
            },
            "transactions": [
                {
                    "amount": {"total": "270", "currency": "BRL"},
                    "description": "Recicle course for violators drivers."
                }
            ],
            "note_to_payer": "Curso de Reciclagem para Condutores Infratores, 270 BRL",
            "redirect_urls": {
                "return_url": "http://ead.iprovida.org.br/custom/signup/paypal_success.php",
                "cancel_url": "http://ead.iprovida.org.br/signup.php"
            }
        }); // end if paypal payment create
    },
    commit: true, // Optional: show a 'Pay Now' button in the checkout flow

    onAuthorize: function (data, actions) {

        console.log(JSON.stringify(data));

        /*
         if (error === 'INSTRUMENT_DECLINED') {
         actions.restart();
         }
         */

        return actions.redirect();
    },
    onCancel: function (data, actions) {
        return actions.redirect();
    },
    onError: function (err) {
        // Show an error page here, when an error occurs
    }

}, '#paypal-button');



