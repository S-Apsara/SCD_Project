<x-web-layout title="Contact - Glowera">


    <div class="container-fluid c-page bg-img">
        <div class="row">
            <div class="text-center pt-16 md:pt-0">
                <h1 class="h1 form_heading pt-1">Contact Us</h1>
                <h3 class="h3 form_subheading pt-1">Feel Free To Ask</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-8">
                    <form class="form_style mt-4" id="myForm">
                        <label for="email" class="form-label login_label mt-1 h5">Enter Your Email:</label>
                        <input type="email" class="form-control login_input mt-1" id="email" required>
                        
                        <label for="query" class="form-label login_label mt-1 h5">Your Query:</label>
                        <textarea class="form-control mt-1" id="query" rows="4" required></textarea>

                        <div class="text-center">
                            <button class="btn btn-outline-success btn-lg login_btn mt-4" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

       
        <a href="https://wa.me/YOUR_NUMBER" target="_blank" class="whatsapp-float" title="Chat with us on WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>
</x-web-layout>
