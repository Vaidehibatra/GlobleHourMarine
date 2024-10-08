<!DOCTYPE html>
<html lang="en">

<head>
    <title>Globle Hour Marine</title>
    <link rel="icon" type="image/png" href="assets/images/GHM_logo.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link href="assets/css/magicscroll.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="http://localhost/GlobleHourMarine/assets/css/style.css">
</head>
<style>
    .panel-title>a:before {
        float: right !important;
        font-family: FontAwesome !important;
        content: "\f068" !important;
        padding-right: 5px !important;
    }

    .faq-img {
        height: 700px;
        object-fit: cover;
    }

    .panel-title>a.collapsed:before {
        float: right;
        content: "\f067"
    }

    .panel-title>a:hover,
    .panel-title>a:active,
    .panel-title>a:focus {
        text-decoration: none !important;
    }

    .panel-heading {
        padding: 20px 15px !important;
        border-bottom: 1px solid transparent !important;
        border-top-right-radius: 3px !important;
        border-top-left-radius: 3px !important;
    }

    .panel {
        margin-bottom: 20px !important;
        background-color: #ffffff !important;
        border: 1px solid transparent !important;
        -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%) !important;
        /* box-shadow: 15px 16px 13px 8px rgb(4 4 4 / 5%) !important; */
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px !important;
    }

    .faq-section {
        max-width: 800px !important;
        margin: 0 auto !important;
        background-color: white !important;
        padding: 20px !important;
        border-radius: 10px !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
    }

    .faq-header {
        text-align: center !important;
        margin-bottom: 30px !important;
    }

    .faq-header h1 {
        font-size: 2.5rem !important;
        font-weight: bold !important;
        color: #2a2a2a !important;
    }

    .faq-header span {
        font-style: italic !important;
        color: #005f73 !important;
    }

    .faq-item {
        margin: 15px 0 !important;
        border-bottom: 1px solid #eee !important;
        padding-bottom: 10px !important;
    }

    .faq-question {
        font-size: 1.2rem !important;
        font-weight: bold !important;
        background-color: #014475 !important;
        color: white !important;
        cursor: pointer !important;
        display: flex !important;
        padding: 15px !important;
        border-radius: 10px !important;
        justify-content: space-between !important;
        align-items: center !important;
    }

    .faq-answer {
        display: none;
        padding: 10px 0;
        margin-left: 30px;
        font-weight: bold;
        font-size: 1.1rem;
        color: #4d4d4d;
    }

    .faq-question.active+.faq-answer {
        display: block !important;
    }

    .faq-toggle-icon {
        font-size: 1.5rem;
        color: white;
    }
</style>

<body>

    <div id="carouselExampleSlides" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/GlobleHourMarine/assets/images/6.svg" class="d-block w-100 faq-img" alt="...">
            </div>

        </div>
    </div>
    <br>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    What is crude oil?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p> Crude oil is a naturally occurring, unrefined petroleum product composed of hydrocarbon deposits and other organic materials.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    From where is crude oil extracted?
                                    <span class="faq-toggle-icon">+</span>
                                </div>

                                <div class="faq-answer">
                                    <p>Crude oil is extracted from either the sea or the earth. Global Hour Marine extracts it from the sea.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    How is crude oil extracted?
                                    <span class="faq-toggle-icon">+</span>
                                </div>

                                <div class="faq-answer">
                                    <p>Crude oil is extracted through drilling wells into the earth, where it flows to the surface due to pressure or is pumped out.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    What is the significance of crude oil in daily life?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p> Crude oil is vital for energy production, transportation, manufacturing of goods, and is a raw material for various chemicals and plastics.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    How is the quality of crude oil determined?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p> The quality is determined by its density (measured in API gravity) and sulfur content, influencing its suitability for refining and market value.</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    How much crude oil does India import annually to meet its energy needs?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p> India imports approximately 80-85% of its crude oil to meet its energy needs.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    The largest suppliers of crude oil to India?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p>The largest suppliers of crude oil to India are Saudi Arabia;Iraq;United Arab Emirates(UAI);Russia;Nigeria</p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    Who is the largest receiver of crude oil in India?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p> the largest states in India that are significant receivers of crude oil are: Rajasthan;Gujarat;Uttar Pradesh;Tamil Nadu;kochi;Andra Pradesh and Maharastra </p>
                                </div>
                            </div>


                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    What process do companies use to refine crude oil into various products?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p>Crude oil is refined through processes like distillation, cracking, and reforming to produce various petroleum products.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    What are the typical production temperatures for different petroleum products derived from crude oil?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p>

                                        <li>Petrol (Gasoline) is typically produced at around 150°C.</li>
                                        <li>Kerosene is produced at approximately 200°C.</li>
                                        <li>Diesel is obtained at about 300°C.</li>
                                        <li>LPG (Liquefied Petroleum Gas) is typically produced at lower temperatures, around 30-60°C.</li>
                                        <li>Fuel oil is obtained at higher temperatures, usually around 350-400°C.</li>
                                    </p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question d-flex justify-content-between">
                                    What is bitumen, and what are its uses?
                                    <span class="faq-toggle-icon">+</span>
                                </div>
                                <div class="faq-answer">
                                    <p>Bitumen is a viscous, black, and sticky substance that is a byproduct of the crude oil refining process. It is composed primarily of hydrocarbons and is often referred to as asphalt in the context of paving and road construction.

                                        Uses of Bitumen
                                        <li>Road Construction</li>
                                        <li>Roofing</li>
                                        <li>Waterproofing</li>
                                        <li>Construction Materials</li>
                                        <li>Sealing</li>
                                        <li>Industrial Applications</li>
                                    </p>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const icon = item.querySelector('.faq-toggle-icon');
                const answer = item.nextElementSibling;


                answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';

                // Change the toggle icon
                icon.textContent = (icon.textContent === '+') ? '-' : '+';

                // Optional: Highlight the active question
                document.querySelectorAll('.faq-question').forEach(q => {
                    if (q !== item) {
                        q.classList.remove('highlighted-question');
                        q.querySelector('.faq-toggle-icon').textContent = '+';
                        q.nextElementSibling.style.display = 'none';
                    }
                });
                item.classList.toggle('highlighted-question');
            });
        });
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script src="assets/js/magicscroll.js" type="text/javascript"></script>
    <script src="assets/js/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>