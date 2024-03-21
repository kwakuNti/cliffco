<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get Quote</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/flight.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div class="navbar">
        <img src="kasperlogo.png" height=60 width=140 class="companylogo">
    </div>
    </div>
    <div class="container">
        <h3 class="getquotetext">Get Quote</h3>

        <div class="blocks">
            <!-- partial:index.partial.html -->
            <div class="left">
                <div class="triptype">
                    <button type="button" class="one-way-button">One-Way</button>
                    <button type="button" class="round-trip-button">Round-Trip</button>
                </div>
                <p>From</p>
                <div class="select">
                    <div class="selectBtn" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Thunder Bay
                    </div>
                    <div class="selectDropdown">
                        <div class="option" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Longlac</div>
                        <div class="option" data-type="secondOption"><i class="fas fa-map-marker-alt"></i>Second option
                        </div>
                        <div class="option" data-type="thirdOption"><i class="fas fa-map-marker-alt"></i>Third option
                        </div>
                    </div>
                </div>
                <p>To</p>
                <div class="select">
                    <div class="selectBtn" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>Longlac</div>
                    <div class="selectDropdown">
                        <div class="option" data-type="firstOption"><i class="fas fa-map-marker-alt"></i>First option
                        </div>
                        <div class="option" data-type="secondOption"><i class="fas fa-map-marker-alt"></i>Second option
                        </div>
                        <div class="option" data-type="thirdOption"><i class="fas fa-map-marker-alt"></i>Third option
                        </div>
                    </div>
                </div>
                <p>Departure Date</p>
                <div class="date-input-container">
                    <i class="fas fa-calendar-alt date-icon"></i>
                    <input class="date-input-field " type="text" id="sourcedatepicker" placeholder="mm/dd/yyyy">
                </div>
                <p>Arrival Date</p>
                <div class="date-input-container">
                    <i class="fas fa-calendar-alt date-icon"></i>
                    <input class="date-input-field" type="text" id="destinationdatepicker" placeholder="mm/dd/yyyy">
                </div>
                <p>Passengers</p>
                <div class="select">
                    <div class="selectBtn" data-type="firstOption"><i class="fas fa-user"></i>1 Adult, 2 Students</div>
                    <div class="selectDropdown">
                        <div class="option" data-type="firstOption"><i class="fas fa-user"></i>First option</div>
                        <div class="option" data-type="secondOption"><i class="fas fa-user"></i>Second option</div>
                        <div class="option" data-type="thirdOption"><i class="fas fa-user"></i>Third option</div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="trip-detail-container">
                    <div class="one-way-container">
                        <h3 class="trip-detail-title">One-Way</h3>
                        <table>
                            <table>
                                <tr>
                                    <td>From</td>
                                    <td>Thunder Bay</td>
                                </tr>
                                <tr>
                                    <td>To</td>
                                    <td>Longlac</td>
                                </tr>
                                <tr>
                                    <td>Transfers</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Departure</td>
                                    <td>2021-08-28 18:00:00 ET</td>
                                </tr>
                                <tr>
                                    <td>Arrival</td>
                                    <td>2021-08-28 17:00:00 ET</td>
                                </tr>
                            </table>
                        </table>
                    </div>
                    <hr>
                    <div class="two-way-container">
                        <h3 class="trip-detail-title">Round-Trip</h3>
                        <table>
                            <tr>
                                <td>From</td>
                                <td>Thunder Bay</td>
                            </tr>
                            <tr>
                                <td>To</td>
                                <td>Longlac</td>
                            </tr>
                            <tr>
                                <td>Transfers</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Departure</td>
                                <td>2021-08-28 18:00:00 ET</td>
                            </tr>
                            <tr>
                                <td>Arrival</td>
                                <td>2021-08-28 17:00:00 ET</td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <div class="price-container">
                        <h3 class="trip-detail-title">Price</h3>
                        <table>
                            <tr>
                                <td>Base Price</td>
                                <td>CA $300</td>
                            </tr>
                            <tr>
                                <td>Tax</td>
                                <td>CA $30</td>
                            </tr>
                            <tr>
                                <td>Total Price</td>
                                <td>CA $330</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="buttons">
            <button type="button">Get Quote</button>
            <button type="button">Book Tickets</button>
        </div>
    </div>
    <!-- partial -->
    <script src="../public/js/flight.js"></script>

</body>

</html>