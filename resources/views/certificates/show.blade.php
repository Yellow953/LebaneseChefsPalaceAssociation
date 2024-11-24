<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestChef Certificate</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!--Certificate CSS File-->
    <link rel="stylesheet" href="{{ asset('assets/css/certificate.css') }}">
    <!--General CSS File-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div class="certificate">
        <div class="header">
            <div><img src="{{ asset('assets/images/ghi/GHI.png') }}" alt="GHI Logo" class="logo"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-2">
                <div class="row">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="LCPA Logo" class="institutes-logos">
                </div>
                <div class="row">
                    <img src="{{ asset('assets/images/golden-book/golden-book.png') }}" alt="Golden Book"
                        class="institutes-logos">
                </div>
                <div class="row">
                    <img src="{{ asset('assets/images/golden-book/golden-book.png') }}" alt="TestChef"
                        class="institutes-logos">
                </div>
            </div>
            <div class="col-8">
                <div class="title">LEBANESE CHEFS PALACE ASSOCIATION</div>

                <div class="content">
                    CERTIFIES THAT<br>
                    <strong style="font-size: 20px; margin: 20px 0; display: block;">MR:<u>{{ ucwords($certificate->chef
                            ? $certificate->chef->name : $certificate->restaurant->name) }}</u></strong>
                    based on his course of {{ ucwords($certificate->certificateType->name) }}, has been give this
                    certificate of<br>
                    <strong class="text-uppercase" style="font-size: 36pt; margin: 20px 0; display: block;">{{
                        $certificate->chef->rank }}</strong>
                    SPECIALIZING IN LEBANESE KITCHEN
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-2">
                    <div class="row">
                        <img src="{{asset('assets/images/ghc/GHC.png')}}" alt="Global Hospitality Consultant"
                            class="institutes-logos">
                    </div>
                    <div class="row">
                        <img src="{{asset('assets/images/staycare/staycare.png')}}" alt="StayCare"
                            class="institutes-logos">
                    </div>
                    <div class="row">
                        <img src="{{asset('assets/images/global-hospitality-events/global-hospitality-events.png')}}"
                            alt="Global Hospitality Events" class="institutes-logos">
                    </div>
                </div>
            </div>
        </div>
        <div class="signature-area">
            <div class="signature-line">
                <div class="signature-title">Date</div>
            </div>
            <div class="signature-line">
                <div class="signature-title">Association Stamp</div>
            </div>
            <div class="signature-line">
                <div class="signature-title">President Signature</div>
            </div>
        </div>

        <div class="date">lebanesechefspalace.org</div>
    </div>

</body>

</html>