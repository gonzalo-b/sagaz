<div class="contactTopBg">

</div>
<div id="contacto" class="form-section">
    <div class="form-container center container" id="contactForm">
        <h2 class="contactH">¡Contactános!</h2>
        <div class="clearfix"></div>
        <form name="contact-form" id="contact-form" method="post" action="{{url('contacto')}}" enctype="multipart/form-data">
            @csrf
            <div class="row form-start">
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nombre" required>
                </div>
                <div class="col-12 col-sm-6">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-12 col-sm-6">
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12">
                    <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" required></textarea>

                </div>
            </div>
            <div class="row">
                <div class="form-group center capchaBox1" style="margin: 0px auto;">
                    <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_CAP_SITE_KEY')}}"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 text-center btn-row grid__item theme-2">
                    <div class="particles-wrapper">
                        <button id="submitContacto" class="btn-sagaz particles-button">Enviar Mensaje</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="contactSuccess">
        <h2 class="contactH">Tu mensaje ha sido enviado</h2>
        <h3>En el transcurso de 2 días habiles nuestro equipo se pondra en contacto.</h3>
        <img src="/img/logoBiger.png">
    </div>
</div>
<div class="contactBotBg">
</div>