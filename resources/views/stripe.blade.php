<!DOCTYPE html>
<html>
<head>
    <title>BDoctors</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .panel {
            border-radius: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            background-color: #f5f5f5;
            border-bottom: 1px solid #ddd;
            padding: 15px;
        }

        .panel-title {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .panel-body {
            padding: 20px;
        }

        .form-group.required label:after {
            content: "*";
            color: #ff0000;
            margin-left: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .has-error .form-control {
            border-color: #ff0000;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #337ab7;
            border-color: #2e6da4;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .open .dropdown-toggle.btn-primary {
            background-color: #286090;
            border-color: #204d74;
        }

        .alert-danger {
            background-color: #f2dede;
            border-color: #ebccd1;
            color: #a94442;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{ route('admin.sponsorship.index') }}" class="btn btn-default">Annulla pagamento</a>
        <h2 class="text-center">Inserisci le informazioni</h2>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dettagli Pagamento</h3>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                            @csrf

                            <div class="form-group required">
                                <label class="control-label">Nome Carta</label>
                                <span class="input-group-text">
                                    <img src="/paypall-logo.png" alt="Logo PayPal" style="max-width: 20px;">
                                    <img src="/visa-logo.png" alt="Visa PayPal" style="max-width: 20px;">
                                    <img src="/Mastercard-logo.png" alt="Logo PayPal" style="max-width: 20px;">
                                </span>
                                <input class="form-control" size="4" type="text">
                            </div>


                            <div class="form-group card required">
                                <label class="control-label">Numero Carta</label>
                                <input autocomplete="off" class="form-control card-number" size="20" type="text">
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-4 form-group cvc required">
                                    <label class="control-label">CVC</label>
                                    <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311"
                                        size="4" type="text">
                                </div>
                                <div class="col-xs-12 col-md-4 form-group expiration required">
                                    <label class="control-label">Mese di Scadenza</label>
                                    <input class="form-control card-expiry-month" placeholder="MM" size="2"
                                        type="text">
                                </div>
                                <div class="col-xs-12 col-md-4 form-group expiration required">
                                    <label class="control-label">Anno di Scadenza</label>
                                    <input class="form-control card-expiry-year" placeholder="YYYY" size="4"
                                        type="text">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <input type="text" class="hidden" value="{{$sponsorship->id}}" name="sponsorship">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Paga Adesso
                                        ({{ $sponsorship->price }})</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {
            /* Stripe Payment Code */
            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = [
                        'input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;

                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');

                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }
            });

            /* Stripe Response Handler */
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
</body>
</html>
